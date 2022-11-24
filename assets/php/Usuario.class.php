<?php

    require_once "Conexao.class.php";

    class Usuario{
        private $id;
        private $nome;
        private $email;
        private $senha;

        public function __construct($nome="", $email="", $senha=""){
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

        public function inserirUsuario(){

            $cn = new Conexao();
            $conexaoBanco = $cn->getInstance();

            $stmt = $conexaoBanco->prepare("INSERT INTO usuario VALUES (:id, :nome, :email, :senha)");
            $stmt->bindParam(':id', $this->id);            
            $stmt->bindParam(':nome', $this->nome);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':senha', $this->senha);

            $resultado = $stmt->execute();

            if(!$resultado){
                echo "Erro, não foi possível inserir o usuário.";
                exit;
            }
            echo "Usuário inserido com sucesso!";
            echo "<script> window.location.href = '../../pages/inicial.html'; </script>";
        }

        public function buscarTodosUsuarios(){
            $cn = new Conexao();
            $conexaoBanco = $cn->getInstance();
            $stmt = $conexaoBanco->prepare("SELECT * FROM usuario");
            $stmt->execute();
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        }

        public function atualizarUsuario(){
            $cn = new Conexao();
            $conexaoBanco = $cn->getInstance();
            $stmt = $conexaoBanco->prepare("UPDATE usuario SET nome = :novoNome, email = :novoEmail, senha = :novaSenha WHERE id = :id");
            $stmt->bindParam(':novoNome', $this->nome);
            $stmt->bindParam(':novoEmail', $this->email);
            $stmt->bindParam(':novaSenha', $this->senha);
            $stmt->bindParam(":id", $this->id);

            $resultado = $stmt->execute();

            if(!$resultado){
                echo "Não foi possível atualizar o usuário.";
                exit;
            }
            echo "Usuário atualizado com sucesso.";
            echo "<script> window.location.href = './todosUsuarios.php'; </script>";
        }

        public function excluirUsuario($id){
            $cn = new Conexao();
            $conexaoBanco = $cn->getInstance();
            
            $stmt=$conexaoBanco->prepare("DELETE FROM usuario WHERE id = :id");
            
            $stmt->bindParam(":id", $id);
            $resultado = $stmt->execute();
            if(!$resultado){
                echo "Não foi possível excluir o usuário.";
                exit;
            }
            echo "Usuário excluído com sucesso";
        }
    }

?>