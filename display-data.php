<?Php
require "config.php"; // Database Connection
$date=$_GET['selectedDate'];
$date = new DateTime($date);
$date=$date->format('Y-m-d');

//echo $date;
$sql="select * from event where date ='$date'";

foreach ($dbo->query($sql) as $row) {
?>
<!doctype HTML>
<html>
    <body>
    <h2>Event</h2><hr />
    <img class="hidden" src="img_event/<?= $row['id'] ?>.jpg" width="330" height="50">
    <h5><?php echo "$row[nom]<br> "; ?></h5>
    <p style=" word-wrap: break-word;><?php echo "$row[Descr]<br> "; ?></p>

    </body>
    </html>

<?php
}
?>
