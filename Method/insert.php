<?php
declare(strict_types=1);


class Insert extends Connection {

    private $firstname;
    private $lastname;
    private $username;
    private $linkedin;
    private $github;
    private $email;
    private $preflang;
    private $avatar;
    private $video;
    private $quote;
    private $quoteauthor;


/*    public function makeAssocArr(){
        //id and date are not required as they are self made in the DB table
        $newassocArr = ['firstname' => $this->firstname, 'lastname' => $this->lastname,
            'username' => $this->username, 'linkedin' => $this->linkedin, 'github' => $this->github,
            'email' => $this->email, 'preflang' => $this->preflang, 'avatar' => $this->avatar,
            'video' => $this->video, 'quote' => $this->quote, 'quoteauthor' => $this->quoteauthor];
    }

    public function inputToPosts(){
        array_push($newassocArr, $_POST['firstname'], $_POST['lastname'], $_POST['username'],
            $_POST['linkedin'], $_POST['github'], $_POST['email'], $_POST['preflang'], $_POST['avatar'],
            $_POST['video'], $_POST['quote'], $_POST['quoteauthor']);
    }*/

public function insertInto($firstname, $lastname, $username, $linkedin, $github, $email, $preflang, $avatar, $video, $quote, $quoteauthor){
    $insert = "INSERT INTO student (first_name, last_name, username, linkedin, github, email, preferred_language, avatar, video, quote, quote_author)
    VALUES (:firstname, :lastname, :username, :linkedin, :github, :email, :preflang, :avatar, :video, :quote, :quoteauthor)";
    $makeStatement = $this->openConnection()->prepare($insert);
    $makeStatement->execute([
        'firstname' => $firstname,
        'lastname' => $lastname,
        'username' => $username,
        'linkedin' => $linkedin,
        'github' => $github,
        'email' => $email,
        'preflang' => $preflang,
        'avatar' => $avatar,
        'video' => $video,
        'quote' => $quote,
        'quoteauthor' => $quoteauthor]);
}


}

