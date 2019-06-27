<?php
session_start();
session_destroy();
header('location:admin.php?logged_out=You have logged out');