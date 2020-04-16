<?php require 'classes/db1.php';
$id=$_GET['id'];
$usn=$_GET['usn'];

$sql="delete from registered where event_id=$id and usn='$usn'";
if($conn->query($sql) === True)
{
    echo"<script>
    window.location.href='RegisteredEvents.php?usn='+'$usn';
            </script>";
}
else{
    echo "Error deleting record".$conn->error;
}
$conn->close();
?>