document.addEventListener('DOMContentLoaded', function() {
    const editCompanyButtons = document.querySelectorAll('.btn-icon[data-bs-target="#updateCompanyModal"]');

    editCompanyButtons.forEach(button => {
        button.addEventListener('click', function() {
            const companyId = this.getAttribute('data-company-id');
            const companyName = this.getAttribute('data-company-name');
            const companyImage = this.getAttribute('data-company-image');
            const companyServices = JSON.parse(this.getAttribute('data-company-services'));

            document.getElementById('updateCompanyId').value = companyId;
            document.getElementById('updateCompanyName').value = companyName;
            const servicesSelect = document.getElementById('updateCompanyServices');
            for (let option of servicesSelect.options) {
                option.selected = companyServices.includes(parseInt(option.value));
            }

            const form = document.getElementById('updateCompanyForm');
            form.action = `/updatecompany/${companyId}`;
        });
    });

    $('#updateCompanyModal').on('hidden.bs.modal', function () {
        document.getElementById('updateCompanyForm').reset();
    });
});
