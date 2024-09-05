<?php
$to = "boss@example.com";
$subject = "Laporan Harian";
$message = "Laporan untuk tanggal $date:\n\n$activity";
$headers = "From: karyawan@example.com";

mail($to, $subject, $message, $headers);
?>
