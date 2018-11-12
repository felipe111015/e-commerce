<!DOCTYPE html>
<html>
    <head>
    <title>Vivi Pattiserie</title>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{ url('css/estilo.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ url('css/estiloCarrinho.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ url('css/estiloBolosDecorados.css') }}"/>
        
        
        <link rel="stylesheet" type="text/css" href="{{ url('css/animate/animate.css') }} "/>
    
        
        <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap-4.1.3/dist/css/bootstrap.css') }}">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="script" href="{{ url('css/bootstrap-4.1.3/dist/js/bootstrap.min.js') }}">

        <link rel="stylesheet" type="text/css" href="{{ url('css/OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('css/OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}">
        <script src="{{ url('css/OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('css/OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/dist/owl.carousel.js') }}" type="text/javascript"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
              crossorigin="anonymous">


        <link rel="apple-touch-icon" sizes="57x57" href="imagens/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="imagens/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="imagens/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="imagens/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="imagens/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="imagens/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="imagens/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="imagens/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="imagens/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="imagens/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="imagens/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="imagens/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="imagens/favicon/favicon-16x16.png">
        <link rel="manifest" href="imagens/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="imagens/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body>
    
        @include('template.menu')
       
            @yield('conteudo')
         
            

    </body>
    

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="{{ url('js/scripts.js') }}">type = "text/javascript"</script>
</html>