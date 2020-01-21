<title>coin flipping in php</title>
<body bgcolor="lightblue">

click the button and flip the coin again <br> <br>

<form action="index.php" method="post">
      <button type="submit">FLIP</button>
</form>

<!-- php script -->

<?php
	$flip = rand(0,1);
	
	if($flip === 0){
		echo 'orzel';
	}
	else{
		echo 'reszka';
	}
?>

<br> <br>

<b>made by konradooo</b>

</body>
