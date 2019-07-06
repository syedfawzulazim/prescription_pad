<?php
  session_start();
  include_once 'connection.php';
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doctors Profile</title>
  <link rel="stylesheet" type="text/css" href="doclist.css">
</head>
  <body>

    <?php
    if ($_SESSION['userid']==true) {
    ?>


    <?php include_once 'pheader.php'; ?>

    <?php

    $sql = "SELECT * from `doctorslist`";
    $result = mysqli_query($conn,$sql);

    ?>


    <table id= "doctors"  align="center" border="1px" style="width:1200px; line-height:50px;" >

         <tr>
               <h1 style="background-color:#483D8B; color:white">Doctors List</h1>
         </tr>

         <t>
           <th>Doctor Picture</th>
           <th>Doctor Name</th>
           <th>Gender</th>
           <th>Age</th>
           <th>Qualification & Speciality</th>
           <th>Phone Number</th>
           <th>Email</th>



         </t>

         <?php

               while ($rows = mysqli_fetch_assoc($result))


               {
          ?>

              <tr>
                    <td> <?php echo "<img src='".$rows['Image']."' height='140' width='140' />"; ?> </td>
                    <td> <?php echo $rows['DoctorName'];      ?> </td>
                    <td> <?php echo $rows['Gender'];          ?> </td>
                    <td> <?php echo $rows['Age'];             ?> </td>
                    <td> <?php echo $rows['Qualification'];   ?> </td>
                    <td> <?php echo $rows['PhoneNumber'];     ?> </td>
                    <td> <?php echo $rows['Email']; ?> <br> For Appoinment : <a href="https://mail.google.com/mail/u/0/?tab=rm#inbox?compose=new">Send Email</a>  </td>



              </tr>


            <?php
                }
            ?>

    </table>


    <?php
    }
    else{
      header('location:index.php');
    }
    ?>
  </body>
</html>
