<link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
<script src="https://unpkg.com/filepond-plugin-file-metadata/dist/filepond-plugin-file-metadata.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>

<script>
    let filepondMetaData;

    FilePond.registerPlugin(
        FilePondPluginFileMetadata,
        FilePondPluginFileValidateSize,
        FilePondPluginFileValidateType
    );

    function initializeFileContent(datatable = null) {
        const csrfToken = '{{ csrf_token() }}';

        let options = {
            credits: false,
            acceptedFileTypes: ['image/*'],
            maxFiles: 10,
            server: {
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                },
                process: `{{ route('file.process') }}`,
                revert: './revert',
                restore: './restore/',
                load: './load/',
                fetch: './fetch/',
            },
            labelIdle: 'Upload Images',
        };

        // Get a reference to the file input element
        const inputElements = document.querySelectorAll('input[type="file"]');

        Array.from(inputElements).forEach(inputElement => {
            // create a FilePond instance at the input element location
            let pond = FilePond.create(inputElement, options);

            // pond.on('processfile', (error, file) => {
            //     pond.removeFiles();
            //     datatable.ajax.reload(function(json) {
            //         initializeFileContent(datatable);
            //     });
            // });
        });

        return true;
    }
</script>
