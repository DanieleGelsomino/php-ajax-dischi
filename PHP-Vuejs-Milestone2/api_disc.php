<?php
include('data_dischi.php');

header("Content-Type: application/json");

echo json_encode($info_discs);
?>
