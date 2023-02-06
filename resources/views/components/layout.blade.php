<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LaravelShop</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        @vite('resources/sass/main.scss', 'resources/css/app.css', 'resources/js/app.js')
    </head>
    <body >
        <header class="header">
             <div class="container">
                 <div class="header__content">
                 <nav class="header__nav" >
                     <ul id="item1">
                         <li><a href="/men">MEN</a> </li>
                         <li><a href="/women">WOMEN</a> </li>
                         <li><a href="/accessories">ACCESOIRES</a> </li>
                     </ul>
                 </nav>
                 <div class="header__img" id="item2"><a href="/"><img src="images/logo.svg" alt="logo"></a></div>
                 @auth
                    <div class="header__auth">
                    <form action="/logout" method="POST" >
                        @csrf
                        <button class="header__auth_btn">Sign Out</button>
                    </form>
                    <div class="header__cart" id="item3"><a href="#"><img src="images/cart.svg" alt="cart"></a></div>
                    </div>
                    @else
                    <form action="/login" method="POST" class="mb-0 pt-2 pt-md-0">
                    @csrf
                    <div class="row align-items-center">
                        <div class="col-md mr-0 pr-md-0 mb-3 mb-md-0">
                            <input name="loginusername" type="text" placeholder="Username" autocomplete="off" class="form-control form-control-sm input-dark me-5"/>
                        </div>
                        <div class="col-md mr-0 pr-md-0 mb-3 mb-md-0">
                            <input name="loginpassword"type="password" placeholder="Password" class="form-control form-control-sm input-dark mr-5"/>
                        </div>
                        <div >
                            <button class="header__auth_btn">Log In</button>
                        </div>
                        <a href="/register-form" class="header__auth_btn">Sign In</a>
                    </div>
                    </form>
                    
                @endauth
                 
             </div>
             </div>
        </header>
        <main class="main">
        {{$slot}}
        </main>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
