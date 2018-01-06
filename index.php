<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Pessoa.php';
            require_once 'Livro.php';
            
            
            $p[0] = new Pessoa("thiago", 25, "M");
            $p[1] = new Pessoa("Alex", 24, "M");
            
            $l[0] = new Livro("Senhor Dos Aneis", "Donald", 500, $p[0]);
            $l[1] = new Livro("POO", "Antonio", 300, $p[1]);
            $l[1]->abrir();
            $l[1]->folhear(301);
            $l[1]->fechar();
            
            $l[1]->detalhes();
            $l[0]->detalhes();
        ?>
        </pre>
    </body>
</html>
