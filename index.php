<?php
require 'vendor/autoload.php';
require 'core/bootstrap.php';
require 'core/database/Request.php';

Router::load('routes.php')->direct(Request::uri(), Request::method());