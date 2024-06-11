document.addEventListener('DOMContentLoaded', function() {
    // Get all edit buttons
    const editButtons = document.querySelectorAll('.btn-icon[data-bs-target="#updateserviceModal"]');

    // Add click event listener to each edit button
    editButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Get service details from data attributes
            const serviceId = this.getAttribute('data-service-id');
            const serviceName = this.getAttribute('data-service-name');

            // Populate the form fields inside the modal
            document.getElementById('updateServiceId').value = serviceId;
            document.getElementById('updateServiceName').value = serviceName;

            // Update the form action URL dynamically
            const form = document.getElementById('updateServiceForm');
            form.action = `/updateservice/${serviceId}`;
        });
    });
});
