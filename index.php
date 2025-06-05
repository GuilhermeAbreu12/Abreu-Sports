<?php
include_once 'components/html.php';
include_once 'components/head.php';
include_once 'components/header.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    switch($_POST['abrir']){
        case '00':
            include_once 'components/container_cards.php';
            break;
        case '01':
            include_once 'components/team_pages/team01.php';
            include_once 'components/voltar.php';
            break;
        case '02':
            include_once 'components/team_pages/team02.php';
            include_once 'components/voltar.php';
            break;
        case '03':
            include_once 'components/team_pages/team03.php';
            include_once 'components/voltar.php';
            break;
        case '04':
            include_once 'components/team_pages/team04.php';
            include_once 'components/voltar.php';
            break;
        case '05':
            include_once 'components/team_pages/team05.php';
            include_once 'components/voltar.php';
            break;
    }
} else {
    include_once 'components/container_cards.php';
}

include_once 'components/end.php';
?>