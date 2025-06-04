<?php
include_once 'components/html.php';
include_once 'components/head.php';
include_once 'components/header.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    switch($_POST['abrir']){
        case '01':
            include_once 'components/team_pages/team01.php';
            break;
    }
} else {
    include_once 'components/container_cards.php';
}

include_once 'components/end.php';
?>