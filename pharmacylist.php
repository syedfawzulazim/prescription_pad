<?php
session_start();
include_once 'connection.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pharmacy List</title>
  <link rel="stylesheet" type="text/css" href="doclist.css">
</head>
  <body>




    <?php

    if ($_SESSION['adminid']==true) {
      include_once 'aheader.php';

    $sql = "SELECT * from `pharmacy`";
    $result = mysqli_query($conn,$sql);

    ?>


    <table id= "doctors"  align="center" border="1px" style="width:1200px; line-height:50px;" >

         <tr>
               <h1 style="background-color:#483D8B; color:white">Pharmacy List</h1>
         </tr>

         <t>
           <th>Pharmacy Name</th>
           <th>Phone Number</th>
           <th>Pharmacy ID</th>
           <th>Password</th>
        </t>

         <?php

               while ($rows = mysqli_fetch_assoc($result))


               {
          ?>

              <tr>

                    <td> <?php echo $rows['PharmacyName'];      ?> </td>
                    <td> <?php echo $rows['PharmacyPhone'];          ?> </td>
                    <td> <?php echo $rows['PharmacyID'];             ?> </td>
                    <td> <?php echo $rows['Password'];           ?> </td>


              </tr>


            <?php
                }

            ?>

    </table>

  <?php

}
  else {
    header('location:index.php');
  }  ?>
  </body>
</html>
