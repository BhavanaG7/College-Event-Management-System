<?php
include_once 'classes/db1.php';
$result = mysqli_query($conn,"SELECT * FROM staff_coordinator s ,events e where e.event_id= s.event_id");
?>
<!DOCTYPE html>
<html>

<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Sanchanala 2k20</title>
        <title></title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        
    </head>

<body><?php include 'utils/adminHeader.php'?>
<div class = "content">
<div class = "container">
<h1>Staff Co-ordinator details</h1>
<?php
if (mysqli_num_rows($result) > 0) {
?>
 <table class="table table-hover" >
  
  <tr>
    <th>Name</th>
    <th>Phone</th>
    <th>Event</th>
    <th></th>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["phone"]; ?></td>
    <td><?php echo $row["event_title"]; ?></td>
    <td> <?php echo '<a  href="updateStaff.php?id='.$row['event_id'].'" class = "btn btn-default"> Update</a>'?></td>
   
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
</div>
</div>
 </body>
 <?php include 'utils/footer.php';?>
</html>