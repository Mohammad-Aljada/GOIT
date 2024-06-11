    <div class="d-flex justify-content-end p-1.5">
        <x-primary-button class="bg-success d-flex align-items-center gap-1" data-bs-toggle="modal"
            data-bs-target="#addServiceModal">
            <img src="/image/icone/add.svg" class="add" alt="add image">
            <span class="btn-text">Add</span>
        </x-primary-button>
        <x-services.form.formAddService></x-services.form.formAddService>
    </div>
    <div class="table-responsive text-wrap">
        <table class="table table-dark ">
            @if (isset($services) && count($services) > 0)
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Service Name</th>
                        <th class="text-center">Service Image</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                        <tr>
                            <td class="text-center">{{ $service->id }}</td>
                            <td class="text-center">{{ $service->services_name }}</td>
                            <td class="text-center d-flex justify-content-center">
                                @if ($service->image_url)
                                    <img src="{{ $service->image_url }}" class="image-thumbnail" alt="Meeting Image"
                                        width="100">
                                @else
                                    No Image
                                @endif
                            </td>
                            <td class="td-actions text-center">
                                <button type="button" rel="tooltip" class="btn btn-info btn-sm btn-icon"
                                    data-bs-toggle="modal" data-bs-target="#updateserviceModal"
                                    data-service-id="{{ $service->id }}" data-services_name="{{ $service->services_name }}">
                                    <img src="/image/icone/edit.svg" class="edit" alt="edit image" >
                                </button>
                                <x-services.form.formUpdateService :service="$service"></x-services.form.formUpdateService>
                                <button type="button" rel="tooltip" class="btn btn-danger btn-sm btn-icon"
                                    data-bs-toggle="modal" data-bs-target="#deleteServiceModal" >
                                    <img src="/image/icone/delete.svg" class="delete" alt="delete image">
                                </button>
                                <x-services.form.formDeleteService :service="$service"></x-services.form.formDeleteService>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            @else
                <p class="text-center text-danger font-weight-bold ">No services available.</p>
            @endif
        </table>
    </div>
    @vite(['resources/js/controller/updateservices.js'])
