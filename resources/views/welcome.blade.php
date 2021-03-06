<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel CRUD</title>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            a{
                color: rgb(59, 59, 59);
            }
            a:hover{
                color: rgb(59, 59, 59);
                text-decoration:none;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .img{
                height: 200px;
                width: 200px;
                vertical-align: middle;
                border-radius: 50%;
                border: 5px solid rgba(122, 122, 122, 0.16);
            }
            .img-avatar{
                height: 85px;
                width: 85px;
                vertical-align: middle;
                border-radius: 50%;
                border: 5px solid rgba(122, 122, 122, 0.16);
            }
            #file_img {
                display: none;
            }
            .btn-p{
                border-radius: 50%;
                background-image: url('/img/photograph.png');
                background-repeat: no-repeat;
                background-position: center;
                border: none;
                height: 45px;
                width: 45px;
                background-color: #58e5c259;
                vertical-align: middle;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height ">
            @yield('content')
        </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>

        $('#btn_upload').click(function(){
            document.getElementById('file_img').click();
        });

        $('#file_img').change(function(event){
            var img = document.getElementById('img_p');
            img.src = URL.createObjectURL(event.target.files[0]);
        });

    </script>
    </body>
</html>
