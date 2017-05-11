<?php include('connection.php'); ?>
<?php

$query = "SELECT * FROM users";
$result = mysqli_query($db, $query);

?>

<?php
define("TITLE", "mySQLi and PHP");
?>
<html>
<head>
    <title><?php echo TITLE; ?></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <?php 
        if (mysqli_num_rows($result) > 0) {
    echo "<table class='table table-bordered'><tr><td>ID</td><th>Username</th><th>email</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".  $row["id"] . "</td><td>" .$row["username"] . "</td><td>" . $row["email"] . "</td><tr>";
    }
    echo "</table>";
} else {
    echo "NO DATA";
}

mysqli_close($db);
        ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
</body>
</html>