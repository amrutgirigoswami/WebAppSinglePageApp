<?php

use App\Models\Service;

function getServices()
{
    $services = Service::where('status', 1)
        ->orderBy('created_at', 'desc')
        ->get();

    return $services;
}

?>
