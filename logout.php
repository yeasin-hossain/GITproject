<?php

session_start();
session_destroy();
setcookie('login', '',time()-84600);
header('location: login.php');