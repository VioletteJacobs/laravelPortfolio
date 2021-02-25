<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
      @foreach ($DBHero as $item)
          <h1>{{$item->titre}}</h1>
        <h2>{{$item->h2}}</h2>
        <a href="#about" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
      @endforeach
    </div>
  </section><!-- End Hero -->