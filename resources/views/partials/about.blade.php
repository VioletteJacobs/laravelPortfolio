<!-- ======= About Me Section ======= -->
<section id="{{$DBTitre[0]->span}}" class="about">
    <div class="container">

      <div class="section-title">
        <span>{{$DBTitre[0]->span}}</span>
        <h2>{{$DBTitre[0]->titre}}</h2>
        <p>{{$DBTitre[0]->p}}</p>
      </div>

      <div class="row">
        <div class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
        <div class="col-lg-8 d-flex flex-column align-items-stretch">
          <div class="content pl-lg-4 d-flex flex-column justify-content-center">
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  @foreach ($DBAboutInfo as $item)
                      <li><i class="{{$item->icon}}" style="color: #ffb727"></i> <strong>{{$item->titre}}</strong>{{$item->info}}</li>
                   @if ((count($DBAboutInfo) % 2 === 0 && $loop->iteration == (count($DBAboutInfo)/2)) || (count($DBAboutInfo) % 2 != 0 && $loop->iteration == (ceil(count($DBAboutInfo)/2))))
                </ul>
              </div>
            <div class="col-lg-6">
                  <ul>
                @endif
                  @endforeach
                </ul>
              </div>
            </div>
            <div class="row mt-n4">
              @foreach ($DBAboutP2 as $item)
                 <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="{{$item->icon}}" style="color: {{$item->color}}"></i>
                    <span data-toggle="counter-up">{{$item->span}}</span>
                    <p><strong>{{$item->strong}}</strong>{{$item->p}}</p>
                  </div>
              </div> 
              @endforeach
          </div><!-- End .content-->

          <div class="skills-content pl-lg-4">
            @foreach ($DBSkills as $item)
              <div class="progress">
                <span class="skill">{{$item->language}}<i class="val">{{$item->val}}</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="{{$item->valuenow}}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            @endforeach

        </div>
      </div>

    </div>
  </section><!-- End About Me Section -->