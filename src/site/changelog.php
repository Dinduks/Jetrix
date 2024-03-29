<? include("header.inc.php") ?>
      
<h1>Changelog</h1>

<pre>
Changes in version 0.2.3 (2008-08-23)
-------------------------------------

- Fixed a bug in the mode 4 (25% pure) of the #custom channel that was causing a crash of the classic tnet 1.13 client
- The address of the server is now published to http://servers.tetrinet.fr instead of tsrv.com, tetrinet.org and tfast.org


Changes in version 0.2.2 (2005-04-07)
-------------------------------------

- Fixed a bug preventing the clients from connecting to a server with a default charset different from ISO-8859-1
- The configuration is no longer broken by a "&amp;" char in the description of a channel


Changes in version 0.2.1 (2005-02-18)
-------------------------------------

- Fixed the Shutdown button on the server administration page
- Fixed a bug preventing the configuration files from being saved if the server was installed in a path containing
  a space character
- Running Jetrix with jetrix.exe no longer saturate the CPU
- Fixed a bug preventing the execution of several query commands with the same connection


Changes in version 0.2 (2005-01-18)
-----------------------------------

Player visible changes
- new commands: /afk (away from keyboard), /ignore (ignore list), 
  /mode (pre configured settings, thanks to Gamereplay)
- Added the sudden death mode
- portuguese translation contributed by V�tor Melo
- operators can now create new channels dynamically with the /join command
- The name of the player starting or stopping the game is now displayed 
  on the party line
- the StartFilter can now trigger a countdown before starting the game 
  by specifying a number of seconds in the filter's "countdown" parameter
- partial support of IRC clients on the port 31456 (disabled by default)
- on connecting, the player now joins automatically the first accessible 
  channel with other players
- Added a flow control to prevent players using the windows client 
  from being disconnected when they are flooded
- The server now responds "PONG" when a player sends just "t" in an ingame message.
- It's now possible to remain idle forever on the #admins channel
- the dutch translation is once again up to date, thanks to "Sobi" from Tetridome
- improved the accuracy of the game stats (bpm)

Admin visible changes
- Jetrix now requires the JRE 1.5 to run
- the configuration file config.xml has been split in two files: server.xml and channels.xml
- a listener can now be disabled at startup by setting the auto-start attribute to false
- the address of the server is now automatically published 
  on tetrinet.org, tfast.org &amp; tsrv.com server lists
- the server can be locked from the admin console, once locked new connections will be rejected
- ghost connections (connections that never time out) are now automatically removed
- commands can be hidden from the /help list by specifying a "hidden" 
  attribute on the &lt;command> element
- the access level of a command can be overridden by adding 
  an "access-level" attribute on the &lt;command> attribute
- web admin: there is now a specific administrator password to log on the 
  admin console (admin/adminpass by default instead of operator/jetrixpass)
- web admin: changes made to the configuration are now automatically saved to the disk !
- web admin: the name of the server can now be configured
- web admin: the idle time is now displayed on the user page
- web admin: listeners and services can be started/stopped
- web admin: implemented the "Shutdown" button on the "Server" page
- web admin: default values on the settings screen are now displayed in gray
- web admin: erasing a value on the settings screen will now reset it to the default value
- web admin: added basic server statistics (uptime, game count and connection count)
- web admin: commands can be removed
- web admin: the ip bound to the server can be changed on the 'General' tab, 
  the ip available are automatically detected and listed
- web admin: added an "Idle allowed" parameter on the channel page, it maps to the &lt;idle> 
  element in the channels.xml file
- web admin: added a drop down list to select the winlist on the channel page
- web admin: added the 'Description' field on the channel page
- the server now checks the availability of a new release and display 
  a message on startup and in the server administration page
- a system tray icon is displayed on windows platforms
- a native executable is provided on windows to run the server without the DOS console
- a windows installer is available
- reduced the size of the binary distribution by 35%

Developer visible changes
- code ported to Java 5.0 !
- added the services interface (net.jetrix.Service)
- renamed the Destination.sendMessage() method to send()
- Commands requiring a minimum number of parameters can now implement 
  the ParameterCommand interface, the server will validate automatically 
  the number of input parameters.
- added a clear() and a size() method to the Winlist interface
- added an AbstractCommand class to reduce the code needed to implement a new Command
- Localized messages can now have localized parameters by prefixing 
  the parameter with "key:" : Language.getText("key", "key:paramKey");

Changes in version 0.1.3 (2004-01-20)
-------------------------------------
- fixed the query protocol (thanks to ekn for the debugging info)
- tspec clients can now speak on channels
- the list of available languages can be displayed with /lang
- the new score &amp; rank of the winner is now announced in the channel
- fields are now updated on joining a channel (bug 808507)
- Jetrix can now read and write tetrinetx winlists
- winlists now accept initialization parameters like filters
- implemented the new tetrinet 1.14 block synchronization protocol
- the /join command now accepts a partial channel name as argument
- reduced the size of the jetrix distribution by 25%
- web admin: channel settings editing implemented
- web admin: basic server parameters implemented
- web admin: kick/ban implemented
- web admin: added a field tab in the channel view
- added a topic to the channels
- added a "port" attribute to the "listener" element in config.xml
- spanish translation contributed by Julian Mesa Llopis &amp; Bryan Reynaert

Changes in version 0.1.2 (2003-08-03)
-------------------------------------
- new commands : /move, /goto, /petition, /tmsg, /speclist
- new game mod : 7tetris
- basic web administration console available on port 8080 (read only)
- basic tspec support
- implemented the winlists
- implemented the tetrinetx query protocol
- the connection timeout is now enabled
- implemented the ban list (hosts only)
- italian translation contributed by Claudio Gargiulo
- german translation contributed by Mario Meuser

Changes in version 0.1.1 (2003-03-02)
-------------------------------------
- new commands : /start, /stop, /pause, /random, /reply
- "/start &lt;n&gt;" will run a countdown for n seconds
- the admin console can now use all /commands available to the clients
- the winner is announced at the end of the game
- any jar or class in the ./lib directory is now loaded at startup
- the number of concurrent connections from the same host can be limited (the default value is 2)
- channel access can now be restricted by access level
- channels can now be protected by a password
- the /join command now accepts channel numbers as argument

Changes in version 0.1.0 (2002-11-16)
-------------------------------------
- added support for tetrifast clients
- new commands : /teleport, /summon, /ping and /ip
- level change is now working
- full internationalization support
- added french support
- added dutch support (contributed by Tim Van Wassenhove)
- made the colors &amp; styles protocol independant

Changes in version 0.0.10 (2002-09-28)
--------------------------------------
- implemented the client repository
- nickname uniqueness is now checked on logging
- incomming clients are now rejected when the server is full
- implemented the pluggable command system
- implemented the /who command
- implemented the /tell command (/msg and /cmsg are aliases)
- implemented the /op command
- implemented the /kick command
- implemented the /broadcast command
- implemented the /time command
- implemented the /motd command
- implemented the /emote command
- commands can now be invoked using their partial name (/ver, /t, etc...)
- reduced server startup time
- clients are now properly disconnected on server shutdown

Changes in version 0.0.9 (2002-06-23)
-------------------------------------
- improved channel switching
- implemented the game pause
- the end of the game in now detected
- improved the configuration system
- implemented the channel filter system
- filter: spam blocker
- filter: game auto-start when players say "go"
- filter: special block multiplier
- added the /conf command to display the channel settings
- added server log files
- added a debug mode (run Jetrix with the -Djetrix.debug=true parameter)
- now displaying a message upon player disconnection
- implemented a special block check to prevent forged messages to crash clients
- added the /version command
- added a source distribution
- added a more unix friendly .tar.gz distribution

Changes in version 0.0.8 (2002-03-26)
-------------------------------------
- added the configuration file config.xml
- implemented multi-channel
- added the /list and /join commands

</pre>

<? include("footer.inc.php") ?>