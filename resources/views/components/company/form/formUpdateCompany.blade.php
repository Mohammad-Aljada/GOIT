 <!-- The Update Modal -->
 <div class="modal fade" id="updateCompanyModal" tabindex="-1" aria-labelledby="updateCompanyModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="updateCompanyModalLabel" style="color: black;">Update Company</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body" style="color:black; text-align:left;">
                 <!-- Update Form -->
                 <form method="POST" enctype="multipart/form-data" action="" id="updateCompanyForm">
                     @csrf
                     @method('PUT')
                     <!-- Add your form fields here -->
                     <input type="hidden" id="updateCompanyId" name="id" value={{ $company->id }}>
                     <div class="mb-3">
                         <label for="updateCompanyName" class="form-label">Company Name:</label>
                         <input type="text" id="updateCompanyName" name="companies_name" class="form-control">
                     </div>

                     <div class="mb-3">
                         <label for="companies_image" class="form-label">Company Image:</label>
                         <input type="file" id="updateCompanyImage" name="companies_image" class="form-control">
                     </div>
                     <div class="mb-3">
                         <label for="updateCompanyServices" class="form-label">Service Name:</label>
                         <select id="updateCompanyServices" name="service_id[]" class="form-control" multiple>
                             @foreach ($services as $service)
                                 <option value="{{ $service->id }}">{{ $service->services_name }}</option>
                             @endforeach
                         </select>
                     </div>
                     <x-primary-button type="submit" class="bg-primary mt-2">Update And Save</x-primary-button>
                 </form>
             </div>
         </div>
     </div>
 </div>
