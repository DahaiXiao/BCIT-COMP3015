<?php
include('function.php');
$name = post('name');
if(!$name){
	showError();
}
if(!preg_match("/^[C][O][M][P]\d{4}$/", $name)){
	showError();
}


$classList = getClassList();
$class = [
	'id' => count($classList) + 1, //generate class id
	'name' => $name,

];
$classList[] = $class;
$saveResult = saveClassList($classList);

if($saveResult == false){
	showError('Add Class Failed');
}
header('Location: index.php');