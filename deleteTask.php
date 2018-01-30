<?php
session_start();
include 'function.php';

$id =$_GET['id'];

$todo = getCsvFile();

unset($todo[$id]);

addArrayToCsv($todo);
$_SESSION['message']= 'Deleted sucsessfull';

header('Location: index.php');

