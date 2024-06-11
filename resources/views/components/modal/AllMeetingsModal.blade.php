<?php $meetings = App\Models\Meetings::all(); ?>
<div class="modal fade" id="allMeetingsModal" tabindex="-1" aria-labelledby="allMeetingsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="allMeetingsModalLabel">All Meetings</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Meetings will be dynamically added here -->
                @if ($meetings->count() > 0)
                    <div class="d-flex flex-column gap-2 justify-content-start">
                        @foreach ($meetings as $meeting)
                            <span class=" text-black font-weight-bold fs-6 ">Meeting #:{{ count($meetings) }}</span>
                            <h2 class=" text-black font-weight-bold fs-3 ">Title : {{ $meeting->title }}</h2>
                            <p class=" text-black font-weight-bold fs-5 " style="font-weight: 800">Description :
                                {{ $meeting->description }}</p>
                            <span class=" text-black font-weight-bold ">Location : {{ $meeting->location }}</span>
                            <span class=" text-black font-weight-bold ">Date : {{ $meeting->date }}</span>
                            <span class=" text-black font-weight-bold ">Time : {{ $meeting->time }}</span>
                            <hr>
                        @endforeach
                    </div>
                @else
                    <p class="text-center text-black font-weight-bold ">No meetings available.</p>
                @endif
            </div>
        </div>
    </div>
</div>
