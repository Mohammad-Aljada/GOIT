 <!-- The delete Modal -->
 <div class="modal fade" id="deleteMeetingModal" tabindex="-1"
 aria-labelledby="deleteMeetingModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title " id="deleteMeetingModalLabel" style="color: black;">Delete Meeting</h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal"
                 aria-label="Close"></button>
         </div>
         <div class="modal-body">
             <!-- delete Form -->
             <form id="deleteMeetingForm"
                 action="{{ route('deletemeeting', ['id' => $meeting->id]) }}" method="POST">
                 @csrf
                 @method('DELETE')
                 <input type="hidden" id="deleteMeetingId" name="id" readonly>
                 <button type="submit" class="btn btn-danger">Delete</button>
             </form>

         </div>
     </div>
 </div>
</div>
