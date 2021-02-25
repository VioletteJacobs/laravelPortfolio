<header id="header" class="fixed-top  d-flex justify-content-center align-items-center header-transparent">

    <nav class="nav-menu d-none d-lg-block">
      <ul>
          @foreach ($DBNav as $item)
          <li class="active"><a href="{{$item->href}}">{{$item->li}}</a></li>
          @endforeach
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->