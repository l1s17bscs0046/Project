<?php
session_start();
session_destroy();
header('location:index.php?logged_out=You have logged out');