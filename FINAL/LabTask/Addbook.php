<?php
 
include "config.php"; // PHP extarnal file connetion
 
$success = $error = "";

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $tittle=$_POST["Tittle"];
    $author=$_POST["Author"];
    $year=$_POST["Year"];

    if(empty($tittle) || empty($author) || empty($year)) {
        $error = "All section should be filled";
    } else {
        $sql = "INSERT INTO bookname (Tittle,Author,Year) VALUES ('$tittle','$author','$year')";
        if($conn->query($sql) === TRUE ) {
            $success = "New Book Submited ";
        } else {
            $error ="Error" . $conn->error;
        }
    }
}

?>
 



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Book</title>
  <link rel="stylesheet" href="addbook.css">
</head>
<body>
  <header>
    <h1>Add a New Book</h1>
  </header>

  <form method="post" action="">
<table>
        <tr>
          <td>
            <label for="tittle">Tittle:</label>
            <input type="text"name="Tittle"id="tittle"class="password"/>
          </td>
        </tr>

        <tr>
          <td>
            <label for="author">Author:</label>
            <input type="text"name="Author"id="author"class="password"/>
          </td>
        </tr>

        <tr>
          <td>
            <label for="year">Year:</label>
            <input type="text"name="Year"id="year"class="password"/>
          </td>
        </tr>
</table>
<div class="submit">
    <button type="submit" class="btn edit">Submit</button>
</div>
</form>
<a href="Task.php" class="btn delete">Show Book List</a>
</body>
</html>
