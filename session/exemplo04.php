<?php

session_id('3hjqde48pju94s44s3hjigq2vh');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);
?>