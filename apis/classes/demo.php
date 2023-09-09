<?php
    require_once "./User.php";

$o=new User();
$post=[];
// $o->createUser($post,'muskangupta9224@gmai','9756612644');
$result=$o->getuserdetailbyid($_GET['user_id']);
    echo $result;
    


?>