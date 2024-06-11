<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function ourservices()
    {
        $services = Service::all();
        return view('Services', compact('services'));
    }

    public function show($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        $view = $this->getViewName($slug);

        if (view()->exists($view)) {
            return view($view, compact('service'));
        }

        return abort(404);
    }

    private function getViewName($slug)
    {
        $viewMap = [
            'Information-Security' => 'pages.Information-Security',
            'Support-Services' => 'pages.Support-Services',
            'IP-PBX' => 'pages.IP-PBX',
            'Wireless-Solutions' => 'pages.Wireless-Solutions',
            'HPE-Solution' => 'pages.HPE-Solution',
            'Data-Center-Solutions' => 'pages.Data-Center-Solutions',
            'Cloud-Computing' => 'pages.Cloud-Computing',
            'Firewall-Protection' => 'pages.Firewall-Protection',
        ];

        return $viewMap[$slug] ?? 'services.show';
    }
}
