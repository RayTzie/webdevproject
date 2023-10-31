<?php
    include_once("../dbConnections/mysqlconfig_conn.php");
    $id = $_GET['id'];
    mysqli_query($dbc, "DELETE FROM tblsubject WHERE Subject_ID = '$id'");
    header("Location:../index.php"); 
?>