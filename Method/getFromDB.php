<?php


class GetFromDB extends Connection
{
    public function gettingData(): array
    {
        //select rows from the db based on a given query

        $sql = "SELECT * FROM student";
        $statement = $this->openConnection()->prepare($sql);
        $statement->execute([]);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

}
