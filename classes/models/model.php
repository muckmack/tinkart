<?php

/**
 * Created by IntelliJ IDEA.
 * User: PengBang
 * Date: 12.11.2014
 * Time: 20:09 s
 */
class Model extends RedBean_SimpleModel
{
    protected $table;


    public function all()
    {
/*        $result = mysql_query("SELECT * FROM " . $this->table);

        $data = [];
        while ($row = mysql_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;*/

        $result = R::getAll("SELECT * FROM " . $this->table);

        return $result;
    }

    public function find($id)
    {
        /*$result = mysql_query("SELECT * FROM " . $this->table . "WHERE id = " . $id);
        return mysql_fetch_assoc($result);*/
        return R::getAll("SELECT * FROM " . $this->table . "WHERE id = " . $id);
    }

    public function create($array)
    {
        // eintrag anlegenas
       /* $result = mysql_query("INSERT INTO " . $this->table . "(" . implode(",", array_keys($array)) . ") VALUES (" . implode(",", $array) . ")");*/
        $result = R::exec("INSERT INTO " . $this->table . "(" . implode(",", array_keys($array)) . ") VALUES (" . implode(",", $array) . ")");
    }

    public function destroy($id)
    {
//        $result = mysql_query("DELETE  FROM " . $this->table . "WHERE id = ". $id);
        $result = R::exec("DELETE  FROM " . $this->table . "WHERE id = ". $id);
    }

    public function update($array)
    {// raus http_build_query!
//        $result = mysql_query("UPDATE " . $this->table . "SET " . http_build_query($array) . " WHERE id = " . $array['id']);
        $this->table = $array;
        $result = R::store($this->table);
    }


}
