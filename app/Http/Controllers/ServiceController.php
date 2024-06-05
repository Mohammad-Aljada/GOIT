<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function services()
    {
        return view('Services');
    }

    public function informationSecurity()
    {
        return view('pages.Information-Security');
    }

    public function supportServices()
    {
        return view('pages.Support-Services');
    }

    public function iPPbx()
    {
        return view('pages.IP-PBX');
    }

    public function wirelessSolutions()
    {
        return view('pages.Wireless-Solutions');
    }

    public function hpeSolution()
    {
        return view('pages.HPE-Solution');
    }

    public function dataCenterSolutions()
    {
        return view('pages.Data-Center-Solutions');
    }

    public function cloudComputing()
    {
        return view('pages.Cloud-Computing');
    }

    public function firewallProtection()
    {
        return view('pages.Firewall-Protection');
    }
}
