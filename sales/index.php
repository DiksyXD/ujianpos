<?php
$submodule = isset($_GET['s']) ? $_GET['s'] : 'view';

switch ($submodule) {
    case 'view':
        include "sales/view.php";
        break;
    case 'add':
        include "sales/add.php";
        break;
    case 'save':
        include "sales/save.php";
        break;
    case 'edit':
        include "sales/edit.php";
        break;
    case 'update':
        include "sales/update.php";
        break;
    case 'delete':
        include "sales/delete.php";
        break;
    default:
        include "sales/view.php";
        break;
}
?>
