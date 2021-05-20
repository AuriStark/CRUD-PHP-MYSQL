<?php
    $stu_name = $_POST['sname'];
    $stu_adress = $_POST['sadress'];
    $stu_class = $_POST['sclass'];
    $stu_phone = $_Post['sphone'];

    $conn = mysqli_connect("localhost", "root","","crud") or die("Connection Failed");

    $sql = "INSERT INTO student(sname,sadress,sclass,sphone) VALUES ('{$stu_name}','{$stu_adress}','{$stu_class}','{$stu_phone}')";
    $resullt = mysqli_query($conn, $sql) or die("Query Unsuccessful");

    header("Location:http//localhost/crud-php/index.php");

    mysqli_close($conn);
?>