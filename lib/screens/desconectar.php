<?php
    // Inicia a sessão
    session_start();
    
    // Destrói a sessão
    session_destroy();

    header('location: index.php');

?>