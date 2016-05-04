Baïkal for YunoHost
-------------------

*This is a work-in-progress package review to update Baikal to 0.4.x
and make use of new YunoHost facilities - e.g. helpers - coming with 2.3.x.*

[Baikal](http://baikal-server.com/) is a Cal and CardDAV server, based on
sabre/dav, that includes an administrative interface for easy management.

**Shipped version:** 0.4.4

## Installation

While it's merged to the official application list, you can install it in order
to try - or use it with caution! - either from the command line:

    $ sudo yunohost app install https://github.com/YunoHost-Apps/baikal_ynh/tree/testing

or from the Web administration:

  * Go to *Applications*
  * Click on *Install*
  * Scroll to the bottom of the page and put `https://github.com/YunoHost-Apps/baikal_ynh/tree/testing`
    under **Install custom app**.

## TODO

 * Test the upgrade from the current official package
 * Add `backup` and `remove` scripts
 * Update `config.php` and `config.system.php` at upgrade

## Links ##

**Baikal**: http://baikal-server.com/

**YunoHost**: https://yunohost.org/
