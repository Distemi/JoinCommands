    JoinCommands

Releases: [GitHub](https://github.com/Distemi/JoinCommands/releases)

[–усский](#русский) | [English](#english)




# русский

Ётот плагин выполн€ет команду(-ы) при заходе игрока на сервер.

ѕлагин использует команды из файла config.yml и из списка "Commands".

— помощью API можно добавить команды не из списка.

Ќастройки:

Enabled:    - ¬ключЄн ли плагин?(¬ыполн€ют€ команда(-ы) при заходе игрока на сервер.)

Commands:   -  оманды, которые выполн€ютс€ при заходе игрока.

API
-------------


$JC = $this->getServer()->getPluginManager()->getPlugin("JoinCommands");   - ѕолучение API плагина.

$JC->addCommand("say Distemi You join");                                   - ƒобавление одной команды в базу данных плагина(удалитс€ при перезагрузки плагина).

$JC->addCommands(array("say Distemi You join","give Distemi 1"));          - ƒобавление множества команд в базу данных плагина(удалитс€ при перезагрузки плагина).


»спользование
-------------

/joincommands   - перезагрузка плагина.

/jc             - перезагрузка плагина.

/JoinCommands   - перезагрузка плагина.





# english

This is plugin execute command(-s) on player join to server. 

Plugin get from config.yml in list "Commands".

Settings:

Enabled:     - Enable execute commnd(-s) on join player on server? 

Commands:    - Commands execute on player join if - Enabled: true .

API
-------------

$JC = $this->getServer()->getPluginManager()->getPlugin("JoinCommands");   - Get plugin's API.

$JC->addCommand("say Distemi You join");                                   - Add one command to plugin db(remove on reload plugin).

$JC->addCommands(array("say Distemi You join","give Distemi 1"));          - Add more commands to plugin db(remove on reload plugin).


Usage
-------------

/joincommands   - restart plugin.

/jc             - restart plugin.

/JoinCommands   - restart plugin.



