<x-admin-layout>
    <x-slot name="title">{{ __('Attributes') }}</x-slot>

    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ __('Attributes') }}</h4>
                            <div class="card-header-form">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-primary" data-modal-target="#addOrUpdate">Add</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @includeIf("admin.attribute.filters")

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
        @includeIf('admin.attribute.modals', ['add_or_update_url' => route('admin.attribute.add.or.update')])
    </x-slot>

    <x-slot name="scripts">
        <script>
            const datatable_url = `{{ route('admin.attribute.index') }}`;
            const update_status_url = `{{ route('admin.attribute.update.status') }}`;
            const trash_url = `{{ route('admin.attribute.trash') }}`;
        </script>

        @includeIf('admin.attribute.datatable')
        @includeIf('admin.attribute.scripts')
    </x-slot>
</x-admin-layout>
