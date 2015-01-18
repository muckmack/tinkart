<?php
/**
 * Created by IntelliJ IDEA.
 * User: PengBang
 * Date: 17.01.2015
 * Time: 17:34
 */



class Model_Register extends Model {
    public function __construct()
    {
        $exists = R::find('users', 'email = ' . $_GET["email"]);
        if ( isset($exists) )
        {
            $querystring = $_SERVER['QUERY_STRING'];

            $controller->display($querystring);
            return false;
        }
        if ($_GET["firstname"] && $_GET["lastname"] && $_GET["password"] && $_GET["password2"] && $_GET["email"] && $_GET["username"] )
        {
            if($_GET["regpass1"]==$_GET["regpass2"])
            {

                $sql="insert into users (name,email,password)values('$_GET[regname]','$_GET[regemail]','$_GET[regpass1]')";
                $result=mysql_query($sql,$conn) or die(mysql_error());
                print "<h1>you have registered sucessfully</h1>";

                print "<a href='index.php'>go to login page</a>";
            }
            else print "passwords do not match";
        }
        else print"invaild data";
    }
} 