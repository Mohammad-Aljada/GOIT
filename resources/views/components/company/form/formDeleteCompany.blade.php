<!-- The delete Modal -->
<div class="modal fade" id="deleteCompanyModal" tabindex="-1" aria-labelledby="deleteCompanyModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title " id="deleteCompanyModalLabel" style="color: black;">Delete Company</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- delete Form -->
                <form id="deleteCompanyForm" action="{{ route('deletecompany', ['id' => $company->id]) }}"
                    method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" id="deleteCompanyId" name="id">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
