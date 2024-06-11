document.addEventListener("DOMContentLoaded", function () {
    // Get the meeting date and time from the data attributes
    const meetingElement = document.getElementById("meetingCountdown");
    const meetingDate = meetingElement.getAttribute("data-meeting-date");
    const meetingTime = meetingElement.getAttribute("data-meeting-time");
    const meetingdays = meetingElement.querySelector(".days");
    const meetinghours = meetingElement.querySelector(".hours");
    const meetingminutes = meetingElement.querySelector(".minutes");
    const meetingseconds = meetingElement.querySelector(".seconds");
    const meetingstarted = document.getElementById(".meeting-started");

    // Calculate the deadline date and time
    const deadline = new Date(meetingDate + " " + meetingTime).getTime();

    // Update the countdown every second
    const x = setInterval(function () {
        // Get the current date and time
        let now = new Date().getTime();

        // Calculate the remaining time
        let distance = deadline - now;

        // Calculate days, hours, minutes, and seconds
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor(
            (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the countdown
        meetingdays.innerHTML = days;
        meetinghours.innerHTML = hours;
        meetingminutes.innerHTML = minutes;
        meetingseconds.innerHTML = seconds;

        // If the countdown is over, display a message
        if (distance < 0) {
            clearInterval(x);
            meetingElement.innerHTML = "meeting is started";
        }
    }, 1000);
});
