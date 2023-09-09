<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php session_start() ?>
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
            <div class="row">
            <table class="table">

  <thead>
    <b>personal details</b>
    <tr>
      <!-- <th scope="col">S.no</th> -->
      <th scope="col">User ID</th>
      
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
    $result=$user->getuserdetailbyid($_GET['id']);
    if($result==false)
        echo"no data";
    else{
        while($row=mysqli_fetch_assoc(($result))){
        echo "
    <tr>
    
     <td>$row[user_id]</td>
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

            <br><br><br>
            <table class="table">
  <thead>
    <b>Employeement details</b>
    <tr>
      <!-- <th scope="col">S.no</th> -->
      <th scope="col">User Id</th>
      <th scope="col">Previous Company Name</th>
      <th scope="col">Adress</th>
    
      <th scope="col">Contact No</th>
      <th scope="col">Employee ID</th>
      <th scope="col">Designation</th>
      <th scope="col">CTC</th>
      <th scope="col">Employee Type</th>
     
      
    </tr>
  </thead>
  <tbody>
  <?php
    $result=$user->getemployemntdetailbyid($_GET['id']);
    if($result==false)
        echo"no data";
    else{
        while($row=mysqli_fetch_assoc(($result))){
            // print_r($row);
        echo "
    <tr>
   
     <td>$row[user_id]</td>
     <td>$row[previous_company_name]</td>
     <td>$row[Adress]</td>
     <td>$row[contact_no]</td>
     <td>$row[Employee_id]</td>
     <td>$row[Designation]</td>
     <td>$row[Department]</td>
     <td>$row[ctc]</td>
     <td>$row[Employment_type]</td>
     
    </tr>
    ";
}
}
?>
  </tbody>
</table>


        </div>
        <div class="row">
        <table class="table">
  <thead>
    <b>Education Detail</b>
    <tr>
      <!-- <th scope="col">S.no.</th> -->
      <th scope="col">User Id</th>
      <th scope="col">High School Name</th>
      <th scope="col">High School Board</th>
      <th scope="col">High School Percentage</th>
      <th scope="col">High School Address</th>
      <th scope="col">High School Year of Pass</th>
      <th scope="col">High School Division</th>
      <th scope="col">Duration of 10</th>
      <th scope="col">Duration of 12</th>
      <th scope="col">Duration of ug</th>
      <th scope="col">Intermediate Institution</th>
      <th scope="col">Intermediate Board</th>
      <th scope="col">Intermediate Division</th>
      <th scope="col">Intermediate School Address</th>
      <th scope="col">Intermediate Year of Pass</th>
      <th scope="col">Intermediate Percentage</th>
      <th scope="col">Ug College Name</th>
      <th scope="col">Ug Course</th>
      <th scope="col">Ug Percentage</th>
      <th scope="col">Ug Year of Pass</th>
      <th scope="col">Ug college Address</th>
      <th scope="col">Course Type</th>
      <th scope="col">Pg College Name</th>
      <th scope="col">Roll No.</th>
    </tr>
  </thead>
  <tbody>
 <?php
                                        $result = $user-> geteducationdetailbyid($_GET['id']);
                                        if ($result == false)
                                            echo "<tr>No data found</tr>";
                                        else {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "
                                                <tr>
                                            <td>$row[user_id]</td>
                                            <td>$row[high_school_name]</td>
                                            <td>$row[high_school_board]</td>
                                            <td>$row[high_school_percentage]</td>
                                            <td>$row[high_school_adress]</td>
                                            <td>$row[high_school_yr_of_pass]</td>
                                            <td>$row[high_School_Division]</td>
                                            
                                            <td>$row[duration_of_10]</td>
                                            <td>$row[duration_of_12]</td>
                                            <td>$row[intermediate_institution]</td>
                                            <td>$row[intermediate_board]</td>
                                            <td>$row[intermediate_Division]</td>
                                            <td>$row[intermediate_school_adress]</td>
                                            <td>$row[intermediate_yr_of_pass]</td>
                                            <td>$row[intermediate_percentage]</td>
                                            <td>$row[ug_clg_name]</td>
                                            <td>$row[ug_course]</td>
                                            <td>$row[ug_percentage]</td>
                                            <td>$row[ug_yr_of_pass]</td>
                                            <td>$row[ug_clg_adress]</td>
                                            <td>$row[course_type]</td>
                                            <td>$row[pg_clg_name]</td>
                                            <td>$row[roll_no]</td>
                                            
                                           
                                        </tr>
                                                ";
                                            }
                                        }
                                        ?>
  </tbody>
</table>
        </div>

   
    
</body>
</html>