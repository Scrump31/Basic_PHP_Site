<?php $pageTitle = "Full Catalog"; ?>

<?php $name = "Full Catalog"; ?>

<?php 
	if(isset($_GET["cat"])) {
		if($_GET["cat"] === "books") {
		$pageTitle = "Books";
		
		}else if($_GET["cat"] === "movies") {
			$pageTitle = "Movies";
		}else if($_GET["cat"] === "music") {
			$pageTitle = "Music";
		}
	}
?>

<?php include 'include/header.php';?>

<div class="section page">
	<h1><?php echo $pageTitle; ?></h1>
</div><!-- section page -->

<?php include 'include/footer.php';?>
