<?php
include 'function.php';

$id =$_GET['id'];

$todo = getCsvFile();

$todo[$id]['done'] = 'done';

addArrayToCsv($todo);

header('Location: index.php');

