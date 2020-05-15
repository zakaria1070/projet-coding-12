    <!-- Top content Home -->
    <div class="top-content">
        	
        <div class="inner-bg">
            <div class="container">
                @foreach ($accueils as $accueil)
                    
              
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <div class="logo wow fadeInDown">
                            <a href="index.html"></a>
                        </div>
                        <h1 class="wow fadeInLeftBig"> {{$accueil->titre}} </h1>
                        <div class="description wow fadeInLeftBig">
                            <p>
                                {{$accueil->description}} 
                            </p>
                        </div>
                        <div class="top-big-link wow fadeInUp">
                            <a class="btn btn-link-1" href="http://azmind.com">Download it</a>
                            <a class="btn btn-link-2 scroll-link" href="#services">Learn more</a>
                        </div>
                    </div>
                </div>
                  @endforeach
            </div>
        </div>
        
    </div>
            