    JoinCommands

Releases | Релизы: [GitHub](https://github.com/Distemi/JoinCommands/releases)

poggit: [![](https://poggit.pmmp.io/shield.state/JoinCommands)](https://poggit.pmmp.io/p/JoinCommands)

[Русский](#русский) | [English](#english)




# русский

Этот плагин выполняет команду(-ы) при заходе игрока на сервер.

Плагин использует команды из файла config.yml и из списка "Commands".

С помощью API можно добавить команды не из списка.

Настройки:

Enabled:    - Включён ли плагин?(Выполняютя команда(-ы) при заходе игрока на сервер.)

Commands:   - Команды, которые выполняются при заходе игрока.

API
-------------


$JC = $this->getServer()->getPluginManager()->getPlugin("JoinCommands");   - Получение API плагина.

$JC->addCommand("say %player% You join");                                  - Добавление одной команды в базу данных плагина(удалится при перезагрузки плагина).

$JC->addCommands(array("say %player% You join","give %player% 1"));        - Добавление множества команд в базу данных плагина(удалится при перезагрузки плагина).


Использование
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

$JC->addCommand("say %player% You join");                                  - Add one command to plugin db(remove on reload plugin).

$JC->addCommands(array("say %player% You join","give %player% 1"));        - Add more commands to plugin db(remove on reload plugin).


Usage
-------------

/joincommands   - restart plugin.

/jc             - restart plugin.

/JoinCommands   - restart plugin.



