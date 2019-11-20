<?php
session_start();

if(! isset($_SESSION['user'])) {$_SESSION['user'] = array();}

include_once '../core/Route.php';
include_once '../core/View.php';
include_once '../core/Model.php';
include_once '../core/Controller.php';

Route::start();