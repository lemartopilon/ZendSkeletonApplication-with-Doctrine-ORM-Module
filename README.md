ZendSkeletonApplication and Doctrine ORM Module
===============================================

Introduction
------------
This is a simple, skeleton application using the ZF2 MVC layer and module
systems. This application is meant to be used as a starting place for those
looking to get their feet wet with ZF2.


Using Composer (recommended)
----------------------------

    php composer.phar self-update
    php composer.phar install


Configure Doctrine
------------------

    File : config/autoload/doctrine.local.php


Configure Base Url and Base Path
--------------------------------

    File : module/Application/config/module.config.php
    Example: 'base_url' => '/test/'
    URL access: http://localhost/test/