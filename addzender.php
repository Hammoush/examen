
<?php
	include"database.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>zender</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	
	<body>
			
				
			
					
						<h3 > Add zender</h3><br>
						
					<?php
						if(isset($_POST["submit"]))
						{
							$sq="INSERT INTO `zender` (`idzender`, `omschrijven`, `slogan`) VALUES('{$_POST["idz"]}','{$_POST["oms"]}','{$_POST["slo"]}')";
							if($db->query($sq))
							{
								echo "<div class='success'>Insert Success..</div>";
							}
							else
							{
								echo "<div class='error'>Insert Failed..</div>";
							}
							
						}
						
					?>
					<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					     <label>idzender</label><br>
					     <input type="text" name="idz" required class="input">
					     <br><br>
					     <label>omschrijven</label><br>
					     <input type="text" name="oms" required class="input">
					     <br><br>
					     <label>slong</label><br>
					     <input type="text" name="slo" required class="input">
					     <br><br>
					     <button type="submit" class="btn" name="submit">Add zonder</button>
					</form>
				
				
				</div>
				<br>
				<div class="content2">
					<a href="programaoverzicht.php">link naar het programaoverzicht</a>
				</div>
				
				
			</div>
	
	</body>
</html>