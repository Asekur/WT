<?php
$month = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December'
  ];

$dateNearestDeliver = main();
ob_start();
echo "The nearest ".date("d",strtotime($dateNearestDeliver))." ".$month[date('n', strtotime($dateNearestDeliver))-1]." ".date("Y",strtotime($dateNearestDeliver));
if (isset($_POST['submit']) && isset($_POST['date'])) 
{
    ob_end_clean();
    $dateDeliver = newDate();
    if (strtotime($dateDeliver) < strtotime($dateNearestDeliver))
    {
        echo date("d",strtotime($dateNearestDeliver))." ".$month[date('n', strtotime($dateNearestDeliver))-1]." ".date("Y",strtotime($dateNearestDeliver));
    } else {
        echo date("d",strtotime($dateDeliver))." ".$month[date('n', strtotime($dateDeliver))-1]." ".date("Y",strtotime($dateDeliver));
    }
}

function checkHoliday($time)
{
    $fileHolidays = fopen("holidays.txt", 'r') or die("File is not available");
    while(!feof($fileHolidays))
    {
        $holiday = fgets($fileHolidays);
        if (date("d.m.Y",strtotime($holiday)) == $time)
        {
            return false;
        }
    }
    return true;
}

function getAvailable($date, $after){
    while (!checkHoliday(date("d.m.Y", mktime(0, 0, 0, date('m', strtotime($date)), date('d', strtotime($date)) + $after, date('Y', strtotime($date)))))){
        $after++;
    }
    return date("d.m.Y", mktime(0, 0, 0, date('m', strtotime($date)), date('d', strtotime($date)) + $after, date('Y', strtotime($date))));
}

function main()
{
    $date = date("d.m.Y");
    if (date("H") < 12)
    {
        return getAvailable($date, 1);
    } else {
        return getAvailable($date, 2);
    }
}

function newDate()
{
    $date = $_POST['date'];
    return getAvailable($date, 0);
}
?>