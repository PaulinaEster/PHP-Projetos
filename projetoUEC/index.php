<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Luta</title>

</head>
<body><pre>
    <?php
        require_once 'Lutador.php';
        require_once 'Luta.php';
        $l = array();
        $l[0] = new Lutador("Paulina","Lesbos",19,1.68,60.0,5,2,1);
        $l[1] = new Lutador("Paula","Brasil",19,1.68,70.0,2,1,0);
        $l[2] = new Lutador("Camila","RS",21,1.58,60.0,1,2,3);
        $l[3] = new Lutador("Renata","USA",23,1.70,66.0,2,1,1);
        
        $UEC01 = new Luta();
        $UEC01->marcarLuta($l[1], $l[2]);
        $UEC01->lutar();

    ?></pre>
</body>
</html>