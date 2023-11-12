<?php

    class PessoaService {

        private $pdo;
        
        public function __construct() {
            $host     = "localhost";
            $dbname   = "Sistema";
            $username = "root";
            $password = "";

            $this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        }

        // Passando o próprio ojeto, que foi definido no controller com os dados da View
        public function insert (PessoaModel $model) {

            $sql = $this->pdo->prepare("INSERT INTO Usuarios VALUES (null,?,?,?)");

            $sql->bindValue(1, $model->nome);
            $sql->bindValue(2, $model->email);
            $sql->bindValue(3, $model->senha);

            $sql->execute();
        }
        
        public function update (PessoaModel $model) {}

        public function select () {

            $sql = $this->pdo->prepare("SELECT * FROM Usuarios");
            $sql->execute();

            return $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function delete (PessoaModel $model) {}
    }
?>
