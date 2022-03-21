<?php
    class Livro{
        var $autor;
        var $anoPublicacao;
        var $titulo;

        function abrirPagina($nr){
            echo "Página: ".$nr;
        }
        function mostrarTitulo(){
            return $this->titulo;
        }
    }

    $livro1 = new Livro();
    $livro1->titulo = "Batman";
    $livro1->autor = "Frank Miller";
    $livro1->anoPublicacao = "1988";

    $livro2 = new Livro();
    $livro2->titulo = "20 Mil Léguas Submarinas";
    $livro2->autor = "Júlio Verne";
    $livro2->anoPublicacao = "1800";

    echo $livro1->mostrarTitulo();
    echo "<br>";
    echo $livro2->mostrarTitulo();
?>