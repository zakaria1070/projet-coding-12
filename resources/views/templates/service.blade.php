 <!-- Services -->
 <div  id="service" class="services-container section-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 services section-description wow fadeIn">
                <h2>Our services</h2>
                <div class="divider-1 wow fadeInUp"><span></span></div>
            </div>
        </div>
        <div class="row">
            @foreach ($services as $service)
                
           
            <div class="col-sm-4 services-box wow fadeInUp">
                    
               
                <div class="row">
                    <div class="col-sm-4">
                        <div class="services-box-icon">
                            <i class="fa fa-magic"></i>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <h3> {{$service->titre}} </h3>
                        <p> {{$service->description}} </p>
                    </div>
                </div>
                
            </div>
             @endforeach
             <br>
            
            {{-- <div class="col-sm-4 services-box wow fadeInDown">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="services-box-icon">
                            <i class="fa fa-cog"></i>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <h3>Web design</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 services-box wow fadeInUp">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="services-box-icon">
                            <i class="fa fa-twitter"></i>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <h3>Social media</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                    </div>
                </div>
            </div> --}}
        </div>
        {{-- pagination link --}}
        <span class="mt-5"> {{$data->links()}} </span>
    </div>
</div>



<!-- More services -->
<div class="more-services-container section-container">
    <div class="container">
        
        <div class="row">
            <div class="col-sm-12 more-services section-description wow fadeIn">
                <h2>More services</h2>
                <div class="divider-1 wow fadeInUp"><span></span></div>
            </div>
        </div>
        
        <div class="row">
            
                
            
            <div class="col-sm-6 more-services-box wow fadeInLeft">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="more-services-box-icon">
                            <i class="fa fa-paperclip"></i>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <h3>{{$service->titre}} </h3>
                        <p>
                            
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-6 more-services-box wow fadeInLeft">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="more-services-box-icon">
                            <i class="fa fa-pencil"></i>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <h3>Sed do eiusmod tempor</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                            Ut wisi enim ad minim veniam, quis nostrud.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-6 more-services-box wow fadeInLeft">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="more-services-box-icon">
                            <i class="fa fa-cloud"></i>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <h3>Quis nostrud exerci tat</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                            Ut wisi enim ad minim veniam, quis nostrud.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 more-services-box wow fadeInLeft">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="more-services-box-icon">
                            <i class="fa fa-google"></i>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <h3>Minim veniam quis nostrud</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                            Ut wisi enim ad minim veniam, quis nostrud.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

