<?php $companies = App\Models\Company::all(); ?>

<div class="ContentCompany d-flex flex-wrap align-items-center justify-content-around">
    @if(count($companies) > 0)
    @foreach ($service->companies as $company)
        <img src="{{ $company->companies_image }}" alt="{{ $company->companies_name }} image">
    @endforeach
    @endif
</div>
