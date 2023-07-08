<x-admin-layout>
    <x-slot name="title">{{ __('Products') }}</x-slot>

    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ __('Products') }}</h4>
                            <div class="card-header-form">
                                <div class="input-group-btn">
                                    <a href="{{ route('admin.product.add') }}" class="btn btn-primary"
                                        target="_blank">Add</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @includeIf('admin.product.filters')

                            <div class="table-responsive">
                                <table id="datatable" class="table table-striped display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>{{ __('Name') }}</th>
                                            <th>{{ __('Status') }}</th>
                                            <th>{{ __('Action') }}</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <x-slot name="modals">
        @includeIf('admin.product.modals')
    </x-slot>

    <x-slot name="scripts">
        <script>
            const datatable_url = `{{ route('admin.product.index') }}`;
            const update_status_url = `{{ route('admin.product.update.status') }}`;
            const trash_url = `{{ route('admin.product.trash') }}`;
        </script>

        @includeIf('admin.product.datatable')
        @includeIf('admin.product.scripts')
    </x-slot>
</x-admin-layout>
