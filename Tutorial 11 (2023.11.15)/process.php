<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $servername="localhost";
        $username="root";
        $password="";
        $db="university";
        
        $conn=new mysqli($servername,$username,$password,$db);
        if($conn->connect_error){
            die("Connection failed");
        }
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $pw=$_POST['password'];

            $sql="INSERT INTO student VALUES ('$name','$email','$pw')";

            if($conn->query($sql)===TRUE){
                echo "data added Successful";
            }
            else{
                echo "unsuccessful";
            }

        }

        $conn->close();
    ?>
</body>
</html>