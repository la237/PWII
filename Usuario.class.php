<?php
class Usuario{
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $pdo;

    // o método construtor é o que inicia antes da classe
    public function __construct(){
        //PDO -> Objetos de banco de dados em PHP (caminho, usuario, senha)
        $dns = "mysql:dbname=usuariopwii;host=localhost";
        $dbUser = "root";
        $dbPass = "";
        try{
            $this->pdo = new PDO ($dns, $dbUser, $dbPass);
            return true;
        }catch(\Throwable $th){
            return false;
        }
       

    }

    function cadastrar($nome,$email,$senha){
        // passo 1 criar a query(consulta)

        $sql = "INSERT INTO usuarios SET nome = :n, email = :e, senha = :s";

        //passo 2 prepara a query
        $stmt = $this->pdo->prepare($sql);

        //passo 3 usar bind/value
        $stmt->bindValue(":n",$nome);
        $stmt->bindValue(":e",$email);
        $stmt->bindValue(":s",$senha);

        //passo 4 executar a query
        return $stmt->execute();

    }
}