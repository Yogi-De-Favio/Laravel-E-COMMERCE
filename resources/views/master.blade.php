<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-COM PROJECT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!--BOOTSTRAP ICON-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!--JQUERY CDN-->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <!--fontawsomicon page link-->
    <script src="https://kit.fontawesome.com/54f080ee86.js" crossorigin="anonymous"></script>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}


<!--sweet alert start-->
    <script src="{{ asset('assets/js/sweetalert.js') }}"></script>
    {{-- <script>

        @if(Session('success'))
        swal({
            title: '{{ Session('success') }}',
            icon: "success",
            button: "OK",
        });
        @endif
    </script> --}}

    <script>
        (function($) {
            addcart = function(type) {
                'use strict';
                if (type === 'auto-close') {
                    swal({
                        text: "Cart Added Succesfully",
                        icon: "success",
                        timer: 10000,
                        // button: 'ok'
                    }).then(
                        function() {},
                        // handling the promise rejection
                        function(dismiss) {
                            if (dismiss === 'timer') {
                                console.log('I was closed by the timer')
                            }
                        }
                        )
                    }else{
                        swal("Error occured !");
                    }
                }
            })(jQuery);

    </script>
    <script>
        (function($) {
            showSwal = function(type) {
                'use strict';
                if (type === 'auto-close') {
                    swal({
                        text: "Cart Remove Succesfully",
                        icon: "success",
                        timer: 10000,
                        // button: 'ok'
                    }).then(
                        function() {},
                        // handling the promise rejection
                        function(dismiss) {
                            if (dismiss === 'timer') {
                                console.log('I was closed by the timer')
                            }
                        }
                        )
                    }else{
                        swal("Error occured !");
                    }
                }
            })(jQuery);

    </script>
<!--sweet alert end-->

</body>
<style>
    .customLogin{
        height: 500px;
        margin-top: 210px;
    }
    img.slider-img{
        height: 400px !important
    }
    .customProduct{
        height: 750px;

    }
    .slider-text{
        background-color: #0000007a;
        border-radius: 20px;
    }
    .trending-img{
        height: 100px;
    }
    .trending-item{
        float: left;
        width: 20%;
    }
    .detail-img{
        height: 200px;
    }
    .search-box{
        width: 350px !important;
    }
    .cart-list-devider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }
</style>
</html>
