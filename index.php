<?php

use App\Core\Router;
require 'vendor/autoload.php';
require 'core/bootstrap.php';
require 'core/database/Request.php';

Router::load('app/routes.php')->direct(Request::uri(), Request::method());