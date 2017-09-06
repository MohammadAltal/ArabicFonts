<?php



if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$desk = $_POST['desk'];
		$name = $_POST['name'];

		$dir = $desk . $name ;

		$type = $_POST['type'];



		if(file_exists($dir) != 1) {

			if($type == 0 ) {
				mkdir($dir);
				mkdir("$dir/css");
				mkdir("$dir/js");
				mkdir("$dir/fonts");
				mkdir("$dir/img");

				$file = fopen("$dir/index.php", "w") or die("Unable to open file!");
				$css = fopen("$dir/css/style.css", "w") or die("Unable to open file!");
				$js = fopen("$dir/js/backend.js", "w") or die("Unable to open file!");
				fclose($js);
				fclose($css);
				fclose($file);
			}
			elseif($type == 2){
				mkdir($dir);
				mkdir("$dir/css");
				mkdir("$dir/js");
				mkdir("$dir/fonts");
				mkdir("$dir/img");

				$file = fopen("$dir/index.html", "w") or die("Unable to open file!");
				$css = fopen("$dir/css/style.css", "w") or die("Unable to open file!");
				$js = fopen("$dir/js/backend.js", "w") or die("Unable to open file!");
				fclose($js);
				fclose($css);
				fclose($file);

			}
			elseif($type == 1){
				mkdir($dir);
				mkdir("$dir/layout");
				mkdir("$dir/includes");
				mkdir("$dir/data");
				mkdir("$dir/docs");


				mkdir("$dir/layout/css");
				$css = fopen("$dir/layout/css/style.css", "w") or die("Unable to open file!");
				fclose($css);
				mkdir("$dir/layout/js");
				$js = fopen("$dir/layout/js/backend.js", "w") or die("Unable to open file!");
				fclose($js);
				mkdir("$dir/layout/images");
				mkdir("$dir/layout/fonts");


				mkdir("$dir/includes/templates");
				$header = fopen("$dir/includes/templates/header.php", "w") or die("Unable to open file!");
				fclose($header);
				$navbar = fopen("$dir/includes/templates/navbar.php", "w") or die("Unable to open file!");
				fclose($navbar);
				$footer = fopen("$dir/includes/templates/footer.php", "w") or die("Unable to open file!");
				fclose($footer);
				mkdir("$dir/includes/functions");
				$functions = fopen("$dir/includes/functions/functions.php", "w") or die("Unable to open file!");
				fclose($functions);
				mkdir("$dir/includes/languages");
				$languages = fopen("$dir/includes/languages/languages.php", "w") or die("Unable to open file!");
				fclose($languages);
				mkdir("$dir/includes/libs");

				mkdir("$dir/data/upload");
				mkdir("$dir/data/logs");

				$file = fopen("$dir/index.php", "w") or die("Unable to open file!");
				fclose($file);
				$init = fopen("$dir/init.php", "w") or die("Unable to open file!");
				fclose($init);

			}
		}



}



?>





<!DOCTYPE html>
<html>
<head>
	<title>Create Folder Project</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div class="container text-center">
		
			<h1>Create Folders Project</h1>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="form-group">

				<select name="desk" class="form-control">
					<option value="C:/">C/..</option>
					<option value="E:/">E/..</option>
					<option value="F:/">F/..</option>
				</select>
				<select name="type" class="form-control">
					<option value="0">PHP</option>
					<option value="1">PHP Full Project</option>
					<option value="2">HTML</option>
				</select>
				<input type="text" name="name"  class="form-control" placeholder="Name Of Folder">
				<input type="submit" value="Create" class="btn btn-primary btn-block">
			</form>
		
	</div>

</body>
</html>