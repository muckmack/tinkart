<?php

class Project {

    public function all()
    {
        $result = mysql_query('SELECT * FROM projects ORDER BY id DESC');

        while ($row = mysql_fetch_assoc($result)){
            $projects[] = $row;
        }

        return $projects;
    }

}