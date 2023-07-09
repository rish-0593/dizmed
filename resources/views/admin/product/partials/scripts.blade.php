<script>
    $(document).ready(function() {
        var form = $('#form-module');

        $('.repeater').repeater();
        initializeFileContent();

        form.validate({
            errorElement: 'em',
            errorClass: 'em-error',
            rules: {
                title: {
                    required: true,
                },
                "tag_id[]": {
                    required: true,
                },
                "product_image[]": {
                    required: true,
                },
            }
        })
    });
</script>
