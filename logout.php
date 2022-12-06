<?php
require_once 'core/boot.php';

unset($_SESSION['user']);
header('Location: index.php');