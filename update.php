<?php
    include 'header.php';
?>
<div class="container mt-5">
    
</div>
    <h2 class="mb-2"> Edit Record </h2>
    
    <form class="post-form" action="update.php" method="post" >
       
        <div class="form-group row">
            <label for="idFormControl">Id</label>
            <input type="id" class="form-control" id="idFormControl" placeholder="id" name="sid"/>
        </div>
        <div class="form-group">
            <input type="submit" value="Show" name="showbtn"  class="btn">
        </div> 
    </form>

    <?php
        if(isset($_POST['showbtn'])){
            #echo "Daine";
            include 'config.php';

            $stu_id=$_POST['sid'];

            $sql="SELECT * FROM student WHERE sid={$stu_id}";
            $result=mysqli_query($conn,$sql) or die("Query Unsuccessful.");

            if(mysqli_num_rows($result) > 0){
                while($row=mysqli_fetch_assoc($result)){
    ?>

    <form class="post-form" action="updatedata.php" method="post">       
        <div class="form-group row">
            <label for="nameFormControl">Name</label>
            <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>" />
            <input type="text" class="form-control" id="nameFormControl" placeholder="name" name="sname" value="<?php echo $row['sname'];?>"/>
        </div>
        <div class="form-group row">
            <label for="adressFormControl">Adress</label>
            <input type="text" class="form-control" id="adressFormControl" placeholder="adress" name="sadress" value="<?php echo $row['saddress'];?>"/>
        </div>
        <div class="form-group row">
            <label for="classFormControl">Class</label>
            

        </div>
        <div class="form-group">
            <label for="phoneFormControl">Phone</label>
            <input type="text" class="form-control" id="phoneFormControl" placeholder="phone" name="sphone" value="<?php echo $row['sphone'];?>"/>
        </div>  
        <div class="form-group">
            <input type="submit" value="Update" class="btn" name="updatebtn">
        </div> 
    </form>

    <?php
            }
        }
    }
    ?>

<?php
    include "footer.php";
?>