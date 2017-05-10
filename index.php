<?php include('connection.php'); ?>
<?php

$query = "SELECT * FROM users";
$result = mysqli_query($db, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<table><tr><td>ID</td><th>Username</th><th>email</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".  $row["id"] . "</td><td>" .$row["username"] . "</td><td>" . $row["email"] . "</td><tr>";
    }
    echo "</table>";
} else {
    echo "NO DATA";
}

mysqli_close($db);
?>