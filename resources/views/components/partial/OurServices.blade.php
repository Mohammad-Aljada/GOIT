<?php $services = App\Models\Service::all(); ?>
<section class="services ">
    <img class="arrowDown" src="/image/icone/arrow-white-down.svg" alt="arrow down">
    <div class="container">
        <div class="row flex-column">
            <div class="services-section text-center">
                <div class="services-circle">
                    <div class="circle-inside">
                        <h2>OUR SERVICES</h2>
                    </div>
                </div>
                <div class="halfCircle"></div>
            </div>
            <div class="services-cards d-flex justify-content-center flex-wrap align-items-center gap-5 col-12">
                @if ($services->count() > 0)
                    @foreach ($services as $service)
                        <div class="col-md-2">
                            <div class="service-card">
                                <a href="{{ route('ourservices.show', ['slug' => $service->slug]) }}">
                                    <img src="{{ $service->image_url }}" alt="{{ $service->services_name }} image">
                                    <span class="card-title">{{ $service->services_name }}</span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <span class="text-center text-white font-weight-bold ">No services available.</span>
                @endif
            </div>
        </div>
    </div>
</section>
