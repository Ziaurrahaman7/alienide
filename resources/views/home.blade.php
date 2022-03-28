@extends('layouts.app')
@section('content')
<div class="section-content ">
    <div class="container section-wrap" style="">
        
<div class="row ">
    

<div class="col-md-12  text-center">
    

<div class="logo-box">
    <a href="https://www.alienide.com" class="logo">
        <img src="https://www.alienide.com/wp-content/uploads/2017/04/ALiENIDE-Interactive-Logo-Top-Left.png"
             width="600"
             height=""
             alt="" >
    </a>
</div>



<h1 class="section-title "  data-appear-animation="bounceInUp" data-appear-animation-delay="100">{{$banarinfo->title}}</h1>



<div class="animation "
     data-appear-animation="bounceInUp"
     data-appear-animation-delay="300">

<p class="descriptions "
   style="">{{$banarinfo->short_description}}</p>



<hr class="pg-gap" style="margin-bottom: 29px;">


</div>



<div class="animation "
     data-appear-animation="bounceInUp"
     data-appear-animation-delay="500">
<a class="btn btn-danger btn-lg" href="" target="_blank" rel="noopener noreferrer">{{$banarinfo->button_txt}}</a><br />
</div>


</div>


</div>


    </div>
</div><!-- .section-content -->


</section><!-- .section -->




<section class="section  vertical-top"
     data-background-image="https://www.alienide.com/wp-content/uploads/2015/07/bg3.jpg"
     data-background="rgba(231,241,248,1)"
     data-shadow=""
     data-nav-color="#d73e4d"
     data-nav-color-text="#ffffff"
     data-color=""
     data-title-color=""
     data-title="About"
     data-anchor="about-me">



<div class="section-content not-scroll">
    <div class="container section-wrap"
         style="">
        
<div class="row ">
    

<div         class=" col-sm-6 section-bg right">
    

<div class="animation "
     data-appear-animation="fadeInDownBig"
     data-appear-animation-delay="300">
<img loading="lazy" class="alignnone size-full wp-image-24" src="{{asset('uploads/'.$about->image)}}" alt="about-us" width="1650" height="1100" /><br />
</div>


</div>



<div         class=" col-sm-6 col-lg-5 info">
    

<div class="animation "
     data-appear-animation="fadeInUpBig"
     data-appear-animation-delay="300">

<h1 class="section-title " >{{$about->title}}</h1>



<p class="descriptions "
   style="">{{$about->description}}</p>


</div>


</div>


</div>


    </div>
</div><!-- .section-content -->


</section><!-- .section -->




<section class="section  "
     data-background-image="https://www.alienide.com/wp-content/uploads/2015/07/bg3.jpg"
     data-background="rgba(255,233,147,0.91)"
     data-shadow=""
     data-nav-color="#d73e4d"
     data-nav-color-text=""
     data-color=""
     data-title-color=""
     data-title="Works"
     data-anchor="works">



<div class="section-content ">
    <div class="container section-wrap"
         style="">
        

    
        <div class="filter-box works-box">
            <div class="row section-title-block">
                <h1 class="col-sm-4 section-title" data-appear-animation="fadeInLeftBig" data-appear-animation-delay="500">Works</h1>

                <div class="col-sm-8 text-right" data-appear-animation="fadeInRightBig" data-appear-animation-delay="500">
                    <div class="btn-group filter-buttons filter-list">
                        <button type="button" class="btn btn-danger btn-sm dropdown-toggle" data-toggle="dropdown">
                            All <span class="caret"></span>
                        </button>

                        
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#" data-filter="*" class="active">All</a></li>
                                @foreach ($categorys as $category )
                                <li><a href="#" data-filter=".wc{{$category->id}}">
                                    {{$category->name}}</a></li>
                                @endforeach
                            </ul>

                        
                        <div class="clearfix"></div>
                    </div><!-- .filter-buttons -->
                </div>
            </div><!-- .section-title-block -->

            <div class="works-opened">
                <div class="navigation">
                    <a href="#" class="prev-work" data-id="" data-link="">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 14 24" enable-background="new 0 0 14 24" xml:space="preserve">
                        <path fill="#FFF7CC" d="M13.1,23.5c-0.6,0.6-1.7,0.6-2.3,0L0.5,13.2c-0.6-0.6-0.6-1.7,0-2.3c0.6-0.6,1.7-0.6,2.3,0l10.3,10.3
                        C13.7,21.9,13.7,22.9,13.1,23.5L13.1,23.5z M13.1,0.5c0.6,0.6,0.6,1.7,0,2.3L2.8,13.1c-0.6,0.6-1.7,0.6-2.3,0
                        c-0.6-0.6-0.6-1.7,0-2.3L10.8,0.5C11.4-0.2,12.5-0.2,13.1,0.5L13.1,0.5z"/>
                    </svg>
                    </a>
                    <a href="#" class="next-work" data-id="" data-link="">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 14 24" enable-background="new 0 0 14 24" xml:space="preserve">
                        <path fill="#FFF7CC" d="M0.9,0.5c0.6-0.6,1.7-0.6,2.3,0l10.3,10.3c0.6,0.6,0.6,1.7,0,2.3c-0.6,0.6-1.7,0.6-2.3,0L0.9,2.8
                        C0.3,2.1,0.3,1.1,0.9,0.5L0.9,0.5z M0.9,23.5c-0.6-0.6-0.6-1.7,0-2.3l10.3-10.3c0.6-0.6,1.7-0.6,2.3,0c0.6,0.6,0.6,1.7,0,2.3
                        L3.2,23.5C2.6,24.2,1.5,24.2,0.9,23.5L0.9,23.5z"/>
                    </svg>
                    </a>
                    <a href="#" class="close works-opened-close">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                        <path fill="#fff7cc" d="M23.3,23.3c-0.6,0.6-1.5,0.6-2.1,0L0.7,2.8c-0.6-0.6-0.6-1.5,0-2.1c0.6-0.6,1.5-0.6,2.1,0
                        l20.5,20.5C23.9,21.8,23.9,22.7,23.3,23.3L23.3,23.3z M23.3,2.8L2.8,23.3c-0.6,0.6-1.5,0.6-2.1,0c-0.6-0.6-0.6-1.5,0-2.1L21.2,0.7
                        c0.6-0.6,1.5-0.6,2.1,0C23.9,1.3,23.9,2.2,23.3,2.8L23.3,2.8z"></path>
                    </svg>
                    </a>
                </div><!-- .navigation -->
                <div class="single-work"></div>
            </div><!-- .works-opened -->
            <div class="row filter-elements">
@foreach ($categorys as $category )
@foreach($category->work as $work)
                        <div class="col-xs-12 col-sm-6 col-md-3 wc{{$category->id}} virtual-reality ">
                            <a href="#" class="work"
                               data-id="342"
                               data-link=""
                               data-appear-animation="fadeInDown"
                               data-appear-animation-delay="200">
                                <div class="image">
                                    <img width="270" height="167" src="{{asset('uploads/'.$work->image)}}" class="attachment-270x182 size-270x182 wp-post-image" alt="Clemon VR Dive" loading="lazy" />                                    </div>

                                <div class="hover"><i class="fa fa-arrows-alt"></i></div>

                                <h3 class="title">{{$work->title}}</h3>
                            </a><!-- .work -->
                        </div>
<!-- .filter-elements -->
            @endforeach
            @endforeach
        </div>
        </div><!-- .filter-box -->

    


<p>&nbsp;</p>
    </div>
</div><!-- .section-content -->


</section><!-- .section -->




<section class="section  "
     data-background-image="https://www.alienide.com/wp-content/uploads/2015/07/bg4.jpg"
     data-background="rgba(35,184,158,0.90)"
     data-shadow=""
     data-nav-color="#d73e4d"
     data-nav-color-text=""
     data-color="#768088"
     data-title-color="#fff7cc"
     data-title="Team"
     data-anchor="team">



<div class="section-content ">
    <div class="container section-wrap"
         style="">
        
<h1 class="section-title text-center"  data-appear-animation="fadeInDown" data-appear-animation-delay="400">Team</h1>




    <div class="team-carousel">
        <div class="row carousel carousel-white bottom-navigation" data-options='{"itemsCustom": [[0, 1],[768, 2],[992, 3]], "navigation": true}'>
        @foreach ( $teams as $team)
    

             <div class="col-sm-6 col-md-4">
                <div class="employee" data-appear-animation="zoomIn" data-appear-animation-delay="200">

                                            <div class="image"><img width="120" height="174" src="{{asset('uploads/'.$team->image)}}" class="attachment-team-thumb size-team-thumb wp-post-image" alt="{{$team->name}}" loading="lazy" /></div>
                    
                    <div class="employee-content">
                        <h3 class="title">{{$team->name}}</h3>

                        <div class="post">{{$team->position}}</div>

                        <div class="description">{{$team->description}}</div>

                        <div class="social"></div>                        </div>
                    <div class="clearfix"></div>
                </div><!-- .employee -->              
            </div>   
            @endforeach             
            

        </div><!-- .carousel -->
    </div><!-- .team-carousel -->



    </div>
</div><!-- .section-content -->


</section><!-- .section -->




<section
class="section contact-section"
data-background-image=""
data-background="rgba(48,112,82,#307052)"
data-shadow=""
data-nav-color=""
data-nav-color-text=""
data-color="#000000"
data-title="Contact Us"
data-title-color="#ffffff"
data-anchor="contact-us-2">

<div class="section-content">
    <div class="container section-wrap">
        <h1 class="section-title" data-appear-animation="fadeInLeft" data-appear-animation-delay="100">Hello</h1>

        <div class="row">

            
                <div class="col-sm-6">

                                                <div class="contact-info" data-appear-animation="fadeInLeft" data-appear-animation-delay="300">
                            <div class="icon"><i class="fa fa-mobile"></i></div>
                            <h4 class="title">Phone:</h4>
                            <div class="text">{{$siteSetting->phone}}</div>
                        </div><!-- .contact-info -->
                    
                                                <div class="contact-info" data-appear-animation="fadeInLeft" data-appear-animation-delay="400">
                            <div class="icon"><i class="fa fa-envelope-o"></i></div>
                            <h4 class="title">Email:</h4>
                            <div class="text"><a href="mailto:{{$siteSetting->email}}">{{$siteSetting->email}}</a></div>
                        </div><!-- .contact-info -->
                    
                                                <div class="contact-info" data-appear-animation="fadeInLeft" data-appear-animation-delay="500">
                            <div class="icon"><i class="fa fa-map-marker"></i></div>
                            <h4 class="title">Address:</h4>
                            <address class="text">{{$siteSetting->address}}</address>
                        </div><!-- .contact-info -->
                    
                </div>

            
            <div class="col-sm-6">
                <form role="form" class="contact-form">
                    <h3 class="form-title" data-appear-animation="fadeInRight" data-appear-animation-delay="300">Say Hello</h3>

                    <div class="form-group name" data-appear-animation="fadeInRight" data-appear-animation-delay="400">
                        <input type="text" class="form-control" name="name" placeholder="Name *">
                    </div>

                    <div class="form-group email" data-appear-animation="fadeInRight" data-appear-animation-delay="500">
                        <input type="email" class="form-control" name="email" placeholder="Email *">
                    </div>

                    <div class="form-group comment" data-appear-animation="fadeInRight" data-appear-animation-delay="600">
                        <textarea  class="form-control" name="comment" placeholder="Comment *"></textarea>
                    </div>

                    <button type="submit" class="btn btn-default submit-btn" data-appear-animation="fadeInRight" data-appear-animation-delay="700">Submit</button>
                    <span class="form-message animated fadeInRight" data-appear-animation="fadeInRight" data-appear-animation-delay="700"></span>
                </form><!-- .contact-form -->
            </div>

            
        </div>
    </div>

                <div>{!!$siteSetting->map!!}</div>
    
</div><!-- .section-content -->
@endsection