<?php
    include 'header.php';
?>
<div class="container mt-5">
    
</div>
    <h2 class="mb-2"> Edit Record </h2>
    
    <form class="post-form" action="updatedata.php" method="post" >
       
        <div class="form-group row">
            <label for="idFormControl">Id</label>
            <input type="id" class="form-control" id="idFormControl" placeholder="id" name="sid" required/>
        </div>
        <div class="form-group">
            <input type="button" value="Show" name="showbtn"  class="btn">
        </div> 
    </form>

    <?php
        if(isset($_POST['showbtn'])){
            echo "Daine";
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
            <input type="name" class="form-control" id="nameFormControl" placeholder="name" name="sname" value="<?php echo $row['sname'];?>" required/>
        </div>
        <div class="form-group row">
            <label for="adressFormControl">Adress</label>
            <input type="adress" class="form-control" id="adressFormControl" placeholder="adress" name="sadress" value="<?php echo $row['sadress'];?>" required/>
        </div>
        <div class="form-group row">
            <label for="classFormControl">Class</label>
            <select class="form-control" id="classFormControl" value="<?php echo $row['sclass'];?>" required>
            <option>Select Class</option>

            <?php 
                include "config.php";
                $sql ="SELECT * FROM studentclass" ;
                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

                while($row = mysqli_fetch_assoc($result)){
            ?>
            <option> 
                <?php echo $row['cname'];?>
            </option>
            
            <?php } ?>

            </select>
        </div>
        <div class="form-group">
            <label for="phoneFormControl">Phone</label>
            <input type="phone" class="form-control" id="phoneFormControl" placeholder="phone" name="sphone" value="<?php echo $row['sphone'];?>" required/>
        </div>  
        <div class="form-group">
            <input type="submit" value="Update" class="btn" name="updatebtn">
        </div> 
    </form>

    <?php
            }
        }else{
            echo"Id not found";
        }
    }
    ?>

<?php
    include "footer.php";
?>