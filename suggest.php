<?php 
	$pageTitle = "Suggest A Media Item"; 
	$section = "suggest";
	
?>

<?php include 'include/header.php';?>

<div class="section page">
	<div class="wrapper">
		<h1>Suggest a Media Item</h1>
		<p>If you think there is something I&rsquo;m missing, let me know! Please complete the form to send me an email.</p>
		<form action="process.php" method="post">
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
		
	</div><!-- wrapper -->
</div><!-- section page -->

<?php include 'include/footer.php';?>
