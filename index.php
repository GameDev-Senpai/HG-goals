<?php
  include '../connection.php';
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styling.css">
	<title>HG: Home</title>
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
			<th id="priority">Priority</th>
		</tr>
    <?php
      $query = "SELECT title, description, category, priority FROM goals
       ORDER BY priority DESC";

      $result = mysqli_query($conn, $query);

      while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        # code...
        echo "<tr><td>" . $row["title"] . "</td>";
        echo "<td>" . $row["description"] . "</td>";
        echo "<td>" . $row["category"] . "</td>";
        echo "<td>" . $row["priority"] . "</td></tr>";
      }
    ?>
	</table>

  <footer>
    <div class="other-links">
      <ul>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Privacy</a></li>
      </ul>
    </div>

    <div class="social-media-container">
      <div class="social-media-images">
        <a href="#"><img src="instagram.svg" style="width:40px;height:40px;"></a>
        <a href="#"><img src="facebook.svg" style="width:40px;height:40px;"></a>
        <a href="#"><img src="twitter.svg" style="width:40px;height:40px;"></a>
      </div>
    </div>
  </footer>

</body>
</html>