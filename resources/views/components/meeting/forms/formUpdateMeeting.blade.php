<!-- The Update Modal -->
<div class="modal fade" id="updateMeetingModal" tabindex="-1" aria-labelledby="updateMeetingModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title " id="updateMeetingModalLabel" style="color: black;">Update Meeting</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="color: black; text-align: left;">
                <!-- Update Form -->
                <form method="POST" action="" id="updateMeetingForm">
                    @csrf
                    @method('PUT')
                    <!-- Add your form fields here -->
                    <input type="hidden" id="updateMeetingId" name="id" value="{{$meeting->id}}">
                    <div class="mb-3">
                        <label for="updateTitle" class="form-label">Title:</label>
                        <input type="text" id="updateTitle" name="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="updateDescription" class="form-label">Description:</label>
                        <input type="text" id="updateDescription" name="description" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="updateDate" class="form-label">Date:</label>
                        <input type="date" id="updateDate" name="date" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="updateTime" class="form-label">Time:</label>
                        <input type="time" id="updateTime" name="time" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="updateLocation" class="form-label">Location:</label>
                        <input type="text" id="updateLocation" name="location" class="form-control">
                    </div>
                    <x-primary-button type="submit" class="bg-primary mt-2">Update</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</div>
