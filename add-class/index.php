<?php if($_FILES["file"]["error"])
{
    echo $_FILES["file"]["error"];
}
else
{
    if(($_FILES["file"]["type"]=="image/jpeg" || $_FILES["file"]["type"]=="image/jpg")&& $_FILES["file"]["size"]<1024000)
    {
        $fname = "./img/".md5(time() .$_FILES["file"]["name"]).".jpg";    
        
            move_uploaded_file($_FILES["file"]["tmp_name"],$fname);
            
            unlink($_POST["filepath"]);   
            
            echo "<script>parent.showimg('{$fname}');</script>";
        
    }
}



?>

<html>
<head>
<title>Lab6 Add Course and Edit</title>
<meta charset="utf-8"/>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="main">
<h4>Lab 6 Haini Xiao</h4>
	<div class="wrapAdd">
		<form action="add.php" method="post">
			<p>Class Name: <input type="text" name="name" placeholder="COMP1234"></p>
			<p><button type="submit">Add</button></p>
		</form>
	</div>

	<?php
	// determin if data is exist
	if(file_exists('data.json')){
		$dataContent = file_get_contents('data.json');
		if($dataContent){ //determin if the data is empty 
			$classList = json_decode($dataContent, true);}	
		}
	?>
	<hr/>
	<h4>Class List</h4>
	<ul>
		<?php	
		//print out class data
		foreach($classList as $index => $class):
		?>
		<li>
         <!--change avatar -->  
	     <form id="avawrap" action="index.php" method="post" enctype="multipart/form-data" target="uploadava">
    
          <input type="hidden" name="filepath" value="" id="filepath" />
    
         <div id="submit">
         <input type="file" name="file" id="file" onchange="document.getElementById('avawrap').submit()" />  
        </div>
       
        </form>

         <iframe style="display:none" name="uploadava" id="uploadava"> </iframe>
        </body>

			<script type="text/javascript">

			//change avatar pic url
			function showimg(url)
			{
				var div = document.getElementById("submit");
				div.style.backgroundImage = "url("+url+")";
				
				document.getElementById("filepath").value = url;
			}

			</script>
			
			<?php echo $class['name']; ?> 
			<a href="edit-page.php?id=<?php echo $class['id']; ?>">Edit</a>
			<a href="delete.php?id=<?php echo $class['id']; ?>">Delete</a>
		</li>
		<?php endforeach; ?>
	</ul>
	<?php
	
?>
</div>
</body>
</html>