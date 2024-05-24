<?php

require_once __DIR__ . '/../../bootstrap.php';

use app\models\User;

$model = new User(); 
$users = $model->all();

require_once __DIR__ . '/../views/read_view.php';
?>
