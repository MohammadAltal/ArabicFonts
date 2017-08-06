<!DOCTYPE html>
<html>
<head>
	<title>Arabic Font</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<meta charset="utf-8">

	<style type="text/css">

<?php

		$text = 'أبجد هوز حطي كلمن سعفص قرشت ثخذ ضظغ';
		$size = 30;
		$color = '#000';
 		if($_SERVER['REQUEST_METHOD'] == 'POST'){
     	$text = $_POST['text'];
     	$size  = $_POST['size'];
     	$color = $_POST['color'];

     	if($text == ''){
     		$text = 'أبو الشام';
     	}
     	if($size == ''){
     		$size = 30;
     	}
     }
   
		$dir = "C:/wamp/www/ArabicFont/Font";
		$fonts = scandir($dir , 1);
		foreach ($fonts as $font) {	 ?>
	

	@font-face{

	src:url(Font/<?php echo $font; ?>);
	font-family:'<?php echo $font; ?>';
	}

	<?php } ?>

	</style>

</head>
<body>
<div class="text-center container" >
	<div class="header">
		<h1>Arabic Font</h1>
	</div>	
</div>

<div class="container text-center">
<div class="options">
	<form class="form-inline"  action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
  <div class="form-group" >
    <label for="email">Text : </label>
    <input type="text" class="form-control" name="text">
  </div>
  <div class="form-group">
    <label for="pwd"> Size : </label>
    <input type="number" class="form-control" name="size" min="10" max="100">
  </div>
  <div class="form-group" >
    <label for="email">Color : </label>
    <input type="color" class="form-control" name="color" style="min-width: 200px;">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>

<div class="text-center container">

<?php foreach ($fonts as $font) { ?>
<div class="row">
	<div class="col-sm-6">
		<div class="font">
		  <p style="font-size: <?php echo $size; ?>px"> <?php echo $font; ?></p>
		</div>
	</div>

	<div class="col-sm-6">
		<div class="font"> 
		  <p style="font-size: <?php echo $size;  ?>px ; font-family: '<?php echo $font;  ?>' ; color: <?php echo $color; ?> "> <?php echo $text; ?></p>
		</div>
	</div>
</div>

<?php } ?>

</div>


<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/backend.js"></script>
</body>
</html>