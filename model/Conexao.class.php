<?php 
//classe de conexao ao BD com exteds a classe config
class Conexao extends Config{
    private $host,$user,$pw,$bd;

    protected $obj,$itens=array(),$prefix;
    //function de configuracao apontando os dados do BD
    function __construct(){
        $this->host=self::BD_HOST;
        $this->user=self::BD_USER;
        $this->pw=self::BD_SENHA;
        $this->bd=self::BD_BANCO;
        $this->preferix=self::BD_PREFIX;

        //verificacao de erro caso a conexao falhe
        try{
            if($this -> connect() == null){
                $this->connect();
            }
        } 
        catch (Exception $e){
            exit($e->getMessage().'<h2>Erro ao tentar se conectar com o Banco de dados !</h2>');
        }
    }
    //string de conexao
    private function connect(){
        $options=array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
        $link = new PDO("mysql:host={$this->host};dbname={$this->bd}", $this->user,$this->pw , $options);
        return $link;
    }
    //string de execucao ao querry(com verificacao de parametros =null)
    function exeSQL($query, array $params=null){
        $this->obj=$this->connect()->prepare($query); //***soh prepara
        return $this->obj->execute(); //***executa
    }
    //mostra os dados executados acima
    function listDados(){
        return $this->obj->fetch(PDO::FETCH_ASSOC);
    }
    function totalDados(){
        return $this->obj->rowCount(); 
    }
    function get_Itens(){
        return $this->itens; //lista os itens do bd
    }
}