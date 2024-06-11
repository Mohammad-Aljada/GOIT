@vite(['resources/css/main.css'])
<?php $service = App\Models\Service::where('services_name', 'Support Services')->first(); ?>

@extends('layouts.mastring')


@section('content')

    <section class="suport">
        <div class="container">
            <div class="row">
                               <x-layout.navbar></x-layout.navbar>

                <div class="heroContent">
                    <div class="heroLeft">
                        <div class="heroleftinfo">
                            <h2>{{ $service->services_name }}</h2>
                            <div class="contentText d-flex flex-column gap-1">
                                <p>Help Desk Support</p>
                                <span>Maintenance contracts</span>
                            </div>
                        </div>
                        <div class="ContentDetails d-flex gap-3 flex-wrap">
                            <ul class="leftContentList d-flex flex-wrap gap-3 flex-column">
                                <li class="d-flex align-items-center gap-2"><img src="/image/icone/arrowRight.svg"
                                        alt="arrow right icone"> <span>Expert IT Team</span></li>
                                <li class="d-flex align-items-center gap-2"><img src="/image/icone/arrowRight.svg"
                                        alt="arrow right icone"> <span>Maintenance Plans</span></li>
                                <li class="d-flex align-items-center gap-2"><img src="/image/icone/arrowRight.svg"
                                        alt="arrow right icone"> <span>Emergency and</br>
                                        Preventive Maintenance</span></li>
                            </ul>
                            <ul class="rightContentList d-flex flex-wrap gap-3 flex-column">
                                <li class="d-flex align-items-center gap-2"><img src="/image/icone/arrowRight.svg"
                                        alt="arrow right icone"> <span>Consulting & Training</span></li>
                                <li class="d-flex align-items-center gap-2"><img src="/image/icone/arrowRight.svg"
                                        alt="arrow right icone"> <span>New Idea, New Solution’s</span></li>
                                <li class="d-flex align-items-center gap-2"><img src="/image/icone/arrowRight.svg"
                                        alt="arrow right icone"> <span>Periodic and</br>
                                        Expected Maintenance</span></li>
                            </ul>
                        </div>
                        <x-company.content.companyImages :service="$service"></x-company.content.companyImages>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
