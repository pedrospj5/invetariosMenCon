<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        @page {
            margin: 0cm 0cm;
            font-size: 1em;
        }
        body{
            margin: 4cm 1cm 1cm;
        }
        header{
            position: fixed;
            top: 1cm;
            left: 2cm;
            right: 1cm;
            height: 2cm;
            color: black;
            background-color: white;
            text-align: left;
            
            line-height: 30px;
        }
        #logo{
            position: fixed;
            top: 1cm;
            left: 17cm;
            right: 2cm;
            width: 100px; 
            height: 100px;

        }
        </style>
    <title>REPORTES</title>
</head>
<body>
    <header> 
         
        <strong><h3>Santa FE</h3></strong>  
        <img id="logo"src="{{ public_path('imagenesSistema/logoInventario.jpg') }}" >  
    </header>
        
     
        
   
    @yield('content')
</body>
</html>