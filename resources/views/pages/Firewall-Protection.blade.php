@vite(['resources/css/main.css'])

@extends('layouts.mastring')

@section('title', 'GOIT')

@section('content')

    <section class="firewall">
        <div class="container">
            <div class="row">
                               <x-navbar></x-navbar>


                <div class="heroContent">
                    <div class="heroLeft">
                        <div class="heroleftinfo">
                            <h2>Firewall Protection</h2>
                          <p>Firewall is acting as the guard against malicious traffic,
                            data loss, and unauthorized access, we provide main
                            brands (Fortinet, Sophos). The world's best visibility,
                            protection, and response. Next-generation firewall.</p>
                        </div>
                        <div class="ContentDetails d-flex gap-2 flex-wrap">
                            <ul class="leftContentList d-flex flex-wrap gap-3 flex-column">
                                <li class="d-flex align-items-center gap-2"><img src="/image/icone/arrowRight.svg"
                                        alt="arrow right icone"> <span>Network & Traffic Control</span></li>
                                <li class="d-flex align-items-center gap-2"><img src="/image/icone/arrowRight.svg"
                                        alt="arrow right icone"> <span>Unified Threat Management</span></li>
                                <li class="d-flex align-items-center gap-2"><img src="/image/icone/arrowRight.svg"
                                        alt="arrow right icone"> <span>Wi-Fi Control and</br>
                                            Manage SSID</span></li>
                            </ul>
                            <ul class="rightContentList d-flex flex-wrap gap-3 flex-column">
                                <li class="d-flex align-items-center gap-2"><img src="/image/icone/arrowRight.svg"
                                        alt="arrow right icone"> <span>VPN Tunnels</span></li>
                                <li class="d-flex align-items-center gap-2"><img src="/image/icone/arrowRight.svg"
                                        alt="arrow right icone"> <span>Endpoint Security</span></li>
                                <li class="d-flex align-items-center gap-2"><img src="/image/icone/arrowRight.svg"
                                        alt="arrow right icone"> <span>Internet Access & Filteringt </span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="heroRight">
                        <img class="imgRight" src="/image/pagesImage/Firewall.png" alt="Firewall Protection image">
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
