<?php $pageTitle = "Full Catalog"; 

      $name = "Full Catalog"; 
	  
 
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

<div class="section page">
	<h1><?php echo $pageTitle; ?></h1>
</div><!-- section page -->

<?php include 'include/footer.php';?>
