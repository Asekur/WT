<?php
$user = $_SERVER['DB_USERNAME'];
$password = $_SERVER['DB_PASSWORD'];
$host = "localhost";
$DB = $_SERVER['DB_NAME'];

$mysql = mysqli_connect($host, $user, $password, $DB) or die("Unable to connect");
mysqli_set_charset($mysql, 'UTF8');
    
$sql = "SELECT * FROM stables";
$result = mysqli_query($mysql, $sql);
echo "<br>STABLES";
echo "<table>";
if ($result) 
{
    while ($row = mysqli_fetch_array($result)) 
    {
        echo '<tr>';
        echo '<td>' . 'ID: ' . $row['ID'] . ' </td>';
        echo '<td>' . 'Name: ' . $row['name'] . ' </td>';
        echo '<td>' . 'Amount heads: ' . $row['heads'] . ' </td>';
        echo '<td>' . 'Establishment: ' . $row['establishment'] . ' </td>';
        echo '<br>';
        echo '</tr>';
    }
    mysqli_free_result($result);
}
echo "</table>";

$sql = "SELECT * FROM competitions";
$result = mysqli_query($mysql, $sql);
echo "<br>COMPETITIONS";
echo "<table>";
if ($result)
{
    while ($row = mysqli_fetch_array($result)) 
    {
        echo '<tr>';
        echo '<td>' . 'ID: ' . $row['ID'] . ' </td>';
        echo '<td>' . 'Name of competition: ' . $row['name_competition'] . ' </td>';
        echo '<td>' . 'Winner: ' . $row['stable_winner'] . ' </td>';
        echo '<td>' . 'Amount of medals: ' . $row['amount_medals'] . ' </td>';
        echo '<br>';
        echo '</tr>';
    }
    mysqli_free_result($result);
}
echo "</table>";

mysqli_close($mysql);
?>