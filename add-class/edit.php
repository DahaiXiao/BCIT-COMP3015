<?php
$classList = [];

include('function.php');
$id = post('id');
$name = post('name');


if(!$id){
	showError('ID Needed');
}

$class = getClass($id);
if(!$class){
	showError('Invalid ID');
}

$class['name'] = $name;
$saveResult = saveClass($class);

if($saveResult == false){
	showError('Edit Class Failed');
}
header('Location: index.php');