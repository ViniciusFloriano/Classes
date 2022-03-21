<?php
    class Usuario{
        var $nome;
        var $login;
        var $senha;
        var $idade;

        function falar(){
            return $this->nome;

        }
        function efetuarLogin($lg, $sn){
            echo "Login: ".$lg."<br>Senha: ".$sn;

        }
        function fazAniversario(){
            return $this->idade;

        }
    }

    $usuario1 = new Usuario();
    $usuario1->nome = 'Vinicius Floriano';
    $usuario1->login = 'floriano';
    $usuario1->senha = '987654321';
    $usuario1->idade = '17';
    
    $usuario2 = new Usuario();
    $usuario2->nome = 'Regiane da Silva';
    $usuario2->login = 'regisilva';
    $usuario2->senha = '123456789';
    $usuario2->idade = '44';

    echo "<br>";
    echo $usuario1->falar();
    echo "<br>";
    echo $usuario2->nome;
    echo "<br>";
    echo $usuario2->efetuarLogin('regisilva', '123456789');
    echo "<br>";
    echo $usuario1->fazAniversario;
    echo "<br>";
    echo $usuario2->fazAniversario;
?>