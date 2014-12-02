<?php
/**
 * Created by IntelliJ IDEA.
 * User: PengBang
 * Date: 12.11.2014
 * Time: 20:09
 */

class model {

    //klasse für den datenzugriff
    private static function openDataBase(){
        $link = mysql_connect('localhost', 'admin', '');
        if(!$link){
            die("kein server zugriff/gefunden");
    }
mysql_select_db('mydb') or die("datenbank nicht gefunden");
return $link;
}

public static function orderProjectsByTitle($uid){
    $link = self::openDataBase();
    $sql = "SELECT pid FROM project ORDER BY proj_title ASC;";
    $result=mysql_query($sql);
    if (!$result){
        echo mysql_error();
    }
    $orderedList = array("pid");
    while ($row = mysql_fetch_array($result)){
        $orderedList[] = $row;

    }
    //erste zeile entfernen kaka
    unset($orderedList[0]);
    mysql_close($link);
    return $orderedList;
}
    public static function getProjectVote($pid){
        $link = self::openDataBase();
        $sql = "SELECT P_VOTE_UP, P_VOTE_DOWN FROM project WHERE PID=".$pid;
        $result=mysql_query($sql);
        if (!$result){
            echo mysql_error();
        }
        $votes = mysql_fetch_array($result);

        mysql_close($link);
        return $votes;
    }

} 