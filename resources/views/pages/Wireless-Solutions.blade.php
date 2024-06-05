@vite(['resources/css/main.css'])

@extends('layouts.mastring')

@section('title', 'GOIT')

@section('content')

    <section class="wireless">
        <div class="container">
            <div class="row">
                               <x-navbar></x-navbar>


                <div class="heroContent">
                    <div class="heroLeft">
                        <div class="heroleftinfo">
                            <h2>Wireless Solutions</h2>
                            <p>Planning & design the WLAN network and propose
                                the most efficient devices with installation as organization
                                requirements (User's, Quota, Filtering, SSID ...etc),
                                in addition to supplying all the hardware.
                            </p>
                        </div>
                        <div class="ContentDetails d-flex gap-5 flex-wrap">
                            <ul class="leftContentList d-flex flex-wrap gap-3 flex-column">
                                <li class="d-flex align-items-center gap-2"><img src="/image/icone/arrowRight.svg"
                                        alt="arrow right icone"> <span>Indoor Access Point</span></li>
                                <li class="d-flex align-items-center gap-2"><img src="/image/icone/arrowRight.svg"
                                        alt="arrow right icone"> <span>Outdoor Access Point</span></li>
                                <li class="d-flex align-items-center gap-2"><img src="/image/icone/arrowRight.svg"
                                        alt="arrow right icone"> <span>Hardware Controller</span></li>
                                <li class="d-flex align-items-center gap-2"><img src="/image/icone/arrowRight.svg"
                                        alt="arrow right icone"> <span>Software Controller</span></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@stop
