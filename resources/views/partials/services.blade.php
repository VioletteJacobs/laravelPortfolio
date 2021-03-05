<!-- ======= My Services Section ======= -->
<section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <span>{{$DBTitre[2]->span}}</span>
        <h2>{{$DBTitre[2]->titre}}</h2>
        <p>{{$DBTitre[2]->p}}</p>
      </div>
      <div class="row">
        @foreach ($DBServices as $item)
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon" style="background-color: #{{$DBColor[0]->rgba}}"><i class="{{$item->icon}}" ></i></div>
              <h4 class="title"><a href="">{{$item->titre}}</a></h4>
              <p class="description">{{$item->p}}</p>
            </div>
          </div>
          {{-- @if ((count($DBServices) % 4 === 0 && $loop->iteration == (count($DBServices)/2)) || (count($DBServices) %  != 0 && $loop->iteration == (ceil(count($DBServices)/2))))
          </div>
          <div class="col-lg-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
            </div>
            @endif --}}
        @endforeach
      </div>
    </div>
  </section><!-- End My Services Section -->