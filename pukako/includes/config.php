<?php
define('DB_SERVER', 'localhost');   //define your db server here
define('DB_USERNAME', 'root');      //define your db user here
define('DB_PASSWORD', '');          //define your db pass here
define('DB_DATABASE', 'pukako');       //define your db name here
 
class DB_class {
    //put your code here
    public $connection;
    function __construct()
    {
        $this->connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die('Oops connection error -> ' . mysql_error());
    }
}
?>