<?php

    class Conexao
    {
        private $conexaoBD;

        public function getInstance(){
            $this->conexaoBD = new PDO("mysql:host=localhost;dbname=cadastro","root","");
            return $this->conexaoBD;
        }
    }
?>