<?php include 'classes/db1.php';
    $id=$_GET['id'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Sanchanala 2k20</title>
        <title></title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        
    </head>
    <body>
    <?php require 'utils/header.php'; ?>
    <div class ="content"><!--body content holder-->
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
    <form method="POST">
<label>Staff co-ordinator name</label><br>
    <input type="text" name="st_name" required class="form-control"><br><br>
    <label>Staff co-ordinator phone</label><br>
    <input type="text" name="phone" required class="form-control"><br><br>
    <button type="submit" name="update" class = "btn btn-default ">Update</button>
    </div>
    </div>
    </div>
    </form>
    

    <?php require 'utils/footer.php'; ?>
    </body>
</html>


<?php

 if (isset($_POST["update"]))
 {
     $name=$_POST["st_name"];
     $phone=$_POST["phone"];
     $sql="UPDATE staff_coordinator set phone='$phone',name='$name' where stid='$id'";
     if($conn->query($sql)===true)
     {
        echo"<script>
        alert(' Updated Successfully');
        window.location.href='stu_cordinator.php';
        </script>";
     }
     else
     {
        echo"<script>
        window.location.href='updateStudent.php';
        </script>";
     }
}
?>