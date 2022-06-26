<?php
include('function.php');
$id = get('id');
$id = intval($id);
$classList = getClassList();
//unset is really working
foreach($classList as $index =>$class){
	if($class['id'] == $id){
		unset($classList[$index]);
		break; 
	}
}

$json = json_encode($classList);
file_put_contents(DATA_FILE, $json);

$html = '<script>alert("The Class is Deleted! "); location.href="index.php";</script>';
echo $html;