<?php
class User
{
    public $con;
    public function __construct()
    {
        require_once dirname(__FILE__) . "/includes/DbConnect.php";
        $db = new DbConnect();
        $this->con = $db->connect();
    }

    public function getAllUsers()
    {
        $sql = "SELECT * FROM `user_personal_information`";
      return mysqli_query($this->con, $sql);
        // if (mysqli_num_rows($result))
        // return mysqli_fetch_assoc($result);
    // else
    //     return 0;
    }
    public function getuserdetailbyid($user_id){
        $sql = "SELECT * FROM `user_personal_information` WHERE user_id='$user_id'";
        return mysqli_query($this->con, $sql);
    //     if (mysqli_num_rows($result))
    //     return mysqli_fetch_assoc($result);
    // else
    //     return 0;
    }
    public function geteducationdetailbyid($user_id){
        $sql = "SELECT * FROM `user_education_info` WHERE user_id='$user_id'";
        return mysqli_query($this->con, $sql);
    //     if (mysqli_num_rows($result))
    //     return mysqli_fetch_assoc($result);
    // else
    //     return 0;
    }

    public function getemployemntdetailbyid($user_id){
        $sql = "SELECT * FROM `employement` WHERE user_id='$user_id'";
        return mysqli_query($this->con, $sql);
    //     if (mysqli_num_rows($result))
    //     return mysqli_fetch_assoc($result);
    // else
    //     return 0;
    }




    function getUsersById($id)
    {
        $sql = "SELECT * FROM `asit_user` where Id=$id";
        $result = mysqli_query($this->con, $sql);
        if (mysqli_num_rows($result))
            return mysqli_fetch_assoc($result);
        return 0;
    }
    public function createUser($post,$email,$Contact_no1,$image,$HighSchoolMarksheet,$IntermediateMarksheet,$GraduationMarksheet,$resume,$signature,$salary_slip)
    {
        if ($this->isUserExists($email,$Contact_no1)) {
            echo "user exist";
            return 0;  //user already exixts
        } 
       else
       {
         $sql = "INSERT INTO `user_personal_information` (`name`,`email`, `father_name`,`mother_name`, `contact_no`,`alter_contact_no`, `dob`, `gender`, `martial_status`, `address`, `address2`, `city`, `state`, `zip`,`nationality`,`placeofbirth`,`blood_group`,`pan`,`adhaar`) VALUES ('$post[name]','$post[email]', '$post[father_name]','$post[mother_name]', '$post[Contact_no1]','$post[alter_contact_no]', '$post[dob]', '$post[gender]', '$post[martial_status]', '$post[address]', '$post[address2]', '$post[city]', '$post[state]', '$post[zip]','$post[nationality]','$post[placeofbirth]','$post[blood_group]','$post[pan]','$post[Adhaar]')";

        $result = mysqli_query($this->con, $sql);
        // echo $result;
        // $id= $this->con->insert_id;
        // mysqli_insert_id($conn);
        $id=  mysqli_insert_id($this->con);
        // echo $id;


        if ($result > 0)
        {
            // echo "function call";
            $results=$this->educationinformation($post,$id,$_FILES['image'],$_FILES['HighSchoolMarksheet'],$_FILES['12_Marksheet'],$_FILES['Graduation_Marksheet'],$_FILES['resume'],$_FILES['signature']);
         if($results>0){
            $result=$this->employeement($post,$id,$_FILES['salary_slip']);
            return true;
         }
         else 
         echo "employee not call";

    
        }
    else
        // echo "function not call";
        return false;
       }
     
    }
   
    public function educationinformation($post,$id,$image,$HighSchoolMarksheet,$IntermediateMarksheet,$GraduationMarksheet,$resume,$signature)
    {
    //   echo 
      $imagename = uniqid() . $image['name'];
      $HighSchoolMarksheetname=uniqid().$HighSchoolMarksheet['name'];
      $IntermediateMarksheetname=uniqid().$IntermediateMarksheet['name'];
      $GraduationMarksheetname=uniqid().$GraduationMarksheet['name'];
      $resumename=uniqid().$resume['name'];
      $signaturename=uniqid().$signature['name'];
   
        $sql = "INSERT INTO `user_education_info` (`user_id`,`high_school_name`, `high_school_board`, `high_school_percentage`, `high_school_adress`,`high_school_yr_of_pass`,`high_School_Division`,`duration_of_10`,`duration_of_12`,`duration_of_ug`, `intermediate_institution`, `intermediate_board`,`intermediate_Division`, `intermediate_school_adress`,`intermediate_yr_of_pass`, `intermediate_percentage`, `ug_clg_name`, `ug_course`, `ug_percentage`, `ug_yr_of_pass`,`ug_clg_adress`,`course_type`, `pg_clg_name`,`roll_no`,`10_Marksheet`,`12_MArksheet`,`Graduation_Marksheet`, `image`, `resume`,`signature`) VALUES ('$id','$post[high_school_name]','$post[high_school_board]', '$post[high_school_percentage]','$post[high_school_adress]', '$post[high_school_yr_of_pass]','$post[high_School_Division]','$post[duration_of_10]','$post[duration_of_12]','$post[duration_of_ug]','$post[intermediate_institution]', '$post[intermediate_board]','$post[intermediate_Division]','$post[intermediate_school_adress]','$post[intermediate_yr_of_pass]', '$post[intermediate_percentage]','$post[ug_clg_name]', '$post[ug_course]', '$post[ug_percentage]', '$post[ug_yr_of_pass]','$post[ug_clg_adress]','$post[course_type]', '$post[pg_clg_name]','$post[roll_no]','$HighSchoolMarksheetname','$IntermediateMarksheetname','$GraduationMarksheetname','$imagename', '$resumename','$signaturename');
            ";
        
        $result = mysqli_query($this->con, $sql);
        if($result)
        {
            // echo '../../dashboard/assets/img/' . $imagename;
        // if(move_uploaded_file($image['tmp_name'], '../../dashboard/assets/img/' . $image))
        //     echo 'file moved student img   ';
       $data= move_uploaded_file($image['tmp_name'], '../../dashboard/assets/img/' . $imagename);
        if($data)
        echo 'file moved student img   ';
        else
            echo 'failed to move file';
        
        move_uploaded_file($HighSchoolMarksheet['tmp_name'], '../../dashboard/assets/img/' . $HighSchoolMarksheetname);
        move_uploaded_file($IntermediateMarksheet['tmp_name'], '../../dashboard/assets/img/' . $IntermediateMarksheetname);
        move_uploaded_file($GraduationMarksheet['tmp_name'], '../../dashboard/assets/img/' . $GraduationMarksheetname);
        move_uploaded_file($resume['tmp_name'], '../../dashboard/assets/img/' . $resumename);
        move_uploaded_file($signature['tmp_name'], '../../dashboard/assets/img/' . $signaturename);
        }

        

      
        if ($result > 0)
        return true;
    else
        return false;
        // return $poststatus>0;
    }


    public function employeement($post,$id,$salary_slip)
    {
    
        $salary_slipname = uniqid() . $salary_slip['name'];
        $sql = "INSERT INTO `employement` (`user_id`,`previous_company_name`,`Adress`,`contact_no`,`Employee_id`,`Designation`,`Department`,`ctc`,`Employment_type`,`salary_slip`) VALUES ('$id','$post[previous_company_name]','$post[Adress]','$post[contact_no]','$post[Employee_id]','$post[Designation]','$post[Department]','$post[ctc]','$post[Employment_type]','$salary_slipname'
        );
            ";
        $result = mysqli_query($this->con, $sql);
        if ($result > 0){
            move_uploaded_file($salary_slip['tmp_name'], '../../dashboard/assets/img/' . $salary_slipname);
            echo "employee,$result";
        return true;
        }
    else
      {
        echo "false";
        return false;
      }
        // return $poststatus>0;
    }
   
   
    function isUserExists($email,$Contact_no1)
    {
        
        $sql = "SELECT * FROM `user_personal_information` WHERE contact_no='$Contact_no1' OR email='$email'";
        if($result = mysqli_query($this->con, $sql))
            return mysqli_num_rows($result);
        return false;
        
     
    }

    // function isUserExists($email,$Contact_no1)
    // {
    //     echo
    //     $sql1 = "SELECT * FROM `user_personal_information` WHERE contact_no='$Contact_no1'";
    //     $sql2 = "SELECT * FROM `user_personal_information` WHERE email='$email'";
    //     $sql3 = "SELECT * FROM `user_personal_information` WHERE contact_no='$Contact_no1' AND email='$email'";

    //     if($result = mysqli_query($this->con, $sql3))
    //         return mysqli_num_rows($result);

    //     elseif($result = mysqli_query($this->con, $sql2))
    //         return mysqli_num_rows($result);
    //     elseif($result = mysqli_query($this->con, $sql1))
    //         return mysqli_num_rows($result);
    
    //     return false;
        
     
    // }


    public function login($email, $password)
    {
        $sql = "SELECT * FROM `admin` WHERE email='$email' AND Password='$password'";
        $result = mysqli_query($this->con, $sql);
        if ($result != false) {
            if (mysqli_fetch_assoc($result))
                return true;
            else
                return false;
        } else
            return false;
    }
//     function deleteUsers($postid)
//     {
//         $postsql = "DELETE FROM `users` where Id=$postid";
//         if (mysqli_query($postthis->con, $postsql))
//             return 1;

//         return 0;
//     }
  
    
//     function getUsersDetails($postid)
//     {
//         $postsql = "SELECT * FROM `users` WHERE `id`=$postid";
//         $postresult = mysqli_query($postthis->con, $postsql);
//         if ($postresult != false)
//             return mysqli_fetch_assoc($postresult);
//     }
   
    
 }
 