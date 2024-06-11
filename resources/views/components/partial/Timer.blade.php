<div class="Timer ">
    <div class="d-flex justify-content-start gap-2 flex-wrap">
        <span>Date : {{ $meeting->date }}</span>
        <span>Time : {{ $meeting->time }}</span>
    </div>
    <div class="countdown" id="meetingCountdown" data-meeting-date="{{ $meeting->date }}"
        data-meeting-time="{{ $meeting->time }}">
        <div class="time-wrapper">
            <div class="time-content">
                <div class="time">
                    <span class="days">00</span>
                    <span class="metric">Days</span>
                </div>
            </div>
        </div>
        <div class="time-wrapper">
            <div class="time-content">
                <div class="time">
                    <span class="hours">00</span>
                    <span class="metric">Hours</span>
                </div>
            </div>
        </div>

        <div class="time-wrapper">
            <div class="time-content">
                <div class="time">
                    <span class="minutes">00</span>
                    <span class="metric">Minutes</span>
                </div>
            </div>
        </div>

        <div class="time-wrapper">
            <div class="time-content">
                <div class="time">
                    <span class="seconds">00</span>
                    <span class="metric">Seconds</span>
                </div>
            </div>
        </div>
        <span class="meeting-started text-white font-weight-bold text-center"></span>
    </div>
</div>
@vite(['resources/js/countdown.js'])
