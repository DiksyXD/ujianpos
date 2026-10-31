<?php
$submodule = isset($_GET['s']) ? $_GET['s'] : 'view';

switch ($submodule) {
    case 'view':
        include "suppliers/view.php";
        break;
    case 'add':
        include "suppliers/add.php";
        break;
    case 'save':
        include "suppliers/save.php";
        break;
    case 'edit':
        include "suppliers/edit.php";
        break;
    case 'update':
        include "suppliers/update.php";
        break;
    case 'delete':
        include "suppliers/delete.php";
        break;
    default:
        include "suppliers/view.php";
        break;
}
?>
