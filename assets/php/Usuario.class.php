<?php

class Usuario{
    private $id;
    private $nome;
    private $email;
    private $senha;

    public function __construct($nome, $email, $senha){
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    
    public function getNome(){
        return $this->nome;
    }

    public function setEmail($email){
        $this->email = $email;
    }
    
    public function getEmail(){
        return $this->email;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }
    
    public function getSenha(){
        return $this->senha;
    }

    public function setId($id){
        $this->id = $id;
    }
    
    public function getId(){
        return $this->id;
    }

    public function exibirDados(){
        echo "<br />";
        echo "O nome do ". __CLASS__ ." é ". $this->nome;
        echo "<br />";
        echo "O email do ". __CLASS__ ." é ". $this->email;
        echo "<br />";
        echo "A senha do ".__CLASS__." é ". $this->senha;
    }

    public function cadastrarUsuario()
    {
        //Conexão com o Banco de Dados
        
        $conexao = mysqli_connect("localhost","root","", "cadastro");
        
        //Verificar a conexão

        if(!$conexao){
            die("Falha na conexão com o Banco de Dados.");
        }

        echo "<br><br>Conectado com o banco!";
        
        $sql = "INSERT INTO usuario VALUES ('$this->id','$this->nome', '$this->email', '$this->senha')";
        if(mysqli_query($conexao, $sql)){
            echo "<br><br>Usuário cadastrado com sucesso!";
        }else{
            echo "Erro: ".mysqli_error($conexao);
        }
        mysqli_close($conexao);
        echo "<script> window.location.href = '../../pages/questao.html'; </script>";
    }

}

