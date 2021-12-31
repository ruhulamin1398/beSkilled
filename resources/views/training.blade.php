@extends('includes.app')

@section('css')
<style> 
 #pageHero {
    background: url("{{ asset(App\Models\additionalImage::find(5)->link )}}") center center;
    background-repeat: no-repeat;
    background-size:  100% auto;
  }
 

  .icon{
    display: none  !important;
  }
</style>
@endsection

@section('hero')
 
<section id="pageHero" class="trainingHero d-flex align-items-center">
    <div class="container">
      <div class="row">
          <div class="col">
              <h1 style="color: white;"   >  &nbsp;&nbsp; </h1>
          </div>
      </div>
    </div>
</section>
@endsection

@section('content')


<section id="services12" class="services">
  <div class="container">


    <div class="row">

      @foreach ($course as $course)
        <div class="col-lg-4 col-md-6">
            <div class="icon-box">
                <div class="icon"><i class="icofont-heart-beat"></i></div>
                <h4><a href="">{{ $course -> course_title }}</a></h4>
                <p>
                    @php
                        echo (implode(' ', array_slice(explode(' ', strip_tags($course -> description)), 0, 13))."\n");
                    @endphp
                </p>
                <button type="button" class="btn btn-primary "><a class="text-light" href="{{route('singleTrainings',$course ->id)}}">Join</a></button>
            </div>
        </div>
      @endforeach

    </div>

  </div>
</section>






@endsection
