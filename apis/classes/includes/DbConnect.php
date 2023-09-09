<?php
class DbConnect
{
    private $con;

    public function connect()
    {
        
        include_once dirname(__FILE__) . "/Constants.php";
        $this->con = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

        if (mysqli_connect_errno()) {
            echo "Failed to connect with database";
        } else {
            // echo "connected";
        }
        return $this->con;
    }
}
