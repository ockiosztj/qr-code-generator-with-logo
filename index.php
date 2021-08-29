<?php

require 'utils/QRCodeGenerator.php';

$size = "250";
$color = "#000000";
$logo = "logos/robin_logo.png";
$file_type = "png";

// QR Payload
$payload = "Robin Jimmy L. Correa||PHP Developer";

// Initalize QR
$qr = new QRCodeGenerator;

// Set QR Dimensions
$qr->setDimensions($size, $color, $logo, $file_type);

// Set QR Payload
$qr->setPayload($payload);

$base64 = $qr->execute();

if (!base64_decode($base64, true)) {
    exit($base64);
}

echo "<img src='data:image/png;base64, {$base64}' />";
