<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LaravelShop</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
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
                    <div class="header__cart" id="item3"><a href="/cart/list"><img src="images/cart.svg" alt="cart"></a></div>
                    <span class="text-red-700">{{ Cart::getTotalQuantity()}}</span>
                    </div>
                    @else
                    <form action="/login" method="POST" class="mb-0 pt-2 pt-md-0">
                    @csrf
                    <div class="d-flex align-items-center justify-content-end">
                        
                            <input name="loginusername" type="text" placeholder="Username" autocomplete="off" class="form-control form-control-sm input-dark me-2"/>
                       
                        
                            <input name="loginpassword"type="password" placeholder="Password" class="form-control form-control-sm input-dark me-2"/>
                        
                        
                            <button class="header__auth_btn">Log In</button>
                        
                        <a href="/register-form" class="header__auth_btn">Sign In</a>
                    </div>
                    </form>
                    
                @endauth
                 
             </div>
             </div>
        </header>
        <main class="main">
                @if(session()->has('success'))
        <div class="container container--narrow">
        <div class="alert alert-success text-center">
            {{session('success')}}
        </div>
        </div>
        @endif
        {{$slot}}
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
