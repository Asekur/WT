<?php
if (isset($_POST['submit'])) 
{
    foreach ($_SESSION['pages'] as $page)
    {
        print $page . '<br>';
    }
    session_unset();
}
?>