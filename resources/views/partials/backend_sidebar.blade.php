<nav class="col-md-2 d-none d-md-block bg-light sidebar">
<div class="sidebar-sticky">
<ul class="nav flex-column">
  <li class="nav-item">
    <img src="/img/anna.jpg" alt="" class=" m-4" style="width:75%;height:auto;">
  </li>
<li class="nav-item">
<a class="nav-link active" href="
{{ route('dashboard') }}">
  <i class="fab fa-app-store-ios"></i>
  Dashboard <span class="sr-only">(current)</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{ url('/properties/create')}}">
  <i class="fab fa-accusoft"></i>
  Add a Property
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{ url('/deals/create')}}">
  <i class="fas fa-handshake"></i>
  Add a deal
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">
  <i class="fas fa-globe"></i>
  Add a Country
</a>
</li>
</ul>
<hr>

<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
<span>Front-End</span>
<a class="d-flex align-items-center text-muted" href="#">
<span data-feather="plus-circle"></span>
</a>
</h6>
<ul class="nav flex-column mb-2">
<li class="nav-item">
<a class="nav-link" href="{{ route('home') }}">
  <span data-feather="file-text"></span>
  Home Page
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">
  <span data-feather="file-text"></span>
  All Properties
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">
  <span data-feather="file-text"></span>
  All Deals
</a>
</li>
</ul>
</div>
</nav>
