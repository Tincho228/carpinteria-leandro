<?php
use App\Models\Photo;

function generateBarcodeNumber() {
    $code = mt_rand(1000000000, 9999999999);
    // otherwise, it's valid and can be used
    return $code;
}