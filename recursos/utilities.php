<?php
function signout(){
    unset($_SESSION['usuarioR']);
    unset($_SESSION['estadoR']);

    session_destroy();
    session_regenerate_id(true);
    redirectTo('login');
}

function redirectTo($page){
    header("Location: {$page}.php");
}