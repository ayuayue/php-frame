<?php
require_once __DIR__ . '/bootstrap/app.php';
return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet(app('db'));
