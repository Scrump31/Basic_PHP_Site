<?php

error_reporting(E_ALL);

ini_set("display_errors", 1);

ini_set("html_errors", 1);
?>

<?php 
	include("include/data.php");
	include("include/functions.php");
		  	
      
	  
 
	if(isset($_GET["id"])) {
		$id = $_GET["id"];
		if (isset($catalog[$id])) {
			$item = $catalog[$id];
		}
	}
	if (!isset($item)) {
		header("location:catalog.php");
		exit;
	}
	$pageTitle = $item["title"]; 
	$section = null;

?>

<?php include("include/header.php");?>

<div class="section page">
	<div class="wrapper">
		<div class="breadcrumbs">
			<a href="catalog.php">Full Catalog</a>
			&gt; <a href="catalog.php?cat=<?php echo $item["category"]; ?>">
			<?php echo $item["category"]; ?></a>
			&gt; <?php echo $item["title"]; ?>
		</div><!-- breadcrumbs -->
		<div class="media-picture">
			<span>
				<img src="<?php echo $item["img"]; ?>" alt="<?php echo $item["title"]; ?>" />
			</span>
		</div><!-- media-picture -->
		<div class="media-details">
			<h1><?php echo $item["title"]; ?></h1>
			<table>
				<tr>
					<th>Category</th>
					<td><?php echo $item["category"]; ?></td>
				</tr>
				<tr>
					<th>Genre</th>
					<td><?php echo $item["genre"]; ?></td>
				</tr>

				<tr>
					<th>Format</th>
					<td><?php echo $item["format"]; ?></td>
				</tr>

				<tr>
					<th>Year</th>
					<td><?php echo $item["year"]; ?></td>
				</tr>
				<?php
				if (strtolower($item["category"]) === "books") {
					?>
				<tr>
					<th>Authors</th>
					<td><?php echo implode(", ",$item["authors"]); ?></td>
				</tr>
				<tr>
					<th>Publisher</th>
					<td><?php echo $item["publisher"]; ?></td>
				</tr>

				<tr>
					<th>ISBN</th>
					<td><?php echo $item["isbn"]; ?></td>
				</tr>

				<?php } else if (strtolower($item["category"]) === "movies") { ?>
				<tr>
					<th>Director</th>
					<td><?php echo $item["director"]; ?></td>
				</tr>
				<tr>
					<th>Writers</th>
					<td><?php echo implode(", ",$item["writers"]); ?></td>
				</tr>

				<tr>
					<th>Stars</th>
					<td><?php echo implode(", ",$item["stars"]); ?></td>
				</tr>
				<?php } else if (strtolower($item["category"]) === "music") { ?>
				<tr>
					<th>Artist</th>
					<td><?php echo $item["artist"]; ?></td>
				</tr>




				<?php } ?>
			</table>
		</div><!-- media-details -->
	</div><!-- wrapper -->
</div><!-- section page -->
