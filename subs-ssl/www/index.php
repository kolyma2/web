<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$acceptLang = ['de']; 
$lang = in_array($lang, $acceptLang) ? $lang : 'en';
header("Location: /".$lang);