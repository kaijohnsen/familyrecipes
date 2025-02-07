<?php

include 'database.php';

// use of prepared statements - SQL

// erase any HTML tags and then escape all quotes
// this is used on each value that came from the HTML form
function sanitizeMySQL($conn, $var) {
    $var = strip_tags($var);
    $var = mysqli_real_escape_string($conn, $var);
    return $var;
}

// ensure that form values were received
if (isset($_POST['recipe_name']) && isset($_POST['ingredients'])) {

    // sanitizeMySQL() is a custom function, written below
    $recipe_name = sanitizeMySQL($conn, $_POST['recipe_name']);
    $ingredients = sanitizeMySQL($conn, $_POST['ingredients']);
    $special = sanitizeMySQL($conn, $_POST['special']);

    // create a PHP timestamp
    date_default_timezone_set('America/New_York');
    $date = date('m-d-Y', time());

    // the prepared statement - note: 4 question marks represent
    // 4 variables we will send to database separately
    $query = "INSERT INTO recipes (recipe_name, ingredients, special, date)
    VALUES (?, ?, ?, ?)";

    // prepare the statement in db
    if ( $stmt = mysqli_prepare($conn, $query) ) {

        mysqli_stmt_bind_param($stmt, 'ssss',
        $recipe_name,
        $ingredients,
        $special,
        $date,
        );

        // executes the prepared statement with the values already set, above
        mysqli_stmt_execute($stmt);
        // close the prepared statement
        mysqli_stmt_close($stmt);
        // close db connection
        mysqli_close($conn);
    } // end of prepare if-statement
    echo "Your recipe " . stripslashes($recipe_name) . " was entered successfully!";
} else {
    echo "Failed to enter new record!";
} // end of isset if-statement

?>