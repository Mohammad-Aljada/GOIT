
 <!-- The Add Modal -->
 <div class="modal fade" id="addMeetingModal" tabindex="-1" aria-labelledby="addMeetingModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addMeetingModalLabel">Add Meeting</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Add Form -->
                <form action="{{ route('addmeeting') }}"  method="POST">
                    @csrf
                    <!-- Add your form fields here -->
                    <div class="mb-3">
                        <label for="title" class="form-label">Title:</label>
                        <input type="text" id="title" name="title" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description:</label>
                        <input type="text" id="description" name="description" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date:</label>
                        <input type="date" id="date" name="date" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label for="time" class="form-label">Time:</label>
                        <input type="time" id="time" name="time" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="location" class="form-label">Location:</label>
                        <input type="text" id="location" name="location" class="form-control" >
                    </div>
                    <x-primary-button type="submit" class="bg-primary mt-2">Add Meeting</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</div>



