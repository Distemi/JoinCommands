    JoinCommands

Releases: [GitHub](https://github.com/Distemi/JoinCommands/releases)

[�������](#�������) | [English](#english)




# �������

���� ������ ��������� �������(-�) ��� ������ ������ �� ������.

������ ���������� ������� �� ����� config.yml � �� ������ "Commands".

� ������� API ����� �������� ������� �� �� ������.

���������:

Enabled:    - ������� �� ������?(���������� �������(-�) ��� ������ ������ �� ������.)

Commands:   - �������, ������� ����������� ��� ������ ������.

API
-------------


$JC = $this->getServer()->getPluginManager()->getPlugin("JoinCommands");   - ��������� API �������.

$JC->addCommand("say Distemi You join");                                   - ���������� ����� ������� � ���� ������ �������(�������� ��� ������������ �������).

$JC->addCommands(array("say Distemi You join","give Distemi 1"));          - ���������� ��������� ������ � ���� ������ �������(�������� ��� ������������ �������).


�������������
-------------

/joincommands   - ������������ �������.

/jc             - ������������ �������.

/JoinCommands   - ������������ �������.





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



