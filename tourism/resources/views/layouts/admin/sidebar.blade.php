 <aside id="sidebar">
 <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <img src="{{ asset('assets/images/Ca.PNG') }}" style="width: 120%; margin: -23px;" alt="">
        </a>
      </li>
                    <ul class="main-menu" style="    margin-bottom: 0;
    margin-left: -40px;
    margin-top: 13px;">



    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.home.index') }}">
          <i class="fa fa-home"></i>
          <span>Home</span></a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.category.index') }}">
          <i class="fas fa-underline"></i>
          <span>Category Management</span></a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.image.index') }}">
          <i class="far fa-image"></i>
          <span>Images</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.hotel.index') }}">
          <i class="fas fa-hotel"></i>
          <span>Hotels</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.package.index') }}">
          <i class="fa fa-umbrella"></i>
          <span>Packages</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.booking.index') }}">
          <i class="fa-book"></i>
          <span>Booking</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.reservation.index') }}">
          <i class="fa fa-bed"></i>
          <span>Package Booking</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.blog.index') }}">
          <i class="fa fa-bed"></i>
          <span>Blog</span></a>
      </li>
      
      
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.message.index') }}">
          <i class="fa-book"></i>
          <span>Feedbacks</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.logout')}}">
          <i class="fas fa-power-off"></i>
          <span>Logout</span></a>
      </li>   
 </ul>
</div>
</aside>
            
    