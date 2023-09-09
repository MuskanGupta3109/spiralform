<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php
    require_once "./User.php"
    ?>

</head>
<style>
    .wrapper {
        background: linear-gradient(107deg, #b9b4bc8f 0%, #1cb3d5 87%);
        /* border-radius: 50px; */
        border-radius: 10px;

    }

    section {
        background-image: url("https://image.pngaaa.com/228/5441228-middle.png");
        background-position: center;
        background-size: cover;


    }

    body {
        /* background: linear-gradient(107deg,#9935dc8f 0%,#1cb3d5 87%); */
    }

    input,
    textarea {
        border: 1px solid grey !important;
    }

    label {
        /* color:wheat; */
    }

    .signup {

        /* width: fit-content; */
    }
</style>

<body>
    <section class="container-fluid signup p-0  mt-4 shadow-lg" style="border-radius:20px; background-color:white ;">
        <div class="wrapper">
            <div class="container p-3">
                <h3 class="text-center">Signup User</h3>
                <?php
                $user = new User();

                if (isset($_POST['submit'])) {

                    $status = $user->createUser($_POST, $_POST['email'], $_POST['Contact_no1'], $_FILES['image'], $_FILES['HighSchoolMarksheet'], $_FILES['12_Marksheet'], $_FILES['Graduation_Marksheet'], $_FILES['resume'], $_FILES['signature'], $_FILES['salary_slip']);
                    if ($status > 0) {
                        //  echo "successfull";
                        echo '<script>alert("Successfully Regsitered!....")</script>';

                        //    echo "<script>window.location.href='userdetails.php'</script>";


                    } else
                        //  echo"not registered";
                        echo '<script>alert("Not Registered")</script>';
                }

                ?>
                <form method="post" enctype="multipart/form-data">
                    <b>
                        <h3 class="px-4">Personal Details</h3>
                    </b>
                    <div class="container-fluid px-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="fullname" class="form-label">Full Name</label>
                                    <input type="text" required class="form-control" name="name" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="fullname" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="fname" class="form-label">Father Name</label>
                                    <input type="text" class="form-control" name="father_name" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="mname" class="form-label">Mother Name</label>
                                    <input type="text" class="form-control" name="mother_name" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="martialstatus" class="form-label">Martial Status</label>
                                    <input type="text" class="form-control" name="martial_status" required />
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address1</label>
                                    <textarea class="form-control" name="address" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address2</label>
                                    <textarea class="form-control" name="address2" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="contact" class="form-label">Contact</label>
                                    <input type="number" class="form-control" name="Contact_no1" required />
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="contact" class="form-label">Alter_Contact</label>
                                    <input type="number" class="form-control" name="alter_contact_no" required />
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="fullname" class="form-label">City</label>
                                    <input type="text" class="form-control" name="city" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-2">
                                    <label for="fname" class="form-label">State</label>
                                    <input type="text" class="form-control" name="state" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="fullname" class="form-label">Place of birth</label>
                                    <textarea type="text" class="form-control" name="placeofbirth" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="mname" class="form-label">D.O.B</label>
                                    <input type="date" class="form-control" name="dob" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="mname" class="form-label">Gender</label>
                                    <input type="text" class="form-control" name="gender" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="martialstatus" class="form-label">Nationality</label>
                                    <input type="text" class="form-control" name="nationality" required />
                                </div>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="address" class="form-label">Blood Group</label>
                                    <input type="text" class="form-control" name="blood_group" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="address" class="form-label">PAN Number</label>
                                    <input type="text" class="form-control" name="pan" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="mname" class="form-label">Zip</label>
                                    <input type="number" class="form-control" name="zip" required />
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="mb-3">
                                    <label for="adhar" class="form-label">Aadhar</label>
                                    <input type="number" class="form-control" name="Adhaar" required />
                                </div>

                            </div>
                        </div>

                        <b>
                            <h3 class="px-4" class="px-3">Education Details</h3>
                        </b>
                        <p class="px-4">10th Detail</p>
                        <div class="row">
                            <div class="col-md-6">

                                <div class="mb-3">
                                    <label for="highschoolname" class="form-label">High School Name</label>
                                    <input type="text" class="form-control" name="high_school_name" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="highschoolboard" class="form-label">High School Board</label>
                                    <input type="text" class="form-control" name="high_school_board" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="address" class="form-label">High School Percentage</label>
                                    <input type="text" class="form-control" name="high_school_percentage" required />
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="address" class="form-label">High School Division</label>
                                    <input type="number" class="form-control" name="high_School_Division" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="duration" class="form-label">Duration of 10th</label>
                                    <input type="number" class="form-control" name="duration_of_10" required />
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="highschoolyearofpass" class="form-label">High School of Years Pass</label>
                                    <input type="number" class="form-control" name="high_school_yr_of_pass" required />
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="address" class="form-label">High School Marksheet</label>
                                    <input type="file" class="form-control" name="HighSchoolMarksheet" required />
                                </div>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="mb-3">
                                <label for="address" class="form-label">High School Adress</label>
                                <textarea type="text" class="form-control" name="high_school_adress" required></textarea>
                            </div>
                            </div>
                        </div>
                        <b>
                            <p class="px-4">12th Detail</p>
                        </b>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="durationof12" class="form-label">Duration of 12th</label>
                                    <input type="number" class="form-control" name="duration_of_12" required />
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="intermediate-board" class="form-label">Intermediate Board</label>
                                    <input type="text" class="form-control" name="intermediate_board" required />
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="durationof12" class="form-label">Intermediate Year of Pass</label>
                                    <input type="number" class="form-control" name="intermediate_yr_of_pass" required />
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="intermediate-board" class="form-label">Intermediate Percentage</label>
                                    <input type="text" class="form-control" name="intermediate_percentage" required />
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="intermediate-board" class="form-label">Intermediate institution</label>
                                    <input type="text" class="form-control" name="intermediate_institution" required />
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="intermediate-division" class="form-label">Intermediate Division</label>
                                    <input type="number" class="form-control" name="intermediate_Division" required />
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="intermediate-school_address" class="form-label">12th Marksheet</label>
                                    <input type="file" class="form-control" name="12_Marksheet" required />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="intermediate-school_address" class="form-label">Intermediate School Address</label>
                                    <textarea type="text" class="form-control" name="intermediate_school_adress" required></textarea>
                                </div>

                            </div>

                        </div>
                        <b>
                            <p class="px-4">Graduation Detail</p>
                        </b>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="intermediate-school_address" class="form-label">UG College Name</label>
                                    <input type="text" class="form-control" name="ug_clg_name" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="intermediate-school_address" class="form-label">UG Roll No</label>
                                    <input type="text" class="form-control" name="roll_no" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="intermediate-school_address" class="form-label">UG Percentage</label>
                                    <input type="text" class="form-control" name="ug_percentage" required />
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="intermediate-school_address" class="form-label">UG Year of Pass</label>
                                    <input type="text" class="form-control" name="ug_yr_of_pass" required />
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="intermediate-school_address" class="form-label">PG College Name</label>
                                    <input type="text" class="form-control" name="pg_clg_name" required />
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="intermediate-school_address" class="form-label">Signature</label>
                                    <input type="file" class="form-control" name="signature" required />
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="intermediate-school_address" class="form-label">Duration of UG</label>
                                    <input type="text" class="form-control" name="duration_of_ug" required />
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="intermediate-school_address" class="form-label">UG Course</label>
                                    <input type="text" class="form-control" name="ug_course" required />
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="intermediate-school_address" class="form-label">Graduation Marksheet</label>
                                    <input type="file" class="form-control" name="Graduation_Marksheet" required />
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="intermediate-school_address" class="form-label">student Image</label>
                                    <input type="file" class="form-control" name="image" required />
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="intermediate-school_address" class="form-label">UG College Address</label>
                                    <textarea type="text" class="form-control" name="ug_clg_adress" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="mb-3">
                                <label for="intermediate-school_address" class="form-label">Resume</label>
                            <input type="file" class="form-control" name="resume" required/>   
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="mb-3">
                                <label for="intermediate-school_address" class="form-label"> Course Type</label>
                            <input type="text" class="form-control" name="course_type"required />   
                                </div>
                            </div>

                        </div>
                        



                        <center>
                            <div class="col-md-6">
                                <div class="mb-3 p-3 ">
                                    <b> <label for="gender" class="form-label">Experienced Detail</label></b>
                                    <br>
                                    <input type="radio" name='ed' onClick="myFunction()" value="Yes"><span>Yes</span>&nbsp; &nbsp;
                                    <input type="radio" name='ed' value="No" onClick="myFunction1()" value="No"><span>No</span>
                                </div>
                            </div>
                        </center>


                        <div class="row" id="mydiv" style="display:none;">
                            <b>
                                <p class="px-4">Employment Detail</p>
                            </b>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="intermediate-school_address" class="form-label">Designation</label>
                                        <input type="text" class="form-control" id="designation" name="Designation" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="intermediate-school_address" class="form-label">Contact Number</label>
                                        <input type="number" class="form-control" id="contact" name="contact_no" />
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="intermediate-school_address" class="form-label">Employee ID</label>
                                        <input type="number" class="form-control" id="employeeid" name="Employee_id" />
                                    </div>
                                </div>

                                <div class="col-md-6">

                                    <div class="mb-3">
                                        <label for="intermediate-school_address" class="form-label">Previous_company_name</label>
                                        <input type="text" class="form-control" id="previouscompanyname" name="previous_company_name" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="intermediate-school_address" class="form-label">Employment Type</label>
                                        <input type="text" class="form-control" id="employeetype" name="Employment_type" />
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="intermediate-school_address" class="form-label">Salary Slip</label>
                                        <input type="file" class="form-control" id="salary" name="salary_slip" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="intermediate-school_address" class="form-label">Department</label>
                                        <input type="text" class="form-control" id="department" name="Department" />
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="intermediate-school_address" class="form-label">CTC</label>
                                        <input type="number" class="form-control" id="ctc" name="ctc" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="intermediate-school_address" class="form-label">Address</label>
                                        <textarea type="text" class="form-control" id="address" name="Adress"></textarea>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div style="float:right;    position: relative;
    top: -30px;">

                            <!-- <input type="button" class="btn btn-primary" id="button1" name='submit' value="submit"> -->

                            <button class="btn btn-primary" id="button1" name='submit'>Submit</button>
                            <button class="btn btn-primary" id="button1" name="cancel">Cancel</button>

                        </div>
                    </div>



                </form>
            </div>
        </div>
    </section>
    <script>
        //         function myFunction() {
        //   var x = document.getElementById("mydiv");
        //   if (x.style.display === "none") {
        //     x.style.display = "block";
        //   } else {
        //     x.style.display = "none";
        //   }
        // }
        function myFunction1() {
            var x = document.getElementById("mydiv");
            //  x.ariaRequired==false;
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                // x.style.display = "none";
                if (x.style.display === "none") {
                x.style.display = "none";
            } 
            }
        }



        

        function myFunction() {
            var x = document.getElementById("mydiv");
            if (x.style.display === "none") {
                x.style.display = "block";

                if (x.style.display === "block") {
                    $('#button1').click(function() {
                        $("#address").prop('required', true);
                        $("#contact").prop('required', true);
                        $("#employeeid").prop('required', true);
                        $("#previouscompanyname").prop('required', true);
                        $("#designation").prop('required', true);
                        $("#department").prop('required', true);
                        $("#ctc").prop('required', true);
                        $("#employeetype").prop('required', true);
                        $("#salary").prop('required', true);
                    })
                } else {
                    $("#address").prop('required', false);
                    $("#contact").prop('required', false);
                    $("#employeeid").prop('required', false);
                    $("#previouscompanyname").prop('required', false);
                    $("#designation").prop('required', false);
                    $("#department").prop('required', false);
                    $("#ctc").prop('required', false);
                    $("#employeetype").prop('required', false);
                    $("#salary").prop('required', false);
                }

            } else {
                x.style.display = "block";
            }
        }
    </script>

</body>

</html>