<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qh_db1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM gk_master where gk_ID=1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $rows=$row;
    // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Custom Radio Buttons | CodingNepal</title>
    <link rel="stylesheet" href="../css/question.css">
</head>
<body>
  <div class="wrapper">
    <div class="title"><?php echo $rows['gk_question']; ?></div>
    <div class="box">
      <input type="radio" name="select" id="option-1">
      <input type="radio" name="select" id="option-2">
      <input type="radio" name="select" id="option-3">
      <input type="radio" name="select" id="option-4">
      <label for="option-1" class="option-1">
        <div class="dot"></div>
        <div class="text"><?php echo $rows['gk_option1']; ?></div>
      </label>
      <label for="option-2" class="option-2">
        <div class="dot"></div>
        <div class="text"><?php echo $rows['gk_option2']; ?></div>
      </label>
      <label for="option-3" class="option-3">
        <div class="dot"></div>
        <div class="text"><?php echo $rows['gk_option3']; ?></div>
      </label>
      <label for="option-4" class="option-4">
        <div class="dot"></div>
        <div class="text"><?php echo $rows['gk_option4']; ?></div>
      </label>
      <!-- <a href="" class="read-more"> Read <i class="bi bi-long-arrow-right"></i></a> -->
      <button type="submit" class="read-more">Next<button>
    </div>
  </div>
<script src="../javascripts/question.js"></script>
</body>
</html>