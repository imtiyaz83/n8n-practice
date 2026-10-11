<?php

require_once 'config.php';

// Remove all session data
$_SESSION = [];

// Destroy session
session_destroy();

// Redirect to login
header('Location: login.php');
exit;