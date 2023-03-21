**************
System_Command
**************
PHP commandline execution interface.

Running functions from the commandline can be risky if the proper precautions
are not taken to escape the shell arguments and reaping the exit status properly.

This class provides a formal interface to both, so that you can run a system
command as comfortably as you would run a PHP function, with full PEAR error
handling as results on failure.
It is important to note that this class, unlike other implementations,
distinguishes between output to stderr and output to stdout.
It also reports the exit status of the command.

So in every sense of the word, it gives PHP shell capabilities.


============
Installation
============
::

    $ composer require pear/system_command


=====
Links
=====
Homepage
  http://pear.php.net/package/System_Command
Bug tracker
  http://pear.php.net/bugs/search.php?cmd=display&package_name[]=System_Command
Packagist
  https://packagist.org/packages/pear/system_command
