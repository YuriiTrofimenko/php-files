<?php
    include_once('functions.php');
    session_start();
    if(isset($_POST['signin']))
    {
        if (login($_POST['login'], $_POST['password'])) {
            $_SESSION['user_name'] = $_POST['login'];
            header('Location: index.php?page=home');
        }
    } else if (isset($_POST['signout'])) {
        unset($_SESSION['user_name']);
    }
    if ((!isset($_SESSION['user_name'])
        && (!($_GET['page'] == 'registration')
            && !isset($_GET['signin'])
            && (!($_GET['page'] == 'home'))
            )
        )
    ) {
        header('Location: index.php?page=registration');
    }
?>