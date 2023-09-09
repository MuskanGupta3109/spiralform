<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php session_start()?>
  
    <?php

    if(!isset($_SESSION['email']))
      echo "<script>window.location.href='registration.php'</script>"

    ?>
</head>
<body>
    <!-- Register Detail -->
    <div class="container-fluid mt-5">

        <?php

        require_once "./User.php";
        $user=new User();
        ?>
      
            <h3 class="text-center">Register Details</h3>
            <a href='./logout.php'>logout</a>
            <div class="row">
            <table class="table">

  <thead>
    <b>personal details</b>
    <tr>
      <!-- <th scope="col">S.no</th> -->
      <th scope="col">User ID</th>
      <th>view</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Father Name</th>
      <th scope="col">Mother Name</th>
      <th scope="col">Contact No</th>
      <th scope="col">Alter_contact_no</th>
      <th scope="col">DOB</th>
      <th scope="col">Gender</th>
      <th scope="col">MArital Status</th>
      <th scope="col">Adress1</th>
      <th scope="col">Adress 2</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
      <th scope="col">Zip</th>
      <th scope="col">Nationality</th>
      <th scope="col">Place of Birth</th>
      <th scope="col">Blood Group</th>
      <th scope="col">PAN Number</th>
      <th scope="col">Adhaar Number</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    $result=$user->getAllUsers();
    if($result==false)
        echo"no data";
    else{
        while($row=mysqli_fetch_assoc(($result))){
        echo "
    <tr>
    
     <td>$row[user_id]</td>
     <td>
     <a href='getdetailsbyid.php?id=$row[user_id]'>view</a>
 </td>
     <td>$row[email]</td>
     <td>$row[father_name]</td>
     <td>$row[mother_name]</td>
     <td>$row[contact_no]</td>
     <td>$row[alter_contact_no]</td>
     <td>$row[dob]</td>
     <td>$row[gender]</td>
     <td>$row[martial_status]</td>
     <td>$row[address]</td>
     <td>$row[address2]</td>
     <td>$row[city]</td>
     <td>$row[state]</td>
     <td>$row[zip]</td>
     <td>$row[nationality]</td>
     <td>$row[placeofbirth]</td>
     <td>$row[blood_group]</td>
     <td>$row[pan]</td>
     <td>$row[adhaar]</td>
     
    </tr>
    ";
        }
    }
    ?>
  </tbody>
</table>
            </div>

            


        </div>
       

   
    
</body>
</html>