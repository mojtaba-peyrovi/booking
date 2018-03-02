<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">
  <img src="{{ URL::to('img/logo-main.png') }}" alt="" class="img-responsive logo-img">
</a>
<div class="d-flex d-block">

  @if (Auth::check())
     <span class="text-white">Hi, </span>
     <a href="{{ Route('admin.profile') }}" class="text-warning">{{ Auth::user()->name }}</a>
      <span class="text-white"> - </span>
     <a href="{{ route('admin.logout') }}" class="text-white mr-3">Logout</a>
  @else
      @if (!Request::url() === '/admin/signin')
        <span class="">
           <a href="{{ Route('admin.signin') }}" class="text-warning">Signin</a>
           <span class="text-white"> - </span>
           <a href="{{ route('admin.signup') }}" class="text-warning">Signup</a>
         </span>
      @endif

  @endif

</div>

</nav>
