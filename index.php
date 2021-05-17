<?php
    include 'header.php';
?>
<div id="main-container">
    <h2> All Records </h2>
    <?php
        include 'config.php';

        $sql = "SELECT * FROM student JOIN studentclass WHERE student.sclass = studentclass.cid";
        $result = mysqli_query($conn, $sql) or die ("Query Unsuccessful.");

        if(mysqli_num_rows($result) > 0){
    ?>
    
    <table cellpading="7px">
        <thead>
            <th> Id </th>
            <th> Name </th>
            <th> Address </th>
            <th> Class </th>
            <th> Phone </th>
            <th> Action </th>
        </thead>
        <tbody>
            <?php 
                while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr><?php echo $row['sid']; ?></tr>
            <tr><?php echo $row['sname']; ?></tr>
            <tr><?php echo $row['saddress']; ?></tr>
            <tr><?php echo $row['cname']; ?></tr>
            <tr><?php echo $row['sphone']; ?></tr>
            <tr>
                <a href='edit.php?id=<?php echo $row['sid'];?>'> Edit </a>
                <a href='delete-inline.php?id=<?php echo $row['sid']; ?>'> Delete </a>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php }else{
        echo "<h2> No Record Found</h2>";
    } mysqli_close($conn) ?>
</div>
</div>
</body>
</html>
