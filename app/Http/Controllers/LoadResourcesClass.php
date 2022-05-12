<?php


namespace App\Http\Controllers;

use App\Models\Email;
use App\Models\Phone;
use App\Models\Position;
use App\Models\Service;
use App\Models\SocialNetwork;
use App\Models\SocialNetworkType;
use App\Models\TypeService;

class LoadResourcesClass
{
    public static function loadResources()
    {
        $type_services = TypeService::all();
        $services = Service::all();
        $phones = Phone::all();
        $emails = Email::all();
        $social_networks = SocialNetwork::all();
        $social_network_types = SocialNetworkType::all();
        $main_positions = Position::query()->where('is_main', '=',true)->get();

        return [
            'services' => $services,
            'type_services' => $type_services,
            'emails' => $emails,
            'social_networks' => $social_networks,
            'social_network_types' => $social_network_types,
            'phones' => $phones,
            'main_positions' => $main_positions,
        ];

    }
}
