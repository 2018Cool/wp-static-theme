<?php 
$lang = $_GET['lan'];
if($lang == ''){
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
}
if($lang == 'zh'){
    get_template_part( 'template-parts/zh' );
}else{
    get_template_part( 'template-parts/en' );
}
?>