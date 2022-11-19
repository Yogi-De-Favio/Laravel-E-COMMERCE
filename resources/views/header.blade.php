<?php

use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user'))
{
    $total = ProductController::cartItem();
}

?>
<nav class=" navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand " href="/"><i class="bi bi-cart me-3"></i>FLIPKART</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav bg-light">
                <li class="nav-item">
                    <a class=" nav-link" href="/">HOME</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="myorders">ORDERS</a>
                </li>
            </ul>

            <form action="/search" class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" name="query" class="form-control search-box" placeholder="search">
                    <button class="btn btn-success" type="submit" style="height: 35px;"><i class="bi bi-search"></i></button>
                </div>
            </form>

            <ul class="nav navbar-nav navbar-right">
                <li><a class="text-success" href="/cartlist">Cart({{$total}})</a></li>
                @if(Session::has('user'))

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-success" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{Session::get('user')['name']}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item text-success" href="/logout">Logout</a></li>
                    </ul>
                  </li>
                  @else
                  <li>
                    <a class="text-success" href="/login">Login</a>
                  </li>
                  <li>
                    <a class="text-success" href="/register">Register</a>
                  </li>
                  @endif
            </ul>
        </div>
    </div>
</nav>
