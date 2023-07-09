<x-admin-layout>
    <x-slot name="title">{{ __('Add Product') }}</x-slot>
    <x-slot name="styles">
        <style>
            em {
                position: absolute;
                z-index: 9;
                font-family: sans-serif;
                font-weight: 100;
                font-size: 14px !important;
                color: #ff6363;
                /* left: 20px; */
            }

            /* .select em {
                margin-top: 68px;
            }

            .filepond em {
                margin-top: 77px;
                left: 6px;
            } */
        </style>
    </x-slot>

    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ __('Add Product') }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-md-center">
                                <div class="col-8">
                                    <form id="form-module" action="{{ route('admin.product.add.or.update') }}"
                                        method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label>Title :</label>
                                            <input type="text" class="form-control" name="title" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Description :</label>
                                            <textarea class="form-control" name="description" rows="10"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Brand :</label>
                                            <select class="form-control form-control-lg" name="brand_id" required>
                                                @foreach ($brands as $brand)
                                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Category :</label>
                                            <select class="form-control form-control-lg" name="category_id" required>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group select">
                                            <label>Tags :</label>
                                            <select class="form-control select2" multiple="" name="tag_id[]"
                                                required>
                                                @foreach ($tags as $tag)
                                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Attributes :</label>
                                            <div class="repeater">
                                                <div data-repeater-list="attribute">
                                                    <div data-repeater-item>
                                                        <div class="row justify-content-md-center pt-1 mb-4">
                                                            <div class="col">
                                                                <select name="attribute_type" class="form-control"
                                                                    required>
                                                                    <option value="">Select</option>
                                                                    @foreach ($attributes as $attribute)
                                                                        <option value="{{ $attribute->id }}">
                                                                            {{ $attribute->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col">
                                                                <input type="text" name="attribute_value"
                                                                    class="form-control" required />
                                                            </div>

                                                            <div class="col-2">
                                                                <button type="button" data-repeater-delete
                                                                    class="btn btn-danger">Delete</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" data-repeater-create
                                                    class="btn btn-primary col-2">New Attribute</button>
                                            </div>
                                        </div>

                                        <div class="form-group filepond mb-5">
                                            <label>Images :</label>
                                            <input type="file" name="product_image[]" multiple
                                                data-max-file-size="1MB" required>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success col-2">Add Product</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <x-slot name="scripts">
        @includeIf('admin.product.partials.scripts')
        @includeIf('filepond.script')
    </x-slot>
</x-admin-layout>
