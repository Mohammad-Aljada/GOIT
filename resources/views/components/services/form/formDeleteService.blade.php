 <!-- The delete Modal -->
 <div class="modal fade" id="deleteServiceModal" tabindex="-1" aria-labelledby="deleteServiceModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="deleteServiceModalLabel" style="color: black;">Delete Service</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <!-- delete Form -->
                 <form id="deleteServiceForm" action="{{ route('deleteservice', ['id' => $service->id]) }}"
                     method="POST">
                     @csrf
                     @method('DELETE')
                     <input type="hidden" id="deleteServiceId" name="id">
                     <button type="submit" class="btn btn-danger">Delete</button>
                 </form>
             </div>
         </div>
     </div>
 </div>
