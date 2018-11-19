<?php
    class BaseDeDatos {
        function connect(){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "publicis";
            $conn = new mysqli($servername, $username, $password,$database);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            return $conn;
        }

        function agregarBaseDatos($sql){
            $conn = connect();
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
    }
    
    
?>