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
  <link rel="stylesheet" href="styling.css">
	<title>Final Fantasy XIV Tool</title>
</head>
<body>
  <div class="header">
	  <h1 class="header-title">Harold's Goals</h1>
	  <p class="header-caption">Quick and easy way to see what needs doing</p>
  </div>

	<table class="main-body">
		<tr class="main-header">
      <th id="title">Title</th>
			<th id="description">Description</th>
			<th id="category">Category</th>
			<th id="deadline">Deadline</th>
		</tr>
    <?php
      $query = "SELECT title, description, category, date FROM goals";

      $result = mysqli_query($conn, $query);

      while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        # code...
        echo "<tr><td>" . $row["title"] . "</td>";
        echo "<td>" . $row["description"] . "</td>";
        echo "<td>" . $row["category"] . "</td>";
        echo "<td>" . $row["date"] . "</td></tr>";
      }
    ?>
	</table>

  <footer>
    <ul>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="#">Privacy</a></li>
    </ul>

    <div class="social-media">
      <img src="instagram.svg" style="width:40px;height:40px;">
    </div>
  </footer>

</body>
</html>