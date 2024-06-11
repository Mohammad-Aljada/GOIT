 <!-- The Add Modal -->
 <div class="modal fade" id="addcompanyModal" tabindex="-1" aria-labelledby="addcompanyModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="addcompanyModalLabel">Add Company</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <!-- Add Form -->
                 <form id="addcompanyForm" action="{{ route('addcompany') }}" method="POST"
                     enctype="multipart/form-data">
                     @csrf
                     <div class="mb-3">
                         <label for="companies_name" class="form-label">Company Name:</label>
                         <input type="text" id="companies_name" name="companies_name" class="form-control" required>
                     </div>
                     <div class="mb-3">
                         <label for="companies_image" class="form-label">Company Image:</label>
                         <input type="file" id="companies_image" name="companies_image" class="form-control"
                             required>
                     </div>
                     <div class="mb-3">
                         <label for="services" class="form-label">Service Name:</label>
                         <select id="services" name="service_id[]" class="form-control" multiple>
                             @foreach ($services as $service)
                                 <option value="{{ $service->id }}">{{ $service->services_name }}</option>
                             @endforeach
                         </select>
                     </div>
                     <x-primary-button type="submit" class="bg-primary mt-2">Submit</x-primary-button>
                 </form>
             </div>
         </div>
     </div>
 </div>
