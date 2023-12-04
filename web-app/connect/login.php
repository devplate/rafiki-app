<?php
include "database.php";

if (isset($_POST["login_user"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hash_pass = md5($password);
 
    $sql_statement = "SELECT doctor,hr FROM user WHERE email='$username'";
    $result = $conn->query($sql_statement);
    $doctor = 0;
    $hr = 0;
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            if($row["doctor"] > 0){
                $doctor = $row["doctor"];
            }elseif($row["hr"] > 0){
                $hr = $row["hr"];
            }
        }
    }

    $condition = "";
    if ($doctor > 0) {
        $condition = "INNER JOIN doctor ON user.doctor = doctor.doctor_id";
    } elseif ($hr > 0) {
        $condition = "INNER JOIN human_resource ON user.hr = human_resource.hr_id";
    }

    $sql_statement = "SELECT *
        FROM user
        $condition
        WHERE user.email='$username' AND password='$hash_pass'";
    
    $result = $conn->query($sql_statement);



    if ($result->num_rows == 1){
        
        while ($row = $result->fetch_assoc()) {       
                      
            session_start();
            $_SESSION["user"] = $row;
        }        
       
        header("Location: http://localhost/rafiki/web-app/dashboard.php");


    }else{
        echo "Incorrect username or password";
    }
    


    $conn->close();
}


?>