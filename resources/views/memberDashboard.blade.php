<h1>Member profile</h1>
@include("navbar")

@if(session('user'))
    <h3 style="color:rgb(34, 192, 34)"> welcome {{ session('user') }}</h3>
    <li><a href="product"> Product List </a></li>
   
           
            <li><a href="add"> Product Add  </a></li>
@endif
<a href="logout">logout</a>
