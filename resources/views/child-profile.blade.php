@extends('profile')

@section('title', 'profile')

@section('header')
<div class="container-fluid">
                <div class="tm-header-inner">
                    <a href="#" class="navbar-brand tm-site-name">Classic</a>
                    
                    <!-- navbar -->
                    <nav class="navbar tm-main-nav">

                        <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                            &#9776;
                        </button>
                        
                        <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                            <ul class="nav navbar-nav">
                                <li class="nav-item">
                                    <a href="http://127.0.0.1:8000/home" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Blog</a>
                                </li>
                                <li class="nav-item active">
                                    <a href="http://127.0.0.1:8000/profile" class="nav-link">Profile</a>
                                </li>
                            </ul>                        
                        </div>
                        
                    </nav>  

                </div>                                  
            </div>  
@endsection

<!-- @section('sidebar')
 
@endsection -->

@section('content')
<div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">

                        <section>
                            <h3 class="tm-gold-text tm-form-title">Praktikum Web Lanjut</h3>
                            <p class="tm-form-description">Membahas tentang view</p> 


                            <form action="index.html" method="post" class="tm-contact-form">                                
                                <div class="form-group">
                                    <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                                </div>
                                <div class="form-group">
                                    <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="contact_subject" name="contact_subject" class="form-control" placeholder="Subject"  required/>
                                </div>
                                <div class="form-group">
                                    <textarea id="contact_message" name="contact_message" class="form-control" rows="6" placeholder="Message" required></textarea>
                                </div>
                            
                                <button type="submit" class="tm-btn">Submit</button>                          
                            </form>   
                        </section>
                        
                        <section class="tm-margin-t-mid tm-map-section">
                            <h3 class="tm-gold-text tm-form-title">Pellentesque fermentum mauris</h3>

                            <div id="google-map"></div>

                            <p class="tm-form-description">Morbi vel pharetra massa, non iaculis tortor. Nulla porttitor tincidunt felis et feugiat. Vivamus fermentum ligula justo, sit amet blandit nisl volutpat id.</p>

                            <p class="m-b-0">Donec mattis ipsum in erat viverra commodo. 
                                Proin sapien lacus, euismod eget nisl in, 
                                elementum posuere massa. Curabitur a odio
                                eros. Cras aliquam lectus erat, non semper est
                                volutpat eget. Ut eget erat tincidunt.</p>

                            <a href="#" class="tm-btn tm-margin-t-small">Detail</a> 
                        </section>                        
                 

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-contact-right">
                        
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="tm-aside-container">
                                    <h3 class="tm-gold-text tm-title">
                                        Minggu 3
                                    </h3>
                                    <nav>
                                        <ul class="nav">
                                            <li><a href="#" class="tm-text-link">Lorem ipsum dolor sit</a></li>
                                            <li><a href="#" class="tm-text-link">Tincidunt non faucibus placerat</a></li>
                                            <li><a href="#" class="tm-text-link">Vestibulum tempor ac lectus</a></li>
                                            <li><a href="#" class="tm-text-link">Elementum egestas dui</a></li>
                                            <li><a href="#" class="tm-text-link">Nam in augue consectetur</a></li>
                                            <li><a href="#" class="tm-text-link">Text Link Color #006699</a></li>
                                        </ul>
                                    </nav>
                                    <hr class="tm-margin-t-small">   
                                    <h3 class="tm-gold-text tm-title tm-margin-t-small">
                                        Useful Links
                                    </h3>
                                    <nav>   
                                        <ul class="nav">
                                            <li><a href="#" class="tm-text-link">Suspendisse sed dui nulla</a></li>
                                            <li><a href="#" class="tm-text-link">Lorem ipsum dolor sit</a></li>
                                            <li><a href="#" class="tm-text-link">Duiss nec purus et eros</a></li>
                                            <li><a href="#" class="tm-text-link">Etiam pulvinar et ligula sed</a></li>
                                            <li><a href="#" class="tm-text-link">Proin egestas eu felis et iaculis</a></li>
                                            <li><a href="#" class="tm-text-link">Fusce non turpis euismod</a></li>
                                        </ul>
                                    </nav>      
                                </div>
                                 
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                
                                <div class="tm-content-box tm-content-box-contact">
                                    <img src="{{ asset('classic/img/foto.jpg') }}" alt="Image" class="tm-margin-b-20 img-fluid">
                                    <h4 class="tm-margin-b-20 tm-gold-text">Biodata</h4>
                                    <p class="tm-margin-b-20 tm-p-small">Nama : Erina Seviyanti<br>Ttl: Tuban,11 Februari 2002
                                    <br>Alamat:Tuban Jawa Timur<br>Hobi: Melihat Youtube</p>
                                    <a href="#" class="tm-btn text-uppercase">Detail</a>    
                                </div> 

                                <div class="tm-content-box tm-margin-t-mid tm-content-box-contact">
                                    <img src="{{ asset('classic/img/tm-img-310x180-2.jpg') }}" alt="Image" class="tm-margin-b-20 img-fluid">
                                    <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #2</h4>
                                    <p class="tm-margin-b-20 tm-p-small">Aenean cursus tellus mauris, quis
                                    consequat mauris dapibus id. Donec
                                    scelerisque porttitor pharetra</p>
                                    <a href="#" class="tm-btn text-uppercase">Read More</a>    
                                </div>  

                            </div>
                        </div>
                        <hr class="tm-margin-t-mid">
                        <div class="row tm-contact-row-related-posts">
                            <div class="col-xs-12">
                                
                                <div class="tm-contact-related-posts-container">
                                    <h3 class="tm-gold-text tm-title tm-margin-b-30">Related Posts</h3>
                                    <div class="media tm-related-post">
                                      <div class="media-left media-middle">
                                        <a href="#">
                                          <img class="media-object" src="{{ asset('classic/img/tm-img-240x120-1.jpg') }}" alt="Generic placeholder image">
                                        </a>
                                      </div>
                                      <div class="media-body">
                                        <a href="#"><h4 class="media-heading tm-gold-text tm-margin-b-15">Lorem ipsum dolor</h4></a>
                                        <p class="tm-small-font tm-media-description">Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p>
                                      </div>
                                    </div>
                                    <div class="media tm-related-post">
                                      <div class="media-left media-middle">
                                        <a href="#">
                                          <img class="media-object" src="{{ asset('classic/img/tm-img-240x120-2.jpg') }}" alt="Generic placeholder image">
                                        </a>
                                      </div>
                                      <div class="media-body">
                                        <a href="#"><h4 class="media-heading tm-gold-text tm-margin-b-15">Lorem ipsum dolor</h4></a>
                                        <p class="tm-small-font tm-media-description">Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p>
                                      </div>
                                    </div>
                                    <div class="media tm-related-post">
                                      <div class="media-left media-middle">
                                        <a href="#">
                                          <img class="media-object" src="{{ asset('classic/img/tm-img-240x120-3.jpg') }}" alt="Generic placeholder image">
                                        </a>
                                      </div>
                                      <div class="media-body">
                                        <a href="#"><h4 class="media-heading tm-gold-text tm-margin-b-15">Lorem ipsum dolor</h4></a>
                                        <p class="tm-small-font tm-media-description">Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p>
                                      </div>
                                    </div>
                                </div>                                

                            </div>
                        </div>

                    </div>
                </div>
@endsection

@section('footer')
<div class="container-fluid">
                <div class="row">
                    
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        
                        <div class="tm-footer-content-box">
                            <h3 class="tm-gold-text tm-title tm-footer-content-box-title">Proin eu posuere felis</h3>
                            <div class="tm-gray-bg">
                                <p>You can download, modify and use Classic HTML CSS template from templatemo.com website.</p>
                                <p>Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p>
                                <p><strong>Danny Egg (Executive)</strong></p>    
                            </div>    
                        </div>
                                                
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        <div class="tm-footer-content-box tm-footer-links-container">
                        
                            <h3 class="tm-gold-text tm-title tm-footer-content-box-title">Nulla tortor dolor</h3>
                            <nav>
                                <ul class="nav">
                                    <li><a href="#" class="tm-footer-link">Tincidunt non faucibus</a></li>
                                    <li><a href="#" class="tm-footer-link">Vestibulum tempor</a></li>
                                    <li><a href="#" class="tm-footer-link">Fusce non turpis euismod</a></li>
                                    <li><a href="#" class="tm-footer-link">Lorem ipsum dolor sit</a></li>
                                    <li><a href="#" class="tm-footer-link">Nam in augue consectetur</a></li>
                                    <li><a href="#" class="tm-footer-link">Text Link Color #CCCC66</a></li>
                                </ul>
                            </nav>

                        </div>
                        
                    </div>

                    <!-- Add the extra clearfix for only the required viewport 
                        http://stackoverflow.com/questions/24590222/bootstrap-3-grid-with-different-height-in-each-item-is-it-solvable-using-only
                    -->
                    <div class="clearfix hidden-lg-up"></div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-footer-content-box">
                        
                            <h3 class="tm-gold-text tm-title tm-footer-content-box-title">Etiam mollis ornare</h3>
                            <p class="tm-margin-b-30">Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p><hr class="tm-margin-b-30">
                            <p class="tm-margin-b-30">Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p><hr class="tm-margin-b-30">
                            <p class="tm-margin-b-30">Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p>
                            <a href="#" class="tm-btn tm-btn-gray text-uppercase">Read More</a>

                        </div>
                        
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-footer-content-box">
                        
                            <h3 class="tm-gold-text tm-title tm-footer-content-box-title">Fusce non turpis</h3>
                            <div class="tm-margin-b-30">
                                <img src="{{ asset('classic/img/tm-img-100x100-1.jpg') }}" alt="Image" class="tm-footer-thumbnail">
                                <img src="{{ asset('classic/img/tm-img-100x100-2.jpg') }}" alt="Image" class="tm-footer-thumbnail">
                                <img src="{{ asset('classic/img/tm-img-100x100-3.jpg') }}" alt="Image" class="tm-footer-thumbnail">
                                <img src="{{ asset('classic/img/tm-img-100x100-4.jpg') }}" alt="Image" class="tm-footer-thumbnail">
                                <img src="{{ asset('classic/img/tm-img-100x100-5.jpg') }}" alt="Image" class="tm-footer-thumbnail">
                                <img src="{{ asset('classic/img/tm-img-100x100-6.jpg') }}" alt="Image" class="tm-footer-thumbnail">
                            </div>
                            <p class="tm-margin-b-20">Curabitur dui massa, aliquam quis mi sed, tempor vulputate tellus. Sed vestibulum non neque.</p>
                            <a href="#" class="tm-btn tm-btn-gray text-uppercase">Browse</a>

                        </div>
                        
                    </div>


                </div>

                <div class="row">
                    <div class="col-xs-12 tm-copyright-col">
                        <p class="tm-copyright-text">Copyright 2016 Your Company Name</p>
                    </div>
                </div>
            </div>
@endsection