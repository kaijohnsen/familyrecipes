<?php
	include 'database.php';
	$query = "SELECT * FROM recipes ORDER BY date DESC";
	$recipes = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title> Family Recipes </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
<div id="container">

<h1>All Family Recipes</h1>

<p class="middle"><a href="enter_new_record.php">Add yours here</a></p>

	
<table>
	<!-- table column headings -->
	<tr>
	  <th>Recipe name</th>
	  <th>Primary ingredients</th>
	  <th>Why is it special?</th>
      <th>Date</th>
	</tr>

<?php while ($row = mysqli_fetch_assoc($recipes)) :  ?>

<tr>
  <td><?php echo $row['recipe_name']; ?></td>
  <td><?php echo $row['ingredients']; ?></td>
  <td><?php echo $row['special']; ?></td>
  <td><?php echo $row['date']; ?></td>
</tr><!-- end of HTML table row -->

<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->

</table>


<!-- close the form -->



</div> <!-- close container -->
</body>
</html>