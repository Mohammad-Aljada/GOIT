@extends('layouts.mastring')

@section('content')
<?php $meeting = App\Models\Meetings::first(); ?>
<?php $meetings = App\Models\Meetings::all(); ?>
    <main >
        <section class="Hero">
            <div class="container">
                <div class="row">
                    <x-layout.navbar></x-layout.navbar>
                    <div class="heroContent">
                        <div class="heroLeft">
                            <div class="heroleftinfo">
                                <h2>MEETINGS AND EVENTS</h2>
                                @if ($meeting)
                                <span class="text-white fs-2 font-weight-800">Title : {{ $meeting->title }}</span>
                                <span>Description : {{ $meeting->description }}</span>
                                <span>Location : {{ $meeting->location }}</span>
                                @else
                                <span class="text-white font-weight-bold ">No meetings available.</span>
                                @endif
                            </div>
                            <x-partial.Timer :meeting="$meeting"></x-partial.Timer>
                            <div class="links">
                            <a class="headerLink" href="mailto:info@goit.ps">BUY TICIKETS</a>
                            <a data-bs-toggle="modal" data-bs-target="#allMeetingsModal"   class="headerLink" href="{{ route('meetings') }}">All Meetings</a>
                            <x-modal.AllMeetingsModal :meetings="$meetings"></x-modal.AllMeetingsModal>
                            </div>
                        </div>
                        <div class="heroRight">
                            <img src="/image/icone/arrow.svg" alt="arrow image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <x-partial.ourServices></x-partial.ourServices>
    </main>
@stop
