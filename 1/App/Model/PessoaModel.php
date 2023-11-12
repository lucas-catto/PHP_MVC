<?php

    class PessoaModel {

        public $nome;
        public $email;
        public $senha;

        public $rows; // Armazena todas as linhas do banco de dados

        public function save () {

            include './Service/PessoaService.php';

            $pessoaService = new PessoaService(); // conectou no banco de dados

            // Passo o próprio objeto, já que foi definido no controller com os dados que vieram da View
            $pessoaService->insert($this);
        }

        public function getAllRows () {

            include './Service/PessoaService.php';

            $pessoaService = new PessoaService();

            $this->rows = $pessoaService->select();
        }
    }
?>
