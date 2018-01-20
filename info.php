<?php
$usuarioTelefone = '62982752049';
if( substr($usuarioTelefone,0,1) == 0 ){
    $usuarioTelefone = substr($usuarioTelefone, 1);
}

echo $usuarioTelefone;
?>