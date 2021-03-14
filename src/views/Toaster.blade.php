@if (Session::has('Toast'))
    <script src="{{asset('vendor/Hosein/jquery/jquery-3.2.1.min.js')}}"></script>
    <link href="{{asset('vendor/Hosein/toastr/toastr.min.css')}}" rel="stylesheet" type="text/css"/>
    <script src="{{asset('vendor/Hosein/toastr/toastr.min.js')}}"></script>
    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        {!! Session::pull('Toast') !!}
    </script>
@endif
