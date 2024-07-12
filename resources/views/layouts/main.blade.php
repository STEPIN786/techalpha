<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">



<head>

    <title>@yield('title', '') | Admin</title>

    <!-- initiate head with meta tags, css and script -->

    @include('include.head')



</head>



<body id="app">

    <div class="wrapper">

        <!-- initiate header-->

        @include('include.header')

        <div class="page-wrap">

            <!-- initiate sidebar-->

            @include('include.sidebar')



            <div class="main-content">

                <!-- yeild contents here -->
            @include('include.alertmessage')

                @yield('content')

            </div>



            <!-- initiate chat section-->

            @include('include.chat')





            <!-- initiate footer section-->

            @include('include.footer')



        </div>

    </div>



    <!-- initiate modal menu section-->

    @include('include.modalmenu')



    <!-- initiate scripts-->

    @include('include.script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>
    <script>
         $("#my_form").validate({
            rules: {
                name: { required: true },
                message: { required: true },
                phone: { required: true, minlength: 10 },
                
                
            },
           
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.elem').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            },
           
            submitHandler: function(form) {
                // do other things for a valid form
                form.submit();
            }
        });
    </script>

</body>



</html>

