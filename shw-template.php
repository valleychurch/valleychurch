<?php
/*
Template Name: Six Hot Weekends
 */

get_header(); ?>

<link rel="stylesheet" type="text/css" href="http://cdn.valleychurch.eu/fontawesome/font-awesome.min.css"/>

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
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  -o-box-shadow: none;
  box-shadow: none;
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
  font-size: 48px;
  letter-spacing: -1px;
  font-weight: 900;
  line-height: 1.14;
  font-family: "franklin-gothic-urw-n9", "franklin-gothic-urw", "proxima-nova", sans-serif;
  }

  .intro
  {
  font-size: 23px;
  font-size: 1.438rem;
  line-height: 1.1;
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

  .ie7 .speaker-twitter .icon
  {
  display: none;
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
        Six weekends.<br/>
        Six special guests. <br/>
        Six opportunities to encounter God’s purpose for your life.
      </h3>
    </div>
    <div class="right paddedContent floatRight">
      <p class="shw intro">
        For six consecutive weeks Valley Church are privileged to host six incredible
        guest speakers at every service at every location. From all around the globe
        they will speak from the Bible and their own wealth of experience on topics
        that are useful for your life. As always at Valley our services are genuine,
        lively and relaxed. A full children’s programme for ages 1-11s runs alongside,
        whilst our parent and baby facility is available for 0-1s, and a youth programme
        for 11-14s in the evening. Join us in our lively café which is open after each
        service. Everyone is welcome.
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
  <div class="speaker cf">
    <div class="speaker-photo left paddedContent floatLeft">
      <img src="http://cdn.valleychurch.eu/images/shw/shw_speaker_2.jpg" />
    </div>
    <div class="speaker-details right paddedContent floatRight">
      <div class="gamma speaker-date">
        2nd June
      </div>
      <div class="alpha speaker-name">
        Jen Baker
      </div>
      <div class="delta speaker-church">
        Hope City Church
      </div>
      <div class="delta speaker-twitter cf">
        <i class="icon icon-twitter"></i> <a href="https://twitter.com/jenbakerinspire" target="_blank">@jenbakerinspire</a>
      </div>

      <div class="speaker-info">
        <p>
          A born communicator, Jen loves preaching the word of God with clarity, conviction, humour and stories!
        </p>

        <p>
          In 2012, following a divine connection with Jenny Gilpin – Senior Pastor of Hope City Church and Chief Executive of City Hearts,
          Jen moved to Sheffield to join the Leadership Team of Hope City Church. Jen also took up the position of Anti-Trafficking Director
          for City Hearts.
        </p>

        <p>
          Jen is driven by a deep passion to 'make God tangible' for people in and outside the church. She is a speaker, teacher, pastor and writer,
          who firmly believes 'the best is YET to come'! Her preaching challenges and unlocks personal potential within others; equipping them by
          bringing revelation of the Father's love for them and their destiny.
        </p>
      </div>
    </div>
  </div>
  <div class="speaker cf">
    <div class="speaker-photo left paddedContent floatLeft">
      <img src="http://cdn.valleychurch.eu/images/shw/shw_speaker_3.jpg" />
    </div>
    <div class="speaker-details right paddedContent floatRight">
      <div class="gamma speaker-date">
        9th June
      </div>
      <div class="alpha speaker-name">
        Dave Gilpin
      </div>
      <div class="delta speaker-church">
        Hope City Church
      </div>
      <div class="delta speaker-twitter cf">
        <i class="icon icon-twitter"></i> <a href="https://twitter.com/davegilpin" target="_blank">@davegilpin</a>
      </div>

      <div class="speaker-info">
        <p>
          Dave and his wife Jenny pioneered Hope City Church in Sheffield in 1991 after sensing the call of God on their lives to the UK following the Hillsborough Stadium disaster. Since then, they have established congregations in Liverpool, Leeds, Newcastle, Birmingham, Preston, Accra, Frankfurt and most recently London! Dave is based in Sheffield and oversees Hope City as one church in ten locations.
	</p>

	<p>
	  Dave is a sought after communicator with twenty five years ministry experience as a pioneer. His leadership and creativity mixed with a gift of faith have proved to be a powerful combination which has seen many people be empowered and encouraged to live out the call of God on their lives. Quirky and eccentric are two words you can use to describe him. His life is living proof that God turns weaknesses into strengths and you are sure to catch his infectious passion for the House of God and the people who are yet to find it.
        </p>
      </div>
    </div>
  </div>
  <div class="speaker cf">
    <div class="speaker-photo left paddedContent floatLeft">
      <img src="http://cdn.valleychurch.eu/images/shw/shw_speaker_4.jpg" />
    </div>
    <div class="speaker-details right paddedContent floatRight">
      <div class="gamma speaker-date">
        16th June
      </div>
      <div class="alpha speaker-name">
        Scott Wilson
      </div>
      <div class="delta speaker-church">
        ICLM &amp; Eurolead
      </div>
      <div class="delta speaker-twitter cf">
        <i class="icon icon-twitter"></i>
        <a href="https://twitter.com/scottwilson__" target="_blank">@scottwilson__</a>
      </div>

      <div class="speaker-info">
        <p>
          Founder of Eurolead.net and ICLM—The Institute for Creativity, Leadership and Management. Based in Denmark, Scott travels extensively in Scandinavia, Europe and beyond, teaching, preaching and consulting with churches. He passionately believes in building and strengthening the new European Churches, and raising up a new generation of strong leaders.
        </p>

        <p>
          Scott is also the keynote speaker at our very first Valley Conference on Saturday 15th June. Find out more information and register over at <a href="http://valleychurch.eu/conference">valleychurch.eu/conference</a>
        </p>
      </div>
    </div>
  </div>
  <div class="speaker cf">
    <div class="speaker-photo left paddedContent floatLeft">
      <img src="http://cdn.valleychurch.eu/images/shw/shw_speaker_5.jpg" />
    </div>
    <div class="speaker-details right paddedContent floatRight">
      <div class="gamma speaker-date">
        23rd June
      </div>
      <div class="alpha speaker-name">
        Jason Gowland
      </div>
      <div class="delta speaker-church">
        Edge Church, Bristol
      </div>
      <div class="delta speaker-twitter cf">
        <i class="icon icon-twitter"></i>
        <a href="https://twitter.com/jGowland" target="_blank">@jGowland</a>
      </div>

      <div class="speaker-info">
        <p>Jason Gowland is the Executive Minister of Edge Church's first international church plant in the UK, Edge Church Bristol.</p>

        <p>Jason and his wife Kim are passionate about encouraging, discipling, equipping and releasing others into an exciting and biblical understanding of who they are in God and what they can accomplish.</p>
      </div>
    </div>
  </div>
  <div class="speaker cf">
    <div class="speaker-photo left paddedContent floatLeft">
      <img src="http://cdn.valleychurch.eu/images/shw/shw_speaker_6.jpg" />
    </div>
    <div class="speaker-details right paddedContent floatRight">
      <div class="gamma speaker-date">
        30th June
      </div>
      <div class="alpha speaker-name">
        Jon Cook
      </div>
      <div class="delta speaker-church">
        Newcastle CLC
      </div>
      <div class="delta speaker-twitter cf">
        <i class="icon icon-twitter"></i>
        <a href="https://twitter.com/jonscook" target="_blank">@jonscook</a>
      </div>

      <div class="speaker-info">
        <p>Jon Cook is the Senior Pastor of Newcastle Christian Life Centre, whose mission is "to reach and influence the world by building a large Christ-centred, bible-based church, changing mindsets and empowering people to lead and impact in every sphere of life."</p>

        <p>Jon leads NCLC alongside his wife Dee, has three kids, and is a supporter of Middlesborough FC.</p>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>