@extends('app')
 
@section('content')
  <!-- CAROUSEL -->
  
  
  
    <div class="intro">
        <div class="container">
    
            <div class="slider">
                <div class="slider__item">
                    <img class="cover1" src="public/img/first_pic.jpg" alt="">
                    <img class="cover" src="public/img/first_mob.jpg"  alt="">
                    <div class="text"><p>GOGOPICKS</p><p><b>Improve your workout with AI</b></p><p><span>Carbon</span>is a mirror with a personal trainer inside</p><p><a href="">see campaing</a></p></div>
                </div>
                <div class="slider__item">
                    <img class="cover1" src="public/img/second_pic.jpg" alt="">
                    <img class="cover"  src="public/img/second_mob.jpg" alt=""><div class="text"><p>GOGOPICKS</p><p><b>Improve your workout with AI</b></p><p><span>Carbon</span>is a mirror with a personal trainer inside</p><p><a href="">see campaing</a></p></div>
                </div>
                <div class="slider__item">
                    <img class="cover1" src="public/img/three_pic.jpg" alt=""><img class="cover"  src="public/img/three_mob.jpg" alt=""><div class="text"><p>GOGOPICKS</p><p><b>Improve your workout with AI</b></p><p><span>Carbon</span>is a mirror with a personal trainer inside</p><p><a href="">see campaing</a></p></div>
                </div>
                <div class="slider__item">
                    <img class="cover1" src="public/img/four_pic.jpg" alt=""><img class="cover"  src="public/img/four_mob.jpg" alt=""><div class="text"><p>GOGOPICKS</p><p><b>Improve your workout with AI</b></p><p><span>Carbon</span>is a mirror with a personal trainer inside</p><p><a href="">see campaing</a></p></div>
                </div>
                <div class="slider__item">
                    <img class="cover1" src="public/img/fifth_pic.png" alt=""><img class="cover"  src="public/img/fifth_mob.png" alt=""><div class="text"><p>GOGOPICKS</p><p><b>Improve your workout with AI</b></p><p><span>Carbon</span>is a mirror with a personal trainer inside</p><p><a href="">see campaing</a></p></div>
                </div>
            </div>    
<div class="myDIV">
    <a href="https://bettingexpert.pro/create/campaign" class="nav__link_mob btn btn--sign">Start a Campaign</a>
        </div>
    </div>
  
    <div class="banner__content">
        <div class="container">
            <div class="content__sign">
                <div class="sign__title">Find it first on Indiegogo</div>
                <div class="sign__subtitle">Indiegogo is where early adopters and innovation seekers find lively, imaginative tech before it hits the mainstream.</div>
    <div class="myDIV">
                <button class="btn btn--sign" data-toggle="modal" data-target="#exampleModal">Sign up now</button>
                <button class="btn btn--sign" data-toggle="modal" data-target="#exampleModal">learn more</button>
    </div>
            </div>
        </div>
    </div>
	
    <div class="popular__projects">
        <div class="container">
    
           <div class="popularpro__title">Popular Projects</div>
    
            <div class="projects__slider">
				@foreach ( $data as $key )
				@include('includes.list-campaigns')
				@endforeach
            </div>
        </div>
    </div>
	
<div class="four__picture">
    <div class="container">
    <div class="four__inner">
    
    <div class="four__items">
        <div class="four__item">
            <div class="four__ico"><img src="public/img/negr1.png" alt=""><p>10 Cool &amp; Clever Finds</p></div>
            <div class="four__link">
                <div class="four__text">Our roundup of standout projects</div>
                <div class="link__four">see the collection <i class="arrow right"></i></div>
            </div>
        </div>
        <div class="four__item">
            <div class="four__ico"><img src="public/img/negr2.png" alt=""><p>10 Cool &amp; Clever Finds</p></div>
            <div class="four__link">
                <div class="four__text">Our roundup of standout projects</div>
                <div class="link__four">see the collection <i class="arrow right"></i></div>
            </div>
        </div>
    </div>
    
    
    <div class="four__items">
    
        <div class="four__item">
            <div class="four__ico"><img src="public/img/negr3.png" alt=""><p>10 Cool &amp; Clever Finds</p></div>
            <div class="four__link">
                <div class="four__text">Our roundup of standout projects</div>
                <div class="link__four">see the collection <i class="arrow right"></i></div>
            </div>
        </div>
    
    
        <div class="four__item">
            <div class="four__ico"><img src="public/img/negr4.png" alt=""><p>10 Cool &amp; Clever Finds</p></div>
            <div class="four__link">
                <div class="four__text">Our roundup of standout projects</div>
                <div class="link__four">see the collection <i class="arrow right"></i></div>
            </div>
        </div>
    
    </div>
    
    
    </div>
    </div>
    </div>
<div class="bicycle">
        <div class="container">
    <div class="bicycle__inner">
            <div class="bicycle__title">Back the project, take the ride</div>
            <div class="bicycle__subtitle">Indiegogo is your destination for clever innovations in tech, design, and more, often with special perks and pricing for early adopters.  Back a campaign, share your ideas and feedback with the project team - and join the risk and rewards of bringing new products to life.</div>
    <div class="">
            <button class="btn btn--learn">learn about crowdfunding <i class="arrow right"></i></button>
    </div>
    </div>
        </div>
    </div>
	
    <div class="catigories">
        <div class="container">
    
            <div class="catigories__title">Which categories interest you?</div>
            <div class="catigories__subtitle">Discover projects just for you and get great recommendations when you select your interests.</div>
            <div class="middle">
            <button class="btn btn--select">sign up and select interests</button></div>
            <div class="catigories__subtitle">Or explore our top categories</div>
    
       <div class="categories__items">
    
    
    <div class="cat__column">
    
    
           <div class="categories__item">
               <div class="cat__ico"><img src="public/img/house1.png" alt=""></div>
               <div class="cat__text">home</div>
           </div>
    
           <div class="categories__item">
               <div class="cat__ico"><img src="public/img/house2.png" alt=""></div>
               <div class="cat__text">phones &amp; accessories</div>
           </div>
    
            <div class="categories__item">
               <div class="cat__ico"><img src="public/img/house3.png" alt=""></div>
               <div class="cat__text">travel &amp; outdoors</div>
           </div>
    
    
        </div>
    
    <div class="cat__column">
    
    
           <div class="categories__item">
               <div class="cat__ico"><img src="public/img/house4.png" alt=""></div>
               <div class="cat__text">health&amp;fitness</div>
           </div>
    
           <div class="categories__item">
               <div class="cat__ico"><img src="public/img/house5.png" alt=""></div>
               <div class="cat__text">audio</div>
           </div>
    
            <div class="categories__item">
               <div class="cat__ico"><img src="public/img/house6.png" alt=""></div>
               <div class="cat__text">film</div>
           </div>
    
    
        </div>
    
       </div>
    
        </div>
    </div>
    <div class="journal">
        <div class="container">
    
    
    <div class="catigories__title">From the Journal</div>
    <div class="catigories__subtitle">Your behind-the-scenes view of the people and stories behind Indiegogo projects</div>
    
        <div class="journal__items">
    
    
            <div class="journal__item">
                <div class="journal__ico"><img src="public/img/bottom0.png" alt=""></div>
                <div class="journal__title">Get Moving with Move It Swift</div>
                <div class="journal__subtitle">Learn more about the team behind the smart boxing gloves that will change your workout routine</div>
                <button class="btn btn--readmore">Read Now <i class="arrow right"></i></button>
            </div>
    
            <div class="journal__item">
                <div class="journal__ico"><img src="public/img/bottom1.png" alt=""></div>
                <div class="journal__title">MOFT Carry Sleeve Raises $200,000 to Simplify On-the-Go Work</div>
                <div class="journal__subtitle">The team behind the MOFT Carry Sleeve are revolutionizing the laptop case landscape</div>
                <button class="btn btn--readmore">Read on <i class="arrow right"></i></button>
            </div>
    
            <div class="journal__item">
                <div class="journal__ico"><img src="public/img/bottom2.png" alt=""></div>
                <div class="journal__title">April 2020: Top Campaigns</div>
                <div class="journal__subtitle">Find out which campaigns are at the top of everyone's minds this month</div>
                <button class="btn btn--readmore">Read more <i class="arrow right"></i></button>
            </div>
    
        </div>
    
        </div>
    </div>

    <div class="hands">
        <div class="container">
    <div class="bicycle__inner">
            <div class="bicycle__title">Clever Things For Curious Humans™</div>
            <div class="bicycle__subtitle">There's no better place to start the hunt for something new and special. Begin on Indiegogo to find clever and unconventional things that solve everyday problems large and small.</div>
    <div class="two__btn">
            <button  class="btn btn--hands"  href="" data-toggle="modal" data-target="#exampleModal">sign up now</button >
            <button class="btn btn--hands"  data-toggle="modal" data-target="#exampleModal">learn more</button>
    </div>
    </div>
        </div>
    </div>

@endsection

@section('javascript')
		<script type="text/javascript">

    pagination('{{ url("ajax/campaigns") }}?page=', '{{trans('misc.error')}}');

    // Owl Carousel
    $('.owl-carousel').owlCarousel({
      margin:10,
      items : {{ $categories->count() }},
      responsive: {
        0:{
              items:1
          },
          600:{
              items:2
          },
          1000:{
              items:4
          }
      }
    });

   @if (session('success_verify'))
  		swal({
  			title: "{{ trans('misc.welcome') }}",
  			text: "{{ trans('users.account_validated') }}",
  			type: "success",
  			confirmButtonText: "{{ trans('users.ok') }}"
  			});
  		 @endif

  		 @if (session('error_verify'))
  		swal({
  			title: "{{ trans('misc.error_oops') }}",
  			text: "{{ trans('users.code_not_valid') }}",
  			type: "error",
  			confirmButtonText: "{{ trans('users.ok') }}"
  			});
  		 @endif
</script>
@endsection
