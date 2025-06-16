<?php
include_once './session.php';
session_unset();
session_destroy();
header('Localition: ../index.php');
?>