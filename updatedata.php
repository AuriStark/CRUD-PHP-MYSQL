<?php
    $stu_id = $_POST['sid'];
    $stu_name = $_POST['sname'];
    $stu_adress = $_POST['sadress'];
    $stu_class = $_POST['sclass'];
    $stu_phone = $_Post['sphone'];

    $conn = mysqli_connect("localhost", "root","","crud") or die("Connection Failed");

    $sql = "UPDATE student SET sname = '{$stu_name}', saddress ='{$stu_adress}', sclass = '{$stu_class}', sphone = '{$stu_phone}' WHERE sid ={$stu_id}";
    $resullt = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    header("Location: http://localhost/My-Projects/crud-php/index.php");

    mysqli_close($conn);
?>