<?php
if(isset($_REQUEST['lang'])){
    $_SESSION['language']=$_REQUEST['lang'];
}

$sql= $mysqli->query("select * from bsi_language where `lang_default`=true");
$row_default_lang=$sql->fetch_assoc();

if(isset($_SESSION['language']))
    $language_selected=$mysqli->real_escape_string($_SESSION['language']);
else
    $language_selected=$row_default_lang['lang_code'];
$sql2=$mysqli->query("select * from bsi_language where  lang_code='$language_selected' ");
$row_visitor_lang=$sql2->fetch_assoc();
include("languages/".$row_visitor_lang['lang_file']);

//******************************************
$sql_lang_select=$mysqli->query("select * from bsi_language order by lang_title");
$lang_dd='';

while($row_lang_select=$sql_lang_select->fetch_assoc()){
    if($row_lang_select['lang_code']==$language_selected)
        $lang_dd.='<li><a href="'.$row_lang_select['lang_code'].'" selected="selected">'.$row_lang_select['lang_title'].'</a></li>';
    else
        $lang_dd.='<li><a href="'.$row_lang_select['lang_code'].'">'.$row_lang_select['lang_title'].'</a></li></option>';
}
//******************************************
?>