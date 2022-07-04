<?php
include('function.php');
$id = get('id', 0);
$class = getClass($id);
if(!$class) {

	showError('Empty Class');
}

?>
<html>
<head>
<title>Edit Page</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="main">
	<div class="wrapEdit">
		<h2">Edit Class Name: <?php echo $class['name']; ?></h2>
		<form action="edit.php" method="post">
			<input type="hidden" name="id" value="<?php echo $class['id']; ?>">
			<p>Class Name: <input type="text" name="name" placeholder="Input Class Name" value="<?php echo $class['name']; ?>"></p>
			
			<p>
				<button type="submit">Submit</button>
			
			</p>
		</form>
	</div>
</diZv>
</body>	
</html>