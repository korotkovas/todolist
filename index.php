<?php
session_start();
include 'function.php';

$mas=getCsvFile();

include 'view/index.view.php';
