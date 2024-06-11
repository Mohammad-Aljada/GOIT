<?php $services = App\Models\Service::all(); ?>
<div class="d-flex justify-content-end p-1.5">
    <x-primary-button class="bg-success d-flex align-items-center gap-1" data-bs-toggle="modal"
        data-bs-target="#addcompanyModal">
        <img src="/image/icone/add.svg" class="add" alt="add image">
        <span class="btn-text">Add</span>
    </x-primary-button>
    <x-company.form.formAddCompany :services="$services"></x-company.form.formAddCompany>
</div>
<div class="table-responsive text-wrap">
    <table class="table table-dark ">
        @if (isset($companies) && count($companies) > 0)
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Companies Name</th>
                    <th class="text-center">Companies Image</th>
                    <th class="text-center">Service Name</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $company)
                    <tr>
                        <td class="text-center">{{ $company->id }}</td>
                        <td class="text-center">{{ $company->companies_name }}</td>
                        <td class="text-center d-flex justify-content-center">
                            @if ($company->companies_image)
                                <img src="{{ $company->companies_image }}" class="image-thumbnail" alt="Meeting Image"
                                    width="100">
                            @else
                                No Image
                            @endif
                        </td>
                        <td class="text-center">
                            @foreach ($company->services as $service)
                                {{ $service->services_name }}
                                @if (!$loop->last)
                                    ,
                                @endif
                            @endforeach
                        </td>
                        <td class="td-actions text-center">
                            <button type="button" rel="tooltip" class="btn btn-info btn-sm btn-icon"
                                data-bs-toggle="modal" data-bs-target="#updateCompanyModal"
                                data-company-id="{{ $company->id }}" data-company-name="{{ $company->companies_name }}"
                                data-company-image="{{ $company->companies_image }}"
                                data-company-services="{{ $company->services->pluck('id') }}">

                                <img src="/image/icone/edit.svg" class="edit" alt="edit image">
                            </button>
                            <x-company.form.formUpdateCompany :services="$services" :company="$company"></x-company.form.formUpdateCompany>
                            <button type="button" rel="tooltip" class="btn btn-danger btn-sm btn-icon"
                                data-bs-toggle="modal" data-bs-target="#deleteCompanyModal">
                                <img src="/image/icone/delete.svg" class="delete" alt="delete image">
                            </button>
                            <x-company.form.formDeleteCompany :company="$company"></x-company.form.formDeleteCompany>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        @else
            <p class="text-center text-danger font-weight-bold ">No companies available.</p>
        @endif
    </table>
</div>
@vite(['resources/js/controller/updatecompanies.js'])
