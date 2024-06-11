@vite(['resources/css/main.css'])
<?php $service = App\Models\Service::where('services_name', 'IP PBX Solutions')->first(); ?>

@extends('layouts.mastring')


@section('content')
    <section class="IPPBX">
        <div class="container">
            <div class="row">
                <x-layout.navbar></x-layout.navbar>

                <div class="heroContent">
                    <div class="heroLeft">
                        <div class="heroleftinfo">
                            <h2>{{ $service->services_name }}</h2>
                            <p>Making meeting simpler. Easy to install using Ethernet
                                cable, easy to manage, modular and scalable, call
                                recording, call control, (IVR), CDR Reports, call features
                                (Forward, group, park, pickup, queue, and waiting), VoIP.
                            </p>
                        </div>
                        <div class="ContentDetails d-flex gap-5 flex-wrap">
                            <ul class="leftContentList d-flex flex-wrap gap-3 flex-column">
                                <li class="d-flex align-items-center gap-2"><img src="/image/icone/arrowRight.svg"
                                        alt="arrow right icone"> <span>IP PBX</span></li>
                                <li class="d-flex align-items-center gap-2"><img src="/image/icone/arrowRight.svg"
                                        alt="arrow right icone"> <span>IP Phone</span></li>
                                <li class="d-flex align-items-center gap-2"><img src="/image/icone/arrowRight.svg"
                                        alt="arrow right icone"> <span>VoIP Gateways</span></li>
                            </ul>
                            <ul class="rightContentList d-flex flex-wrap gap-3 flex-column">
                                <li class="d-flex align-items-center gap-2"><img src="/image/icone/arrowRight.svg"
                                        alt="arrow right icone"> <span>Conference Solutions</span></li>
                                <li class="d-flex align-items-center gap-2"><img src="/image/icone/arrowRight.svg"
                                        alt="arrow right icone"> <span>Paging Solutions</span></li>
                                <li class="d-flex align-items-center gap-2"><img src="/image/icone/arrowRight.svg"
                                        alt="arrow right icone"> <span>Mobile Application</span></li>
                            </ul>
                        </div>
                        <x-company.content.companyImages :service="$service"></x-company.content.companyImages>
                    </div>
                    <div class="heroRight">
                        <img class="imgRight" src="/image/pagesImage/IPPBX.png" alt="IP PBX Solutions image">
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
