<?php 
if($_SERVER["REQUEST_METHOD"] == "POST") {	
		
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$email = $_POST["email"];
	$submit = $_POST["submit"];
	
	echo "<pre>";
	$email_body = "";
	$email_body .= "First Name: " . $fname . "\n";
	$email_body .= "Last Name: " . $lname . "\n";
	$email_body .= "Email: " . $email . "\n";
	$email_body .= "Message: " . $submit . "\n";
	echo $email_body;
	echo "</pre>";
	
	// send email
	header("location:suggest.php?status=thanks");
}
	
	$pageTitle = "Suggest A Media Item"; 
	$section = "suggest";
?>	

<?php include 'include/header.php';?>

<div class="section page">
	<div class="wrapper">
		<h1>Suggest a Media Item</h1>
		<?php if (isset($_GET["status"]) && $_GET["status"] == "thanks") {
				echo "<p>Thanks for the email! I&rsquo;ll check out your suggestion shortly!</p>";
			} else { ?>
			
		<p>If you think there is something I&rsquo;m missing, let me know! Please complete the form to send me an email.</p>
		<form action="suggest.php" method="post">
		  <table>
			  <tr>
				  <th><label for="fname">First name:</label></th>
				  <td><input type="text" id="fname" placeholder="First name" name="fname"></td>
			  </tr>
			  <tr>
				  <th><label for="lname">Last name:</label></th>
				  <td><input type="text" id="lname" placeholder="Last name" name="lname"></td>
			  </tr>
			  <tr>
				  <th><label for="email">Email:</label></th>
				  <td><input type="email" id="email" placeholder="sample@email.com" name="email"></td>
			  </tr>
			  <tr>
				  <th><label for="submit">Suggestions</label></th>
				  <td><textarea name="submit"></textarea></td>
			  <br> 
			  </tr>
		  </table>
				  <td><input type="submit" value="Submit"></td>
		</form>
		<?php } ?>
	</div><!-- wrapper -->
</div><!-- section page -->

<?php include 'include/footer.php';?>
