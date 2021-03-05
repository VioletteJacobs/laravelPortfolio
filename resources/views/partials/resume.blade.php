<!-- ======= My Resume Section ======= -->
<section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <span>{{$DBTitre[1]->span}}</span>
        <h2>{{$DBTitre[1]->titre}}</h2>
        <p>{{$DBTitre[1]->p}}</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">{{$DBResumeTitre[0]->titre}}</h3>
          @foreach ($DBSumary as $item)
            <div class="resume-item pb-0">
              <h4 style="color: #{{$DBColor[0]->rgba}}">{{$item->name}}</h4>
              <p><em>{{$item->p}}</em></p>
              <p>
              <ul>
                <li>{{$item->adresse}}</li>
                <li>{{$item->phone}}</li>
                <li>{{$item->mail}}</li>
              </ul>
              </p>
          </div>  
          @endforeach


          <h3 class="resume-title">{{$DBResumeTitre[1]->titre}}</h3>
          @foreach ($DBEducation as $item)
            <div class="resume-item">
              <h4 style="color: #{{$DBColor[0]->rgba}}">{{$item->title}}</h4>
              <h5>{{$item->years}}</h5>
              <p><em>{{$item->shool}}</em></p>
              <p>{{$item->p}}</p>
          </div> 
          @endforeach

        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">{{$DBResumeTitre[2]->titre}}</h3>
          @foreach ($DBExperiences as $item)
            <div class="resume-item">
              <h4 style="color: #{{$DBColor[0]->rgba}}">{{$item->title}}</h4>
              <h5>{{$item->years}}</h5>
              <p><em>{{$item->name}}</em></p>
              <p>
              <ul>
                <li>{{$item->task1}}</li>
                <li>{{$item->task2}}</li>
                <li>{{$item->task3}}</li>
                <li>{{$item->task4}}</li>
              </ul>
              </p>
          </div>
          @endforeach
        </div>
      </div>
    </div>
</section><!-- End My Resume Section -->