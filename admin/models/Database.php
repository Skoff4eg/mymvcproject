<?php
class Database {
	private $host = "localhost";
    private $user = "mvc";
    private $pass = "mvc";
    private $db = "mvc";

    function connectToDb(){
        if(mysql_connect($this->host, $this->user, $this->pass)){
            echo "connect to host";
            if(mysql_select_db($this->db)){
                echo "connect to db";
            }
        }

    }

    function closeConnection(){
        mysql_close();
    }




}

?>