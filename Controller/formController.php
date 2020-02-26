<?php
declare(strict_types=1);



class formController{

    public static function makeConnection(){
        //this is to check the connection
        $connection = new Connection();
        if ($connection->openConnection()){
            echo "Database is connected";
        } else {
            echo "Connection problem";
        }
    }
    public function control(){

        if(!empty($_POST)){
            //take input from the form using the posts
            $inputFromForm = new Insert();
            $inputFromForm->insertInto($_POST['firstname'], $_POST['lastname'], $_POST['username'], $_POST['linkedin'], $_POST['github'], $_POST['email'], $_POST['preflang'], $_POST['avatar'], $_POST['video'], $_POST['quote'], $_POST['quoteauthor']);
        }
        $statement = new GetFromDB();
        $students = $statement->gettingData();

        require "View/form-view.php";
    }


}
