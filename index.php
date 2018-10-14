<?php
session_start();
include './vendor/autoload.php';
use Routes\CustomRoutes;
CustomRoutes::initRoute();	
