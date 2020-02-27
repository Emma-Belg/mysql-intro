<?php


class GetFromDB extends Connection
{
    public function getAllData(): array
    {
        //select rows from the db based on a given query

        $sql = "SELECT * FROM student";
        $statement = $this->openConnection()->prepare($sql);
        $statement->execute([]);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProfileData() {
        //select
    }

    public function getSingleUserData(): array
    {
        $sql = "SELECT * FROM student WHERE id = :id";
        $statement = $this->openConnection()->prepare($sql);
        $userID = $_GET["user"];
        $statement->execute([$userID]);
        return $statement->fetch(PDO:: FETCH_ASSOC);
    }


}
