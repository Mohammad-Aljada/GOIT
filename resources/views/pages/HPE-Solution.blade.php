@vite(['resources/css/main.css'])
<?php $service = App\Models\Service::where('services_name', 'HPE Solutions')->first(); ?>

@extends('layouts.mastring')


@section('content')

    <section class="HPE">
        <div class="container">
            <div class="row">
                <x-layout.navbar></x-layout.navbar>
                <div class="heroContent">
                    <div class="heroLeft">
                        <div class="heroleftinfo">
                            <h2>{{ $service->services_name }}</h2>
                            <p>We are in the acceleration business technology that fuels
                                transformation solutions you need to succeed innovating
                                for today and tomorrow it solutions that drive the digital
                                age. Solutions that drive the digital age.
                            </p>
                        </div>
                        <div class="ContentDetails d-flex gap-5 flex-wrap">
                            <ul class="leftContentList d-flex flex-wrap gap-3 flex-column">
                                <li class="d-flex align-items-center gap-2"><img src="/image/icone/arrowRight.svg"
                                        alt="arrow right icone"> <span>Servers</span></li>
                                <li class="d-flex align-items-center gap-2"><img src="/image/icone/arrowRight.svg"
                                        alt="arrow right icone"> <span>Storage</span></li>
                                <li class="d-flex align-items-center gap-2"><img src="/image/icone/arrowRight.svg"
                                        alt="arrow right icone"> <span>Networking</span></li>
                            </ul>
                        </div>
                        <x-company.content.companyImages :service="$service"></x-company.content.companyImages>
                    </div>
                    <div class="heroRight">
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
