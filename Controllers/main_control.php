<?php
    // ========== MAIN CONTROLLER ========== //
    $user_data = $_POST['user'];
    $pass_data = $_POST['password'];

    function Good_adm() {
        header("Location: https://gattidev.com/");
    }

    function Mistake(){
        header("Location: ../"); 
    }

    if($user_data == 'Ezequiel' && $pass_data == '12345'){
        Good_adm();
    }else{
        Mistake();
    }
?>