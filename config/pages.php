<?php

include "../config/koneksi.php";

if(empty($_GET['page'])){
    $getPage = '';
}else{
    $getPage = $_GET['page'];
}

if($getPage=="user"){
    include "../page/menu/menu_user/user.php";
}
if($getPage=="dashboard"){
    include "../page/dashboard.php";
}
if($getPage=="create_user"){
    include "../page/menu/menu_user/create_user.php";
}
if($getPage=="delete_user"){
    include "../page/menu/menu_user/delete_user.php";
}
if($getPage=="edit_user"){
    include "../page/menu/menu_user/edit_user.php";
}
if($getPage=="create_contact"){
    include "../page/menu/menu_contus/create_contact.php";
}
if($getPage=="delete_contact"){
    include "../page/menu/menu_contus/delete_contact.php";
}
if($getPage=="contus"){
    include "../page/menu/menu_contus/contus.php";
}
if($getPage=="surat"){
    include "../page/menu/menu_surat/surat.php";
}
if($getPage=="create_surat"){
    include "../page/menu/menu_surat/create_surat.php";
}
if($getPage=="edit_surat"){
    include "../page/menu/menu_surat/edit_surat.php";
}
if($getPage=="delete_surat"){
    include "../page/menu/menu_surat/delete_surat.php";
}
?>