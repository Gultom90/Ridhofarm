<?php
require 'config/constants.php';
// Destroy all session and redirect user to home page
session_destroy();
header('location: ' . ROOT_URL);
die();
