<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>掲示板</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
        crossorigin="anonymous">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-light navbar-expand-lg" 
            style="background-color: #e3f2fd;">
                <div class="container-fluid px-5">
                    <a class="navbar-brand" href="#">
                    <img src="{{ asset('/img/atm.jpg') }}" 
                    alt="" width="50" height="50" class="d-inline-block align-top">
                        Atleti Board
                    </a>
                </div>
            </nav>
        </header>
        
        

        <main>
            @yield('content')
        </main>

        <footer class="footer" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <p class="text-black text-center">
                🄫Daiki-Minaguchi All Rights Reserved
            </p>        
        </div>
    </footer>
        
    </body>
</html>