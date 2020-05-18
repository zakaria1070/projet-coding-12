 <!-- Portfolio -->
 <div class="portfolio-container section-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 portfolio section-description wow fadeIn">
                <h2>Our portfolio</h2>
                <div class="divider-1 wow fadeInUp"><span></span></div>
                <p>We've completed 537 projects since we started back in 2010. Check them out!</p>
            </div>
        </div>
        <div class="row">
            @foreach ($works->shuffle() as $work)
                
            
            <div class="col-sm-4 portfolio-box wow fadeInUp">
                <div class="portfolio-box-image">
                    <img src="assets/img/portfolio/1.jpg" alt="" data-at2x="assets/img/portfolio/1.jpg">
                </div>
                <h3><a href="#"> {{$work->titre}} </a> <i class="fa fa-angle-right"></i></h3>
                <div class="portfolio-box-date"><i class="fa fa-calendar-o"></i> {{$work->date}} </div>
                <p> {{$work->description}} </p>
            </div>
            @endforeach
            {{-- <div class="col-sm-4 portfolio-box wow fadeInDown">
                <div class="portfolio-box-image">
                    <img src="assets/img/portfolio/2.jpg" alt="" data-at2x="assets/img/portfolio/2.jpg">
                </div>
                <h3><a href="#">WordPress design</a> <i class="fa fa-angle-right"></i></h3>
                <div class="portfolio-box-date"><i class="fa fa-calendar-o"></i> March 2015</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
            </div>
            <div class="col-sm-4 portfolio-box wow fadeInUp">
                <div class="portfolio-box-image">
                    <img src="assets/img/portfolio/3.jpg" alt="" data-at2x="assets/img/portfolio/3.jpg">
                </div>
                <h3><a href="#">Created 150 flyers</a> <i class="fa fa-angle-right"></i></h3>
                <div class="portfolio-box-date"><i class="fa fa-calendar-o"></i> August 2015</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
            </div>
        </div> --}}

        <div class="row">
            <div class="col-sm-12 section-bottom-button wow fadeInUp">
                <a class="btn btn-link-1" href="#">Load more</a>
            </div>
        </div>
    </div>
</div>