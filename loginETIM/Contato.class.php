<?php

/**
 * @author Fabio Claret
 * data abril/2024
 * Classe com conexao a banco de dados
 * @return boolean 
 */

class Contato{
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $pdo;

    function getId($id){
        return $this->id;
    }
    function getNome(){
        return $this->nome;
    }
    function getEmail(){
        return $this->email;
    }
    
    function getSenha(){
        return $this->senha;
    }
    

    function setNome($nome){
        return $this->nome = $nome;
    }
    function setEmail($email){
        return $this->email = $email;
    }
    function setsenha($senha){
        return $this->senha = $senha;
    }
   
    function __construct (){
        #o pdo precisa de 3 parametros

        $dsn    = "mysql:dbname=etimcontato;host=localhost";
        $dbUser = "root";
        $dbPass = "";

        try {
            $this->pdo = new PDO($dsn, $dbUser, $dbPass);
            echo "<script>
                    alert ('conectando ao banco')
                    </script>";
        
        } catch (\Throwable $th) {
            echo "<script>
            alert ('Banco indisponivel, tente mais')
            </script>";
        }
    }



    /**
     * @author Fabio Claret
     * data agosto/2024
     * Metodo de conexao ao banco de dados
     * Tirei o metodo construtor porque ele nao retorna nada e queria testar se conectou
     * @return boolean 
     */

    
        
       






}