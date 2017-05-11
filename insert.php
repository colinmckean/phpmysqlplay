<?php include('connection.php'); ?>
<?php
$query = "INSERT INTO users (username, password, email, signup_date, biography) 
VALUES ('agentsmith', 'iamthematrix', 'agentsmith@matrix.com', CURRENT_TIMESTAMP, 'Hello! I\'m agent smith this is my bio.')";
?>

<?php
define("TITLE", "mySQLi insert with PHP");
?>
<html>
<head>
    <title><?php echo TITLE; ?></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <?php
            if(mysqli_query($db, $query)){
                echo "new record in db";
                
            }else{
                echo "error " . $query . "<br>" . mysqli_error($db);
            }
        
        ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
</body>
</html>