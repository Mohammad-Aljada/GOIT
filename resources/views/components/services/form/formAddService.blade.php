<!-- The Add Service Modal -->
<div class="modal fade" id="addServiceModal" tabindex="-1" aria-labelledby="addServiceModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addServiceModalLabel">Add Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Add Service Form -->
                <form id="addServiceForm" enctype="multipart/form-data" action="{{ route('addservice') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="services_name" class="form-label">Service Name:</label>
                        <input type="text" id="services_name" name="services_name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="image_url" class="form-label">Image URL:</label>
                        <input type="file" id="image_url" name="image_url" class="form-control">
                    </div>
                    <x-primary-button type="submit" class="bg-primary mt-2">Add Service</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</div>
