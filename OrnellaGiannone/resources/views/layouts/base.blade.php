<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
   
    <title>Ornella Giannone</title>
</head>
<body>
    <header>
        @include('components.navbar')
    </header>
    

    <main>
        @include('components.home')

    </main>


    <footer>
         @include('components.footer')
    </footer>
</body>
</html>