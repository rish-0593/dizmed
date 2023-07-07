<script>
    $(document).ready(function() {
        let datatable = _initDatatable();

        $(document).on('click', '[data-trash]', function(){
            let __id = $(this).attr('data-trash');

            $.ajax({
                url: trash_url,
                method: "POST",
                data: {
                    id: __id,
                },
            })
            .done(function(response) {
                datatable.ajax.reload();
            })
            .fail(function(error) {
                console.log( "error" );
            });
        });

        $(document).on('click', '[data-status]', function(){
            let __id = $(this).data('modal-id');

            $.ajax({
                url: update_status_url,
                method: "POST",
                data: {
                    id: __id,
                },
            })
            .done(function(response) {
                datatable.ajax.reload();
            })
            .fail(function(error) {
                console.log( "error" );
            });
        });
    });
</script>
