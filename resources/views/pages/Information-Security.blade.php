@vite(['resources/css/main.css'])

@extends('layouts.mastring')

@section('title', 'GOIT')

@section('content')

    <section class="infoSecurity">
        <div class="container">
            <div class="row">
                               <x-navbar></x-navbar>

                <div class="heroContent">
                    <div class="heroLeft">
                        <div class="heroleftinfo">
                            <h2>Information Security</h2>
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
                        <div class="ContentCompany d-flex flex-wrap align-items-center justify-content-around">
                            <img src="/image/company/Acronis.svg" alt="Acronis company image">
                            <img src="/image/company/Fortinet.svg" alt="Fortinet Company image">
                            <img src="/image/company/Sophos.svg" alt="Sophos Company image">
                            <img src="/image/company/qnap.svg" alt="Qnap Company image">
                            <img src="/image/company/kaspersky.svg" alt="Kaspersky Company image">
                            <img src="/image/company/veeam.svg" alt="Veeam Company image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
