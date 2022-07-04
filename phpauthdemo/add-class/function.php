<?php
define('DATA_FILE', __DIR__ . '/data.json');

function get($key, $defaultValue = ''){
	$issetKey = isset($_GET[$key]);
	if($issetKey == true){
		return $_GET[$key];
	}else{
		return $defaultValue;
	}
}
	
function post($key, $defaultValue = ''){
	$issetKey = isset($_POST[$key]);
	if($issetKey == true){
		return $_POST[$key];
	}else{
		return $defaultValue;
	}
}

function showError(){

	$html = '<script>alert("Invalide Class Name"); location.href="index.php";</script>'; 
echo $html;
	exit;
}

function getClassList(){
	$list = [];
	if(file_exists(DATA_FILE)){
		$content = file_get_contents(DATA_FILE);
		$list = json_decode($content, true);
	}
	return $list;
}

function saveClassList($list){
	$content = json_encode($list);
	$putSize = file_put_contents(DATA_FILE, $content);
	if($putSize > 0){
		return true;
	}else{
		return false;
	}
}

function getClass($id){
	global $classList;
	$classList = getClassList();
	foreach($classList as $i => $class){
		if($class['id'] == $id){
			return $class;
		}
	}
	return null;
}

function saveClass($class){
	global $classList;
	$searched = false;
	foreach($classList as $i => $classItem){
		if($class['id'] == $classItem['id']){
			$classList[$i] = $class;
			$searched = true;
			break;
		}
	}
	if(!$searched){
		return false;
	}
	return saveClassList($classList);
}