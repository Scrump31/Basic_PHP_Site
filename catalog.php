<?php 
	  $catalog = array();
	  
	  $catalog[] =  "Design Patterns";
	  $catalog[] =  "Forrest Gump";
	  $catalog[] = "Beethoven";
	  $catalog[] = "Clean Code";	
	  	
	  $pageTitle = "Full Catalog"; 
	  $section = null;
      
	  
 
	if(isset($_GET["cat"])) {
		if($_GET["cat"] === "books") {
		$pageTitle = "Books";
		$section = "books";
		
		}else if($_GET["cat"] === "movies") {
			$pageTitle = "Movies";
			$section = "movies";
		}else if($_GET["cat"] === "music") {
			$pageTitle = "Music";
			$section = "music";
		}
	}
?>

<?php include 'include/header.php';?>

<div class="section catalog page">
	
	<div class="wrapper">
		<h1><?php echo $pageTitle; ?></h1>
		
		<ul>
		  <?php 
			 foreach($catalog as $item) {
			       echo "<li>" . $item . "</li>";               
			  }
		  ?>
		</ul>
		
	</div><!-- wrapper -->
	
	
</div><!-- section page -->

<?php include 'include/footer.php';?>
