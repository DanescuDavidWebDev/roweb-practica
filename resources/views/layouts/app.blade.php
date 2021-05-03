<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset=UTF-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{asset('js/jquery.multi-select.js')}}"></script>
    <script src="https://kit.fontawesome.com/6cbcb9b6dc.js" crossorigin="anonymous"></script>
    <title>
        Proiect ROWEB
    </title>
</head>

<body>


        

    @yield('content')
    @include('errors.errors')



    
    @stack('js')
</body>

</html>