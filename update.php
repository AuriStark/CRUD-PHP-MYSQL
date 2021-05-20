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
            include 'config.php';

            $stu_id=$_POST['sid'];


        }
    ?>

<?php
    include "footer.php";
?>