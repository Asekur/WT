<?php
$year = date("Y");
$arrChina = array();

if (isset($_POST['submit']) && isset($_POST['year'])) 
{
    $year = date("Y",strtotime($_POST['year']));
    $user = $_SERVER['DB_USERNAME'];
    $password = $_SERVER['DB_PASSWORD'];
    $host = "localhost";
    $DB = $_SERVER['DB_YEARNAME'];

    $mysql = mysqli_connect($host, $user, $password, $DB) or die("Unable to connect");
    mysqli_set_charset($mysql, 'UTF8');

    $sql = "SELECT * FROM animalschina";
    $result = mysqli_query($mysql, $sql);
    $changeMas = -1;

    if ($result) 
    {
        while ($row = mysqli_fetch_array($result)) 
        {
            if ($row['year'] === $year)
            {
                $changeMas = 0;
            }
            if ($changeMas >= 0)
            {
                if ($changeMas === 4)
                {
                    echo $row['animal_name'] . '. ';
                    break;
                }
                else
                {
                    echo $row['animal_name'] . ', ';
                    $changeMas++;
                }
            }
        }
        mysqli_free_result($result);
    }
    mysqli_close($mysql);
}
?>