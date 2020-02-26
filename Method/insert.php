<?php
declare(strict_types=1);


class Insert extends Connection {


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

    return $dataToPrint = $makeStatement;
}


}

