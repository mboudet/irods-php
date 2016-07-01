#irods-php

This is a fork of the official DICE-UNC iRODS PHP api.

## Installation

Preferably through [composer](https://getcomposer.org/).

```
php composer.phar require "MaastrichtUniversity/irods-php"
```

## Features and bug fixes compared to DICE-UNC version

* Support composer autoloading
* Cleaned up formatting
* Support proxy user (aka switch user)
* INT_RP reply support
* Support for special collections (mounted collections in particular) in different places (not all)
* Updated error codes to iRODS 4.1.5 (should work with later versions too)
* Fixes for PAM logins over SSL (thanks to Utrecht University)
* Misc. fixes