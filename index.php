<?php
$servername = "localhost";
$username = "Harold-DBA";
$password = "OppaiDaisuki7!";
$dbname = "final_fantasy";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  # code...
  die("Connection failed: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Final Fantasy XIV Tool</title>
</head>
<body>
	<h1 class="header-title">FFXIV Tool</h1>
	<p class="header-caption">Quick and easy way to see what needs doing</p>

	<table class="main-body">
		<tr class="main-header">
      <th id="title-column">Title</th>
			<th id="description-column">Description</th>
			<th id="category-column">Category</th>
			<th id="deadline-column">Deadline</th>
		</tr>
    <?php
      $query = "SELECT title, description, category, date FROM goals";

      $result = mysqli_query($conn, $query);

      while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        # code...
        echo "<tr><td>" . $row["title"] . "</td>";
        echo "<td>" . $row["description"] . "</td>";
        echo "<td>" . $row["category"] . "</td>";
        echo "<td>" . $row["date"] . "</td>";
        echo "</tr>";
      }
    ?>
	</table>

</body>
</html>