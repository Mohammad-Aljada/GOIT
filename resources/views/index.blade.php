@extends('layouts.mastring')

@section('title', 'GOIT')

@section('content')
    <main >
        <section class="Hero">
            <div class="container">
                <div class="row">
                    <x-navbar></x-navbar>
                    <div class="heroContent">
                        <div class="heroLeft">
                            <div class="heroleftinfo">
                                <h2>STAY CONNECTED</h2>
                                <p>World’s Largest Online Metaverse Conference </br>World’s Largest Online Metaverse
                                    Conference
                                </p>
                            </div>
                            <x-Timer></x-Timer>
                            <a class="headerLink" href="mailto:info@goit.ps">BUY TICIKETS</a>
                        </div>
                        <div class="heroRight">
                            <img src="/image/icone/arrow.svg" alt="arrow image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <x-ourServices></x-ourServices>
    </main>
@stop
