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

        // public function cadastrarUsuario()
        // {
            
        //     //Conexão com o Banco de Dados
            
        //     $conexao = mysqli_connect("localhost","root","", "cadastro");
            
        //     //Verificar a conexão

        //     if(!$conexao){
        //         die("Falha na conexão com o Banco de Dados.");
        //     }

        //     echo "<br><br>Conectado com o banco!";
            
        //     $sql = "INSERT INTO usuario VALUES ('$this->id','$this->nome', '$this->email', '$this->senha')";
        //     if(mysqli_query($conexao, $sql)){
        //         echo "<br><br>Usuário cadastrado com sucesso!";
        //     }else{
        //         echo "Erro: ".mysqli_error($conexao);
        //     }
        //     mysqli_close($conexao);
        //     echo "<script> window.location.href = '../../pages/questao.html'; </script>";
        // }

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
            echo "<script> window.location.href = '../../pages/questao.html'; </script>";
        }

        public function buscarTodosUsuarios(){
            $cn = new Conexao();
            $conexaoBanco = $cn->getInstance();
            $stmt = $conexaoBanco->prepare("SELECT * FROM usuario");
            $stmt->execute();
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        }

        public function atualizarusuario(){
            $cn = new Conexao();
            $conexaoBanco = $cn->getInstance();
            $stmt = $conexaoBanco->prepare("UPDATE usuario SET
                                            nome = :novoNome,
                                            email = :novoEmail,
                                            senha = :novaSenha
                                            WHERE id = :id");
            $stmt->bindParam(":novoEmail",$this->email);
            $stmt->bindParam(":novaSenha", $this->senha);
            $stmt->bindParam(":novoNome", $this->nome);

            $resultado = $stmt->execute();

            if(!$resultado){
                echo "Não foi possível atualizar o usuário.";
                exit;
            }
            echo "Usuário atualizado com sucesso.";
        }
    }

?>