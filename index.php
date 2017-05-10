<?php include('connection.php'); ?>
<?php

$query = "SELECT * FROM users";
$result = mysqli_query($db, $query);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["id"] . " " .$row["username"] . " " . $row["email"] . "<br>";
    }
} else {
    echo "NO DATA";
}

mysqli_close($db);
?>