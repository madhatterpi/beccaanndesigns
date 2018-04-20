@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-page')
    <!-- block -->
    <div class="row">
    <div class="front group">

      <div class="front-left parallax--bg left-pic">
        <div class="s">
          <h1>becca ann designs</h1>
          <p>Geometric. Minimal. Abstract.</p>
          <p>Sugar plum danish tootsie roll marshmallow muffin candy. Chupa chups apple pie cake chocolate cake marzipan. Chocolate cake donut jelly beans.</p>
        </div>
      </div>

      <div class="front-right">
        <div class="front-right__about front-right__section">
          <div class="block-content block-content__color-change">
            <h3 class="block-content__header header header--uppercase">about</h3>
            <p class="block-content__text block-content__text--small">Chocolate bar chocolate cake pie danish. Lemon drops topping dessert candy canes halvah.</p>
            <a class="block-content__link" href="#">explore<i class="fa fa-chevron-right"></i></a>
          </div>
          <a href="<?php echo get_site_url(); ?>/about" class="block-overlay-link overlay-change-color"></a>
        </div>

        <div class="front-right__shop front-right__section shop-pic">
          <div class="block-content">
            <h3 class="block-content__header slideaway-header header header--uppercase front-right__shop__text underline header header--uppercase">shop</h3>
          </div>
          <div class="block-overlay-text">
            <h4 class="header header--capitalize">shop</h4>
          </div>
          <a href="<?php echo get_site_url(); ?>/shop" class="block-overlay-link overlay-zoom"></a>
        </div>
      </div>
    </div>
</div>




  <div class="row">
    <div class="col-md-4 block block__one order-2 order-md-1 lines-pic">
      <div class="block-content">
        <h3 class="block-content__header slideaway-header header header--uppercase">lines</h3>
      </div>
      <div class="block-overlay-text">
        <h4 class="header header--capitalize">line prints</h4>
      </div>
      <a href="#" class="block-overlay-link overlay-zoom"></a>
    </div>
    <div class="col-md-8 block block__two order-1 order-md-2 abstract-pic">
      <div class="block-content block-content__color-change">
        <a class="block-content__link slideaway-header slidaway-header--bottom" href="#">abstract<i class="fa fa-chevron-right"></i></a>
      </div>
      <div class="block-overlay-text">
        <h4 class="header header--capitalize">abstract prints</h4>
      </div>
      <a href="#" class="block-overlay-link overlay-zoom"></a>
    </div>
  </div>



  <div class="row">
    <div class="col-md-8 block block__two">
      <div class="block-content block-content__color-change">
        <h3 class="block-content__header header header--uppercase">geometric prints</h3>
        <p class="block-content__text">Chocolate bar chocolate cake pie danish. Lemon drops topping dessert candy canes halvah.</p>
        <a class="block-content__link" href="<?php echo get_site_url(); ?>/geometric">explore<i class="fa fa-chevron-right"></i></a>
      </div>
      <a href="#" class="block-overlay-link overlay-change-color"></a>
    </div>
    <div class="col-md-4 block block__one">
      <div class="block-content">
        <h3 class="block-content__header slideaway-header header header--uppercase slideaway-header--top">blog</h3>
      </div>
      <div class="block-overlay-text">
        <h4 class="header header--capitalize">blog</h4>
      </div>
      <a href="#" class="block-overlay-link overlay-zoom"></a>
    </div>
  </div>


<div class="row justify-content-center align-self-center block">
  <div class="shop-link parallax-bg">
    <h2 class="header header--uppercase parallax-box">visit shop</h2>
  </div>
  <a href="<?php echo get_site_url(); ?>/shop" class="block-overlay-link overlay-zoom"></a>
  <div class="something-else">

  </div>

</div>
  @endwhile
@endsection
