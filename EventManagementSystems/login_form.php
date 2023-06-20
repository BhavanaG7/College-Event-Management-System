<?php
include_once 'classes/db1.php';?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Sanchanala 2k20</title>
        <title></title>
        <style>
            span.error{
                color: red;
            }            
        </style>  
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class="content"><!--body content holder-->
            <div class="container">
                <div class="col-md-6 col-md-offset-3">
                    <form method="POST"><!--form-->
                        <!--UPM-ID field-->
                        <label>UPM-ID:</label><br>
                        <input type="text" name="upm_id" class="form-control" required><br>
                        <!--Katalaluan (password) field-->
                        <label>Katalaluan:</label><br>
                        <input type="password" name="katalaluan" class="form-control" required><br>
                        <button type="submit" name="update" class="btn btn-default">Login</button>
                    </form>
                </div><!--col md 6 div-->
            </div><!--container div-->
        </div><!--content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>

<?php
if (isset($_POST["update"])) {
    $upm_id = $_POST['upm_id'];
    $katalaluan = $_POST['katalaluan'];

    if ($katalaluan == 'admin' && $upm_id == 'admin') {
        echo "<script>
        alert('Login Successful');
        window.location.href='adminPage.php';
        </script>";
    } else {
        echo "<script>
        alert('Invalid credentials');
        window.location.href='login_form.php';
        </script>";
    }
}
?>

