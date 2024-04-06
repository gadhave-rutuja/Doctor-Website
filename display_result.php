<html lang="en">
<head>
<title>Doctor Appointment result</title>
</head>
<body>
    <table border="2" style= "width: 15px; margin: 0 14px;  padding: 5px; text-align:center;">
        <tr>
            <th>ID</th>
            <th>Patient Name</th>
            <th>Email ID</th>
            <th>Phone No.</th>
            <th>Address</th>
            <th>Select_disease</th>
            <th>Select_doctor</th>
            <th>Date</th>
            <th>Select_time</th>
            <th>Message</th>
        </tr>
<?php
error_reporting(0);
include("Doctors.php");
$query = "SELECT * FROM booking";
$data  = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);


echo $result['id']." ".$result['name']." ".$result['email']." ".$result['phone']." ".$result['address']." ".$result['Select_disease']." ".$result['Select_doctor']." ".$result['date']." ".$result['Select_time']." ".$result['message'];

//echo  $total;

if($total!=0)
{
    // $result = mysqli_fetch_assoc($data);
    while(($result=mysqli_fetch_assoc($data))){
        echo "
        <tr>
        <td>".$result['id']."</td>
        <td>".$result['name']."</td>
        <td>".$result['email']."</td>
        <td>".$result['phone']."</td>
        <td>".$result['address']."</td>
        <td>".$result['Select_disease']."</td>
        <td>".$result['Select_doctor']."</td>
        <td>".$result['date']."</td>
        <td>".$result['Select_time']."</td>
        <td>".$result['message']."</td>
        </tr>
        ";
    }
}
else{
    echo " No Records Founds!";
}
?>
  </table>
</boday>
</html>
