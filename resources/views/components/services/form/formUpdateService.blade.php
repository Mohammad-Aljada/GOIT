<!-- The Update Service Modal -->
<div class="modal fade" id="updateserviceModal" tabindex="-1" aria-labelledby="updateServiceModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateServiceModalLabel" style="color:black;">Update Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="color:black; text-align:left;">
                <!-- Update Form -->
                <form method="POST" enctype="multipart/form-data" action="" id="updateServiceForm">
                    @csrf
                    @method('PUT')
                    <!-- Add your form fields here -->
                    <input type="hidden" id="updateServiceId" name="id" value={{$service->id}}>
                    <div class="mb-3">
                        <label for="updateServiceName" class="form-label">Service Name:</label>
                        <input type="text" id="updateServiceName" name="services_name" class="form-control"  >
                    </div>
                    <div class="mb-3">
                        <label for="updateServiceImage" class="form-label">Service Image:</label>
                        <input type="file" id="updateServiceImage" name="image_url" class="form-control" >
                    </div>
                    <x-primary-button type="submit" class="bg-primary mt-2">Update</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</div>
