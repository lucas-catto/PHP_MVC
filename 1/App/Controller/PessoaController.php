<?php

    class PessoaController {

        // retorna as pessoas
        public static function index () {
            
            include './Model/PessoaModel.php';

            $pessoaModel = new PessoaModel();
            
            $pessoaModel->getAllRows();

            include './View/modules/Pessoa/ListaPessoa.php';
        }
        
        // retorna o formulário
        public static function form () {
            include './View/modules/Pessoa/FormPessoa.php';
        }

        // salvar os dados do formulário
        public static function save () {
            /*
            var_dump($_POST);
            */
            /*
            echo '1 - '.$_POST["nome"]  . '</br>';
            echo '2 - '.$_POST["email"] . '</br>';
            echo '3 - '.$_POST["senha"];
            */

            include './Model/PessoaModel.php';

            $pessoaModel = new PessoaModel();

            $pessoaModel->nome  = isset($_POST['nome'])  ? $_POST['nome']  : '';
            $pessoaModel->email = isset($_POST['email']) ? $_POST['email'] : '';
            $pessoaModel->senha = isset($_POST['senha']) ? $_POST['senha'] : '';

            $pessoaModel->save();

            header('Location: /pessoa');
        }
    }    
?>
