@vite(['resources/css/main.css'])
<?php $service = App\Models\Service::where('services_name', 'Cloud Computing')->first(); ?>

@extends('layouts.mastring')


@section('content')

    <section class="cloud">
        <div class="container">
            <div class="row">
                <x-layout.navbar></x-layout.navbar>
                <div class="heroContent">
                    <div class="heroLeft">
                        <div class="heroleftinfo">
                            <h2>{{ $service->services_name }}</h2>
                        </div>
                        <div class="ContentDetails d-flex gap-5 flex-wrap">
                            <ul class="leftContentList d-flex flex-wrap gap-3 flex-column">
                                <li class="d-flex align-items-center gap-2"><img src="/image/icone/arrowRight.svg"
                                        alt="arrow right icone"> <span>Backup on Cloud</span></li>
                                <li class="d-flex align-items-center gap-2"><img src="/image/icone/arrowRight.svg"
                                        alt="arrow right icone"> <span>Storage On Cloud</span></li>
                                <li class="d-flex align-items-center gap-2"><img src="/image/icone/arrowRight.svg"
                                        alt="arrow right icone"> <span>Exchange - Office 365</span></li>
                                <li class="d-flex align-items-center gap-2"><img src="/image/icone/arrowRight.svg"
                                        alt="arrow right icone"> <span>VDI & RDP (Remote Desktop)</span></li>
                            </ul>
                        </div>
                        <x-company.content.companyImages :service="$service"></x-company.content.companyImages>
                    </div>
                </div>
            </div>
        </div>

    </section>
@stop
