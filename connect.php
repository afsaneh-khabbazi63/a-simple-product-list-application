<!--
Filename: connect.php
Author: Afsaneh Khabbazibasmenj
-->
<?php 
    /* Host name of the MySQL server */
    $servername = 'localhost:3309';

    /* MySQL account username */
    $username = 'root';

    /* MySQL account password */
    $password = '';

    /* The schema you want to use */
    $database = 'assignment3';

    /* Connection with MySQLi, procedural-style */
    $mysqli = mysqli_connect($servername, $username, $password, $database);
    

    /* Check if the connection succeeded */
    if (!$mysqli)
    {
        echo 'Connection failed<br>';
        echo 'Error number: ' . mysqli_connect_errno() . '<br>';
        echo 'Error message: ' . mysqli_connect_error() . '<br>';
        die();
    }

   // echo 'Successfully connected!<br>';

  

?>