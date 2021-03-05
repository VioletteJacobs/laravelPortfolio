<!-- ======= Contact Me Section ======= -->
<section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <span>{{$DBTitre[4]->span}}</span>
        <h2>{{$DBTitre[4]->titre}}</h2>
        <p>{{$DBTitre[4]->titre}}</p>
      </div>

      <div class="row">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="{{$DBTitreContact[0]->icon}}" style="background-color: #{{$DBColor[0]->rgba}}" style="color: #{{$DBColor[0]->rgba}}"></i>
                <h3>{{$DBTitreContact[0]->title}}</h3>
                <div class="social-links">
                  @foreach ($DBSocial as $item)
                  <a href="{{$item->href}}" class="{{$item->class}}"><i class="{{$item->icon}}"></i></a>
                      
                  @endforeach
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="{{$DBTitreContact[1]->icon}}" style="background-color: #{{$DBColor[0]->rgba}}" style="color: #{{$DBColor[0]->rgba}}"></i>
                <h3>{{$DBTitreContact[1]->title}}</h3>

                @foreach ($DBMail as $item)
                <p>{{$item->mail}}</p>
                @endforeach
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="{{$DBTitreContact[2]->icon}}" style="background-color: #{{$DBColor[0]->rgba}}"></i>
                <h3>{{$DBTitreContact[2]->title}}</h3>

                @foreach ($DBPhone as $item)
                <p>{{$item->phone}}</p>                   
                @endforeach
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="6" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit" style="background-color: #{{$DBColor[0]->rgba}}">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Me Section -->