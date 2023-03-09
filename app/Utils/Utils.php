<?php

namespace App\Utils;


class Utils
{
    function changeDate($saleDate)
{
    if (!$saleDate) {
        return 'Data non disponibile';
    }
    else{
        return \Carbon\Carbon::createFromFormat('Y-m-d', $saleDate)->format('d/M/Y');
    }
}


function displayImage($imagePath, $altText) {
    $publicPath = public_path('storage/'.$imagePath);
    if (file_exists($publicPath)) {
        return '<div class="img-up"><img src="'.asset('storage/'.$imagePath).'" alt="'.$altText.'"></div>';
    } else {
        return '<div class="img-up"><img src="https://static.vecteezy.com/system/resources/previews/005/337/799/original/icon-image-not-found-free-vector.jpg" alt=""></div>';
    }
}
}
