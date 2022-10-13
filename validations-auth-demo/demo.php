<?php 
  $a = 212;
  $b = 30;
  $c = $a + $b;

 if(isset($_POST["MyText"]) == True){
  	if (strpos($_POST["MyText"], '<script>')!== false) { 
   	 $data = 'XSS is detected';
	}else{
		$data = htmlentities($_POST["MyText"]);
	}
  }else{
  	$data = "You have not submitted anything!";
  }
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        div { display:block; },
    </style>
    <link rel="stylesheet" type="text/css" href="./custom.css">
</head>
<body>
	A = <?php echo $a; ?>
	<br>
	B = <?php echo $b; ?>
	<br>
	A + B =<?php echo $c; ?>
	<form name="myForm" action="<?php echo $_SERVER['REQUEST_URI']?>" method="POST" onClick="return validateForm()">
		 <input type="text" name="MyText">
          <input type="submit" value="Submit">	
	</form>
	You have sent the following data: <?= $data; ?>
	<script>
		function validateForm() {
			  let x = document.forms["myForm"]["MyText"].value;
			  if (x.includes("<script>")== true) {
			    alert("XSS has been detected!");
			    return false;
			  }
			}
	</script>
</body>
</html>