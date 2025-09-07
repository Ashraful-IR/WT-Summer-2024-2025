<?php
include "config.php"; // database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>All Books</title>
  <link rel="stylesheet" href="Task.css">
</head>
<body>

  <header>
    <h1>All Books</h1>
  </header>

  <main>
    <table border="1" cellpadding="8" cellspacing="0" summary="List of books with actions">
      <thead>
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Author</th>
          <th>Year</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // Fetch all books from the database
        $sql = "SELECT * FROM bookname";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>". $row['id'] ."</td>";
                echo "<td>". $row['Tittle'] ."</td>";
                echo "<td>". $row['Author'] ."</td>";
                echo "<td>". $row['Year'] ."</td>";
                echo "<td>
                        <a href='editbook.php?id=".$row['id']."'>Edit</a> | 
                        <a href='deletebook.php?id=".$row['id']."' onclick=\"return confirm('Are you sure?')\">Delete</a>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No books found</td></tr>";
        }
        ?>
      </tbody>
    </table>
  </main>

  <p><a href="Addbook.php">Add New Book</a></p>

</body>
</html>
