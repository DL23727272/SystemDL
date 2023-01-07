<?php
    
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "helios_db";

    $connect = mysqli_connect($hostname, $username, $password, $database);
    
    if($connect){
        echo "Connection to MySQL successful<br>";
    }
    else{
        echo "Connection to MySQL failed". mysqli_connect_error();
    }

    $query = "CREATE TABLE superdeluxe (
        id INT PRIMARY KEY AUTO_INCREMENT,
        fname VARCHAR(30) NOT NULL,
        phone VARCHAR(100),
        CID VARCHAR(30) NOT NULL,
        COD VARCHAR(30) NOT NULL,
        CIT VARCHAR(100),
        DOS VARCHAR(100),
        Price VARCHAR(100)

    )";

    if(mysqli_query($connect, $query)){
        echo "Studemt table created successfully";
    }
    else{
        echo "Student table failed to create <br>". mysqli_error($connect);
    }
    mysqli_close($connect);

?>