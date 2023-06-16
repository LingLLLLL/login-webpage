<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }

    // sql to create table
    $sql = "CREATE TABLE Users (
            Username VARCHAR(30) PRIMARY KEY,
            Password VARCHAR(50),
            Email VARCHAR(50),
            FirstName VARCHAR(30) NOT NULL,
            LasttName VARCHAR(30) NOT NULL,
            Country VARCHAR(30) NOT NULL,
            Marital VARCHAR(30) NOT NULL,
            NumOfChildren int(6) NOT NULL,
            IsAdmin tinyint(1),
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";

    if ($conn->query($sql) === TRUE) 
    {
        echo "Table user created successfully<br>";
    } else 
    {
        echo "Error creating table: " . $conn->error . "<br>";
    }

    $createAdmin = "INSERT INTO Users (Username, Password, Email, FirstName, LasttName, Country, Marital, NumOfChildren, IsAdmin)
        VALUES ('admin', 'admin', 'admin@admin.com', 'Thomas', 'Ng', 'Canada', 'single', 0, 1)";
    if ($conn->query($createAdmin) === TRUE) 
    {
        echo "Administrator created";
    } else 
    {
        echo "Error creating administrator: " . $conn->error;
    }
    $conn->close();
?>