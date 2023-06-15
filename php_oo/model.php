<?php
Class Model{
    private $server = "localhost";
    private $username = "root";
    private $pass;
    private $database = "cadastro";
    private $conn;
    
    public function __construct (){
        try{
                $this->conn = new mysqli($this->server, $this->username, $this->pass, $this->database);
        }catch(Exeception $e){
            echo "A Conexão falhou!",$e->getMessage();
        }
    }
public function insert(){
    if (isset($_POST['submit'])){
        echo "Ok";
    }
}
}


?>