
<?php
require_once 'mecanica.php';
for ($i=0;$i<100;$i++)
{
    $numero=rand ( 1 ,  9000 );
    echo $numero."\n".extenso($numero)."\n\n\n";
}
