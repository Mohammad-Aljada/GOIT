@vite(['resources/css/main.css'])
<?php $service = App\Models\Service::where('services_name', 'Information Security')->first(); ?>

@extends('layouts.mastring')


@section('content')

    <section class="infoSecurity">
        <div class="container">
            <div class="row">
                <x-layout.navbar></x-layout.navbar>
                <div class="heroContent">
                    <div class="heroLeft">
                        <div class="heroleftinfo">
                            <h2>{{ $service->services_name }}</h2>
                            <p>The value of information and data in the company is often
                                equal or greater than the enterprise capital, any threat
                                or risk to this information will have a negative and rapid
                                impact on the organization.
                            </p>
                        </div>
                        <div class="ContentDetails d-flex gap-5 flex-wrap">
                            <ul class="leftContentList d-flex flex-wrap gap-3 flex-column">
                                <li class="d-flex align-items-center gap-2"><img src="/image/icone/arrowRight.svg"
                                        alt="arrow right icone"> <span>Backup Solutions</span></li>
                                <li class="d-flex align-items-center gap-2"><img src="/image/icone/arrowRight.svg"
                                        alt="arrow right icone"> <span>Antivirus</span></li>
                                <li class="d-flex align-items-center gap-2"><img src="/image/icone/arrowRight.svg"
                                        alt="arrow right icone"> <span>Firewalls</span></li>
                            </ul>
                            <ul class="rightContentList d-flex flex-wrap gap-3 flex-column">
                                <li class="d-flex align-items-center gap-2"><img src="/image/icone/arrowRight.svg"
                                        alt="arrow right icone"> <span>DR (Disaster Recovery)</span></li>
                                <li class="d-flex align-items-center gap-2"><img src="/image/icone/arrowRight.svg"
                                        alt="arrow right icone"> <span>DLP (Data Loss Prevention)</span></li>
                            </ul>
                        </div>
                        <x-company.content.companyImages :service="$service"></x-company.content.companyImages>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
