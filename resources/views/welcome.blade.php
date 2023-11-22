<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link rel="stylesheet" href="/css/primary.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    </head>
    <body>
        <header>
            <div id="img"><a href="/"><img src="/img/logo-bar2.png" alt="Logo Bar"></a></div>
        </header>    
            <section>
                    <div class="box"><p>
                    <a href="/">
                        <span class="material-symbols-outlined">
                            home
                        </span>
                        <br>Home</p>
                    </a>
                    </div>
                
                <div class="box"><a href="{{route('clients.index')}}"><p>
                    <span class="material-symbols-outlined">
                        groups
                    </span> 
                        <br>Clientes</p>
                </a>
                </div>
                <div class="box"><a href="{{ route('estoque.index') }}">
                    <p><span class="material-symbols-outlined">
                        package_2
                        </span><br>Estoque</p>
                </a></div>
                <div class="box"><a href="{{route('notinhas.index')}}">
                    <p><span class="material-symbols-outlined">
                        receipt_long
                        </span><br>Notinhas</p>
                </a></div>
            </section>
    </body>
</html>
