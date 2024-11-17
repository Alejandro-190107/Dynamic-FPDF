<?php
    //* Configuration of database connection parameters.

    $servername = 'localhost';
    $dbname = 'world';
    $username = 'root';
    $password = ''; 

    try {
        //* Create an instance of the PDO class to establish the connection.
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);

        //! Configure PDO error mode to throw exceptions on error.
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Success message if connection is established successfully.
        echo 'Success';

    } catch (PDOException $e) { 
        // Catch any exception (error) that occurs during the connection and display the error message.
        die('Error en la conexión: ' . $e->getMessage());
    }
?>