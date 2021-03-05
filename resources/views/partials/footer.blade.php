<footer id="footer">
    <div class="container">
      @foreach ($DBFooter as $item)
        <h3>{{$item->titre}}</h3>
        <p>{{$item->p}}</p>
        <div class="social-links">

          @foreach ($DBSocial as $item)
          <a href="{{$item->href}}" class="{{$item->class}}" style="background-color: #{{$DBColor[3]->rgba}}"><i class="{{$item->icon}}"></i></a>
          @endforeach
        </div>
        <div class="copyright">
          {{$item->copyright}}
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/ -->
          Designed by <a style="color: #{{$DBColor[3]->rgba}}" href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
          
      @endforeach
  </footer><!-- End Footer -->