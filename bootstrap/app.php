<?php
session_save_path(__DIR__ . '/../storage/sessions/');
session_start();
require_once __DIR__ . '/../vendor/autoload.php';

require_once base_path('bootstrap/core/env.php');
require_once base_path('bootstrap/core/container.php');
require_once base_path('bootstrap/core/route.php');
