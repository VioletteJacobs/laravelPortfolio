 <!-- ======= My Portfolio Section ======= -->
 <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <span>{{$DBTitre[3]->span}}</span>
        <h2>{{$DBTitre[3]->titre}}</h2>
        <p>{{$DBTitre[3]->p}}</p>
      </div>

      <ul id="portfolio-flters" class="d-flex justify-content-center">

        <li data-filter="*" class="filter-active">All</li>
        <li data-filter=".filter-app">App</li>
        <li data-filter=".filter-card">Card</li>
        <li data-filter=".filter-web">Web</li>
      </ul>

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>App 1</h4>
            <p>App</p>
            <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        @foreach ($DBPortfolio as $item)
        
        <div class="col-lg-4 col-md-6 portfolio-item {{$item->filter}}">
          <div class="portfolio-img"><img src="{{$item->img}}" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>{{$item->title}}</h4>
            <p>{{$item->p}}</p>
            <a href="{{$item->href1}}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
            <a href="{{$item->href2}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </section><!-- End My Portfolio Section -->