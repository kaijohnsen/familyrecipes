<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Family Recipe - Enter </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
<div id="container">

<h1>Family Recipe: Enter Your Recipe</h1>

<p class="middle"><a href="recipes.php">View all recipes</a></p>

<div id="recipes">

<!-- this form is handled by the JavaScript file linked at bottom -->
<form id="recipesform" method="post" action="" autocomplete="off">

  <label for="recipe_name">Recipe name </label>
    <input type="text" name="recipe_name" id="recipe_name" maxlength="75" required>

  <label for="ingredients">Primary ingredients </label>
	<input type="text" name="ingredients" id="ingredients" maxlength="200" required>

  <label for="special">Why is it special? </label>
	<input type="text" name="special" id="special" maxlength="300" required>

	<input type="submit" id="submit" value="Submit">
</form>
<!-- close the form -->

</div> <!-- close #recipes -->

<!-- empty div -->
<div id="response"></div>

</div> <!-- close container -->

<script src="js/enter.js"></script>

</body>
</html>