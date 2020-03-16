<?php
	include"database.php";
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>addmedeweker</title>
		
	</head>
	
	<body>
		
		
		
				<div class="content1">
					
						<h3 > Add Medeweker</h3><br>


						<br>
						<br>
						<br>
						
					<?php
						if(isset($_POST["submit"]))
						{
							$sq="INSERT INTO `medewerker` (`idmedeweker`, `voornaam`, `tussenvoegsel`, `achternaam`, `login`, `password`, `nickname`) VALUES ('{$_POST["id"]}','{$_POST["naam"]}','{$_POST["tuss"]}','{$_POST["achter"]}','{$_POST["inlogin"]}'),'{$_POST["pass"]}'),'{$_POST["nick"]}')";
							if($db->query($sq))
							{
								echo "<div >Insert Success..</div>";
							}
							else
							{
								echo "<div >Insert Failed..</div>";
							}
							
						}
						
					?>
					<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
						<label>idmedewerker</label><br>
					     <input type="text" name="id" required class="input">
					     <br><br>
					     <label>voor naam</label><br>
					     <input type="text" name="naam" required class="input">
					     <br><br>
					     <label>tussenvogsel</label><br>
					     <input type="text" name="tuss" >
					     <br><br>
					     <label>achter naam</label><br>
					     <input type="text" name="achter" required class="input">
					     <br><br>
					     <label>inlogin</label><br>
					     <input type="text" name="inlogin" required class="input">
					     <br><br>
					     <label>wacht woord</label><br>
					     <input type="text" name="pass" required class="input">
					     <br><br>
					      <label>nick naam</label><br>
					     <input type="text" name="nick" required class="input">
					     <br><br>
					     <button type="submit" class="btn" name="submit">Add medewerker</button>
					</form>
				
				
				</div>
				
				
				
			</div>
	
				
	</body>
</html>