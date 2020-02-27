<?php


class profileController
{

    public static function makeConnection(){
        //this is to check the connection
        $connection = new Connection();
        if ($connection->openConnection()){
            echo "Database is connected";
        } else {
            echo "Connection problem";
        }
    }
    public function profileControl(){

        $statement = new GetFromDB();
        $student = $statement->getSingleUserData();

        require "View/profile-view.php";
    }

}
