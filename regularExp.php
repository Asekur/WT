<?php
$resultStr = "";
if (isset($_POST['submit']) && isset($_POST['string'])) 
{
    $resultStr = ' '.$_POST['string'].' ';
    $re = '/(\s)([a-zа-яё]{6})(\S+)/ui';
    $resultStr = preg_replace($re, '$1$2*$3', $resultStr);
    $re = '/([a-zа-яё]{6})(\*)(.+?)(\s)/ui';
    $resultStr = preg_replace($re, '$1$2$4', $resultStr);
}
echo $resultStr;
?>