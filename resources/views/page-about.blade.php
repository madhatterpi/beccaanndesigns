@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <!-- @include('partials.page-header') -->
    @include('partials.content-page')
    @include('partials.hero')
    <div class="about-s group">
    <div class="about-s__image">
      <img src="" alt="">
    </div>
    <div class="about-s__text">
      <p class="about-s__text__bold">Scenester 8-bit roof party, DIY kitsch helvetica whatever truffaut jean shorts tilde everyday carry.</p>
      <p>Lorem ipsum dolor amet edison bulb artisan twee offal VHS pug hot chicken green juice biodiesel roof party meggings. Locavore gluten-free tote bag, 3 wolf moon skateboard vexillologist seitan celiac. Hella banh mi subway tile 8-bit, food truck selvage blue bottle tousled neutra ramps quinoa tofu bicycle rights microdosing. Ugh tote bag polaroid crucifix la croix, humblebrag street art normcore whatever woke.</p>
      <p>YOLO twee snackwave viral roof party tattooed. Typewriter vaporware fam normcore wolf venmo gastropub. Mumblecore +1 godard art party organic drinking vinegar 90's messenger bag selfies. Roof party literally adaptogen man braid sriracha pug biodiesel schlitz next level tilde 3 wolf moon cold-pressed taiyaki. Photo booth shabby chic literally tumblr. Scenester 8-bit roof party, DIY kitsch helvetica whatever truffaut jean shorts tilde everyday carry. Hell of skateboard meh yuccie selvage, cray direct trade coloring book hella pop-up.</p>

    </div>
  </div>


  @endwhile
@endsection
