<x-admin-layout>
    <x-slot name="title">{{ __('Dashboard') }}</x-slot>

    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                @can('admin')
                                    <div class="row text-center my-4">
                                        <div class="col-4">
                                            <h5 class="font-20 m-b-0">{{ $today ?? 0 }}</h5>
                                            <p class="text-muted font-18 m-b-0">(Today)</p>
                                        </div>
                                        <div class="col-4">
                                            <h5 class="font-20 m-b-0">{{ $month ?? 0 }}</h5>
                                            <p class="text-muted font-18 m-b-0">(Month)</p>
                                        </div>
                                        <div class="col-4">
                                            <h5 class="font-20 m-b-0">{{ $year ?? 0 }}</h5>
                                            <p class="text-muted font-18 m-b-0">(Year)</p>
                                        </div>
                                    </div>

                                    <div id="chart-1"></div>
                                @endcan
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <x-slot name="scripts">
        @includeIf('admin.dashboard.scripts')
    </x-slot>
</x-admin-layout>
