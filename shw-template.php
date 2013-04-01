<?php
/*
Template Name: Six Hot Weekends
 */

get_header(); ?>

<link rel="stylesheet" type="text/css" href="http://cdn.valleychurch.eu/fontawesome/font-awesome.min.css">

<style type="text/css">
  /*html, body
  {
  height: 100%;
  }*/

  body
  {
    background: #015197 url('//cdn.valleychurch.eu/images/shw/shw_bg.jpg') top center no-repeat;
    background-size: cover;
    color: white;
    font-family: "franklin-gothic-urw-n4", "franklin-gothic-urw", "proxima-nova", sans-serif;
  }
  
  header, footer
  {
    background: white;
    background: rgba(255,255,255,0.85);
  }
  
  footer
  {
    padding: 4px 6px;
    margin-bottom: 8px !important;
  }

  h1, h2, h3, h4, h5, h6,
  .alpha, .beta, .gamma, .delta, .epsilon, .zeta
  {
    color: white;
    font-family: "franklin-gothic-urw-n7", "franklin-gothic-urw", "proxima-nova", sans-serif;
  }
  
  .speaker-twitter a
  {
    color: white !important;
    text-decoration: underline;
    float: left;
  }
  
  .speaker-twitter a:hover
  {
    color: #69B9FF !important;
  }
  
  .speaker-twitter i
  {
    float: left;
    margin-top: 3px;
  }

  /*.church-logo
  {
    margin-bottom: 1em;
    -webkit-filter: brightness(100%);
  }*/

  .logo
  {
    padding: 24px 24px 0 24px;
    margin-bottom: 0;
  }

  .logo img
  {
    width: 100%;
  }

  .date
  {
    font-family: "franklin-gothic-urw-n7", "franklin-gothic-urw", "proxima-nova", sans-serif;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: -3px;
    text-rendering: optimizeLegibility;
    padding: 0 24px;
  }

  p
  {
    font-size: 20px;
    font-size: 1.25rem;
    line-height: 1.25;
  }

  .left
  {
    width: 50%;
    padding-right: 0.6rem;
  }

  .right
  {
    width: 50%;
    padding-left: 0.6rem;
  }

  .ie7 .left, .ie7 .right
  {
    width: 95%;
    float: none;
    padding: 0 24px;
  }

  .event
  {
    margin-bottom: 24px;
  }

  .tagline
  {
    text-transform: uppercase;
    font-size: 46px;
    font-size: 2.875em;
    letter-spacing: -1px;
    font-weight: 900;
    line-height: 0.9;
    font-family: "franklin-gothic-urw-n9", "franklin-gothic-urw", "proxima-nova", sans-serif;
  }

  .intro
  {
    font-size: 23px;
    font-size: 1.438rem;
    line-height: 1.3;
    font-weight: 400;
    font-family: "franklin-gothic-urw-n4", "franklin-gothic-urw", "proxima-nova", sans-serif;
  }

  .ie8 .intro
  {
    font-size: 22px;
    font-size: 1.375rem;
    line-height: 1.32;
  }

  .speaker
  {
    margin-bottom: 24px;
  }

  .speaker-date,
  .speaker-name,
  .speaker-church
  {
    text-transform: uppercase;
  }

  .speaker-date
  {
    line-height: 0.9;
  }

  .speaker-name,
  .speaker-church
  {
    line-height: 1;
  }

  .speaker-church
  {
    margin-bottom: 8px;
  }
  
  .footerText p
  {
    font-size: 14px;
    font-size: 0.875rem;
    line-height: 18px;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  }



  @media screen and (max-width: 980px) {

    .left, .right
    {
      float: none;
      width: 100%;
      padding: 0 24px;
    }

    .intro, p
    {
      line-height: 1.5;
    }

    .speaker-photo img
    {
      width: 100%;
      max-width: 600px;
      margin-bottom: 8px;
    }
  }


  @media screen and (max-width: 670px) {

    .logo
    {
      margin-bottom: 0;
    }

    .date
    {
      letter-spacing: -1px;
    }

    .tagline
    {
      font-size: 32px;
      font-size: 2rem;
    }

    .intro, p
    {
      font-size: 18px;
      font-size: 1.125rem;
    }

  }
</style>

<script type="text/javascript" src="http://cdn.valleychurch.eu/js/jquery.fittext.js"></script>

<script type="text/javascript" src="//use.typekit.net/nsc1ebn.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<script type="text/javascript">
  $(document).ready(function() {
    if (!Modernizr.svg) {
      $('.logo img').attr('src', 'http://cdn.valleychurch.eu/images/shw/shw_logo.png');
    }
  });
</script>

<div class="6hw wrap cf">
  <h1 class="logo">
    <img src="http://cdn.valleychurch.eu/images/shw/shw_logo.svg" />
  </h1>
  <h2 class="giga date">
    26th May &mdash; 30th June
  </h2>
  <div class="event cf">
    <div class="left paddedContent floatLeft">
      <h3 class="tagline">
        Six weekends.<br />
        Six special guests.<br />
        Six opportunities to encounter God’s purpose for your life in a new, powerful way.
      </h3>
    </div>
    <div class="right paddedContent floatRight">
      <p class="shw intro">
        For six consecutive weeks at each of our Sunday services (10:30am &amp; 6pm, Bamber Bridge; 2:30pm, Wigan) we are
        privileged to host six incredible guest speakers from different backgrounds and nations. Each service is designed
        to make you feel comfortable and welcome, with topics that are useful for your life, a full children’s programme
        which is free of charge, and a lively café open after each service. Everyone is welcome!
      </p>
    </div>
  </div>
  <div class="speaker cf">
    <div class="speaker-photo left paddedContent floatLeft">
      <img src="http://cdn.valleychurch.eu/images/shw/shw_speaker_1.jpg" />
    </div>
    <div class="speaker-details right paddedContent floatRight">
      <div class="gamma speaker-date">
        26th May
      </div>
      <div class="alpha speaker-name">
        John Greenow
      </div>
      
      <div class="delta speaker-church">
        Xcel Church, Co. Durham
      </div>

      <div class="delta speaker-twitter cf">
        <i class="icon icon-twitter"></i> <a href="http://twitter.com/johngxcel" target="_blank">@johngxcel</a>
      </div>

      <div class="speaker-info">
        <p>
          Having been in ministry since 1990 when, at 22, he became the Youth Pastor of CLC (now Xcel), John Greenow has maintained
          a passionate desire for building the local church.
        </p>
        <p>
          Whilst on a mission trip to Poland in 1996, he met Lisa and they were married in 1998 and have three fabulous boys, Benjamin and twins Jack and Jonas.
        </p>
        <p>
          John and Lisa are now the Senior Pastors at Xcel where they share a vision for an exciting and relevant church which will change lives.
        </p>
        <p>
          As well as total commitment to building church, John’s loves also include Liverpool FC, Starbucks Coffee and historical epic Movies.
        </p>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>