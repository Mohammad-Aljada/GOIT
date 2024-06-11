
document.addEventListener('DOMContentLoaded', function() {
    // Get all edit buttons for meetings
    const editMeetingButtons = document.querySelectorAll('.btn-icon[data-bs-target="#updateMeetingModal"]');

    // Add click event listener to each edit button
    editMeetingButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Get meeting details from data attributes
            const meetingId = this.getAttribute('data-meeting-id');
            const meetingTitle = this.getAttribute('data-meeting-title');
            const meetingDescription = this.getAttribute('data-meeting-description');
            const meetingDate = this.getAttribute('data-meeting-date');
            const meetingTime = this.getAttribute('data-meeting-time');
            const meetingLocation = this.getAttribute('data-meeting-location');

            // Populate the form fields inside the modal
            document.getElementById('updateMeetingId').value = meetingId;
            document.getElementById('updateTitle').value = meetingTitle;
            document.getElementById('updateDescription').value = meetingDescription;
            document.getElementById('updateDate').value = meetingDate;
            document.getElementById('updateTime').value = meetingTime;
            document.getElementById('updateLocation').value = meetingLocation;

            // Update the form action URL dynamically
            const form = document.getElementById('updateMeetingForm');
            form.action = `/updatemeeting/${meetingId}`;
        });
    });

    // Clear the modal form fields when the modal is closed
    $('#updateMeetingModal').on('hidden.bs.modal', function () {
        document.getElementById('updateMeetingForm').reset();
    });
});
