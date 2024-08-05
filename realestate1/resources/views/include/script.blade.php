<script src="{{ asset('all.js') }}"></script>
<!-- Stack array for including inline js or scripts -->
@stack('script')

<script src="{{ asset('dist/js/theme.js') }}"></script>
<script src="{{ asset('js/chat.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.2/tinymce.min.js"></script>

<script>
    tinymce.init({
        selector: '.txteditor',
        height: 500,
        plugins: 'autolink lists link image charmap print preview hr anchor pagebreak',
        toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        branding: false,
        forced_root_block: false, // Disable automatic <p> tags
    });
</script>


<script>
    $(document).ready(function () {
        // Attach a keyup event handler to the input field
        $(".phonefilter").on("input", function () {
            // Get the current input value
            var inputValue = $(this).val();

            // Remove non-numeric characters
            var numericValue = inputValue.replace(/[^0-9]/g, '');

            // Limit to 10 digits
            numericValue = numericValue.slice(0, 10);

            // Update the input field value
            $(this).val(numericValue);
        });
    });

    $(document).ready(function() {
        $('.pricefilter').on('input', function() {
            // Remove any non-numeric and non-decimal characters
            var cleanedValue = $(this).val().replace(/[^0-9.]/g, '');

            // Update the input value with the cleaned value
            $(this).val(cleanedValue);
        });
    });
</script>