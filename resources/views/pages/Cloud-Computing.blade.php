@vite(['resources/css/main.css'])

@extends('layouts.mastring')

@section('title', 'GOIT')

@section('content')

    <section class="cloud">
        <div class="container">
            <div class="row">
                <x-navbar></x-navbar>
                <div class="heroContent">
                    <div class="heroLeft">
                        <div class="heroleftinfo">
                            <h2>Cloud Computing</h2>
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
                        <div class="ContentCompany d-flex flex-wrap align-items-center justify-content-around">
                            <img src="/image/company/aws.svg" alt="Aws company image">
                            <img src="/image/company/Google_Cloud.svg" alt="Google Cloud Company image">
                            <img src="/image/company/Azure.svg" alt="Azure Company image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@stop
