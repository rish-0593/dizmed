<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? '' }}</title>

    <link href="{{ asset('admin/css/app.css') }}" rel="stylesheet" />
    <script src="{{ asset('admin/js/app.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('admin/css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/pretty-checkbox/pretty-checkbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2/select2.min.css') }}">

    {{ $styles ?? '' }}
</head>

<body x-data="mainState"
    :class="{
        ['dark dark-sidebar theme-black']: isDarkMode,
        ['light light-sidebar theme-white']: !isDarkMode
    }">
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <!-- Navbar -->
            <x-admin.navbar />

            <!-- Sidebar -->
            <x-admin.sidebar />

            <!-- Main Content -->
            {{ $slot }}

            <!-- footer -->
            <x-admin.footer />
        </div>
    </div>

    {{ $modals ?? '' }}

    <script src="{{ asset('admin/js/app.min.js') }}"></script>
    <script src="{{ asset('admin/js/scripts.js') }}"></script>
    <script src="{{ asset('plugins/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-repeater/jquery.repeater.js') }}"></script>
    <script src="{{ asset('plugins/jquery-validation/jquery.validate.min.js') }}"></script>


    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {
            $(document).on('change', '[checkbox-all]', function() {
                $('#assign_to').val('').trigger('change');

                let checked = this.checked;

                $('input[checkbox-single]').each(function() {
                    this.checked = checked;
                });
            });

            $(document).on('change', 'input[checkbox-single]', function() {
                $('#assign_to').val('').trigger('change');

                let checked = $('input[checkbox-single]:checked').length == $('input[checkbox-single]')
                    .length;

                $('[checkbox-all]').prop('checked', checked);
            });
        });
    </script>

    {{ $scripts ?? '' }}
</body>

</html>
