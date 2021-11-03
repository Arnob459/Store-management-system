<h1>Admin profile</h1>
@include("navbar")
@if(session('admin_user'))
    <h3 style="color:rgb(34, 192, 34)"> welcome {{ session('admin_user') }}</h3>
    <li><a href="product"> Product List </a></li>
            <li><a href="add"> Product Add  </a></li>
            <li><a href="membersList"> Members List  </a></li>
            
@endif
<a href="logout_admin">logout</a>
