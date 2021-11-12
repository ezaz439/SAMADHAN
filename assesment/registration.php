<?php
require_once('config.php');
?>

<?php
		if(isset($_POST['create'])){
		$firstname 	= $_POST['firstname'];
		$lastname 	= $_POST['lastname'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];
		$sql = "INSERT INTO users (firstname, lastname, email, password ) VALUES(?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$firstname, $lastname, $email, $password]);
		if($result){
			echo 'Sucessfully Done';
		}
			else{
				echo 'There were erros';
			}
		}

		/*echo $firstname . " " . $lastname . " " . $email . " " . $password;*/

/*if($result -> users_rows>0){
	While ($row= $result-> fetch_assoc()){
		echo "<tr><td>" . $row["firstname"] . "</td><td>" . $row["lastname"] . "</td><td>". $row["email"] . "</td><td>" . $row["password"] . "</td></tr>";
	    
}
	echo "</table>";
}
	else {

	echo '0 result';	
		}
 $stmtinsert-> close();
}*/
 ?>
 <!DOCTYPE html>
 <html>
 <body>
 	<table>
 		<tr>
 			<td><button><a href="index.php">BACK</a></button></td>
 		</tr>
 	</table>
 </body>
</html>