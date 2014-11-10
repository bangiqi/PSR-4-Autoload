<?php

use Configuration\Config as Config;

use Social\Repositories\UserRepository as UserRepository;
use Social\Filters\AuthFilter as AuthFilter;
use Social\Filters\Testing as Testing;

use Social\Featured\Action as Action;
use Social\Featured\Notification as Notification;

require_once "app/start.php";

//$user = new User();

//$auth = new AuthFilter();
//$action = new Social\Featured\Action();
//$testing =  new Testing();
//$user = new UserRepository();

//$testing =  new Config();
//Config::setTimezone("Asia/Jakarta");

$action = new Action();
Action::setTimezone("Asia/Jakarta");
//tampil
echo $action->welcome("Rizki Ramdani");
echo $action->komentar("Sekarang ada mata kuliah tidak kawan?");