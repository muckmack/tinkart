<?php

/**
 * Created by IntelliJ IDEA.
 * User: PengBang
 * Date: 12.11.2014
 * Time: 20:09
 */
class Model
{
    protected $table;


    public function all()
    {
        $result = mysql_query("SELECT * FROM " . $this->table);

        $data = [];
        while ($row = mysql_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;
    }

    public function find($id)
    {
        $result = mysql_query("SELECT * FROM " . $this->table . "WHERE id = " . $id);
        return mysql_fetch_assoc($result);
    }

    public function create($array)
    {
        // eintrag anlegenas
        $result = mysql_query("INSERT INTO " . $this->table . "(" . implode(",", array_keys($array)) . ") VALUES (" . implode(",", $array) . ")");
    }

    public function destroy($id)
    {
        $result = mysql_query("DELETE  FROM " . $this->table . "WHERE id = ". $id);
    }

    public function update($array)
    {
        $result = mysql_query("UPDATE " . $this->table . "SET ");

    }

}
