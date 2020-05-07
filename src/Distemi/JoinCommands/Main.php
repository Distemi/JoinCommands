<?php
namespace Distemi\JoinCommands;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;

class Main extends PluginBase implements Listener {
    


    private static $Enabled = true;
    private static $Commands = [];
    private static $Config;
    
    private static $ConsoleSender;
    
    private static $instance;
    
    public function onEnable() : void{
        @mkdir($this->getDataFolder());
        $this->saveDefaultConfig();
        
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        
        $this->getLogger()->info("███████████████████████████");
        $this->getLogger()->info("█                         █");
        $this->getLogger()->info("█                         █");
        $this->getLogger()->info("█ JoinCommands by Distemi █");
        $this->getLogger()->info("█                         █");
        $this->getLogger()->info("█                         █");
        $this->getLogger()->info("███████████████████████████");
        
        self::$ConsoleSender = new ConsoleCommandSender();
        self::$Config = $this->getConfig();
        self::$Enabled = self::$Config->get("Enabled");
        self::$Commands = self::$Config->get("Commands");
        //$this->getLogger()->info((String)self::$Enabled);

    }
    
    public function JoinEvent(PlayerJoinEvent $event) : void{
        $player = $event->getPlayer();
        if (self::$Enabled==true) {
            foreach (self::$Commands as $a) {
                //$this->getLogger()->info((String)$a);
                $a = str_replace("%player%", $player->getName(), $a);
                $this->getServer()->dispatchCommand(self::$ConsoleSender, $a);
            }
        }
    }
    
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
        $enbl = self::$Enabled;
        $this->reloadConfig();
        self::$Config = $this->getConfig();
        self::$Enabled = self::$Config->get("Enabled");
        self::$Commands = self::$Config->get("Commands");
        $sender->sendMessage(strval("JoinCommands config reloaded!"));
        if ($enbl != self::$Enabled && self::$Enabled == false) {$sender->sendMessage("JoinCommands disabled!");}
        return true;
    }
    
    public function addCommand(String $command) {
        self::$Commands[] = $command;
    }
    public function addCommands(Array $commands) {
        foreach ($commands as $command) {
            self::$Commands[] = $command;
        }
    }
}