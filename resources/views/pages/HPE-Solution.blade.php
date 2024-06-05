@vite(['resources/css/main.css'])

@extends('layouts.mastring')

@section('title', 'GOIT')

@section('content')

    <section class="HPE">
        <div class="container">
            <div class="row">
                               <x-navbar></x-navbar>


                <div class="heroContent">
                    <div class="heroLeft">
                        <div class="heroleftinfo">
                            <h2>HPE Solutions</h2>
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
                    </div>
                    <div class="heroRight">
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
