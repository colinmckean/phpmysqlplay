<?php include('connection.php'); 

if (isset($_POST["add"])) {
    function validateFormData($formData ){
        $formData = trim(stripslashes( htmlspecialchars($formData ) ) );
        return $formData;
    }
    if( !$_POST["user_username"] ){
        $nameError = "please enter a user_username <br>";
    }else{
        $user_username = validateFormData( $_POST["user_username"] );
    }
    if( !$_POST["email"] ){
        $emailError = "please enter your email <br>";
    }else{
        $email= validateFormData( $_POST["email"] );
    }
    if( !$_POST["user_password"] ){
        $user_passwordError = "please enter your user_password <br>";
    }else{
        $user_password= validateFormData( $_POST["user_password"] );
    }
    
    if($user_username && $email && $user_password ){
        
        
        $query = "INSERT INTO users (username, password, email, signup_date) 
        VALUES ('$user_username', '$user_password', '$email', CURRENT_TIMESTAMP)";
        if(mysqli_query($db, $query)){
            echo "new record in db";
        }else{
            echo "error " . $query . "<br>" . mysqli_error($db);
        }
    }
}
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
        <p class="text-danger"> * Required fields</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <small class="text-danger"> *<?php echo $nameError ?></small>
            <input type="text" name="user_username" placeholder="user_username"/><br><br>
            <small class="text-danger"> *<?php echo $emailError ?></small>
            <input type="text" name="email" placeholder="email"/><br><br>
            <small class="text-danger"> *<?php echo $user_passwordError ?></small>
            <input type="password" name="user_password" placeholder="user_password"/><br><br>
            <input name="add" type="submit" value="Add Entry"/>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>