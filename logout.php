<?php

include_once("config/init.php");

unset($_SESSION['is_logged_in']);
unset($_SESSION['user_data']);

session_destroy();
header("Location: index.php");