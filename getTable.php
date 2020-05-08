<?php
$user = $_SERVER['DB_USERNAME'];
$password = $_SERVER['DB_PASSWORD'];
$host = "localhost";
$DB = $_SERVER['DB_SYSTEMSNAMES'];

$mysql = mysqli_connect($host, $user, $password, $DB) or die("Unable to connect");
mysqli_set_charset($mysql, 'UTF8');
$browser = get_browser(null, true);
$query = 'INSERT INTO `osystems`(`name_os`, `amount_users`) VALUES ("' . $browser['platform'] . '", 1) ON DUPLICATE KEY UPDATE `amount_users`=`amount_users`+1';
mysqli_query($mysql, $query);

$sql = "SELECT * FROM osystems";
$result = mysqli_query($mysql, $sql);

echo "<br>OPERATING SYSTEMS";
echo "<table>";
if ($result) 
{
    while ($row = mysqli_fetch_array($result)) 
    {
        echo '<tr>';
        echo '<td>' . 'Name: ' . $row['name_os'] . ' </td>';
        echo '<td>' . 'Amount users: ' . $row['amount_users'] . ' </td>';
        echo '<br>';
        echo '</tr>';
    }
    mysqli_free_result($result);
}
echo "</table>";

mysqli_close($mysql);
?>