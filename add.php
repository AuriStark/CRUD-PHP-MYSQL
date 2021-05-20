<?php
    include 'header.php';
?>
<div class="container mt-5">
    <h2 class="mb-2"> Add New Records </h2>
    
    <form class="post-form" action="savedata.php" method="post" >
        <div class="form-group row">
            <label for="nameFormControl">Name</label>
            <input type="name" class="form-control" id="nameFormControl" placeholder="name" name="sname" required/>
        </div>
        <div class="form-group row">
            <label for="adressFormControl">Adress</label>
            <input type="adress" class="form-control" id="adressFormControl" placeholder="adress" name="sadress" required/>
        </div>
        <div class="form-group row">
            <label for="classFormControl">Class</label>
            <select class="form-control" id="classFormControl" required>
            <option>Select Class</option>

            <?php 
                include "config.php";
                $sql ="SELECT * FROM studentclass" ;
                $result = mysqli_query($conn, $sql) or die("Quers Unsuccessful.");

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
            <input type="phone" class="form-control" id="phoneFormControl" placeholder="phone" name="sphone" required/>
        </div>  
        <div class="form-group">
            <input type="button" value="Save"  class="btn">
        </div> 
    </form>
</div>

<?php
    include "footer.php";
?>