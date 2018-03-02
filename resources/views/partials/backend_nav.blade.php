<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">
  <img src="{{ URL::to('img/logo-main.png') }}" alt="" class="img-responsive logo-img">
</a>
<input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
<div class="px-5">

  @if (Auth::check())
    <span class="text-white">Hi,
       <a href="{{ Route('admin.profile') }}" class="text-warning">{{ Auth::user()->name }}</a>
     </span>
     <a href="{{ route('admin.logout') }}" class="text-white">Logout</a>
  @else
  <span class="">
     <a href="{{ Route('admin.signin') }}" class="text-warning">Signin</a>
     <a href="{{ route('admin.signup') }}" class="text-warning">Signup</a>
   </span>
  @endif

</div>

</nav>
