<?php
/*
Template Name: Sales Assistance OTIS Trial Videos
*/

 get_header(); do_action( 'foundationpress_before_content' ); ?>

<style>
  div.title.row.flex-center {display:flex;align-items:center;margin-bottom:48px !important;}
  ul.filter-nav {max-height:100vh;overflow-y:scroll;margin:0 0;padding:12px;list-style:none;background:#ffffff;border-radius:3px;box-shadow:21px 21px 60px rgb(156 157 158), -21px -21px 60px rgb(255 255 255);}
  ul.filter-nav li {display:block;list-style:none;cursor:pointer;}
  ul.filter-nav li button {width:100%;display:block;position:relative;margin:6px 0;padding:9px;background:transparent;border-radius:3px;text-align:left;font-weight:600;font-size:15px;cursor:pointer;}
  ul.filter-nav li button.selected, ul.filter-nav li button:hover {background:rgb(50,62,72);color:#ffffff;cursor:pointer;}
  ul.filter-nav li button.selected::after { content:'';height:12px;width:6px;display:inline-block;position:absolute;right:15px;transform:rotate(45deg);border-bottom:2px solid white;border-right:2px solid white;}
  #otis-sample-videos .player-card.card .card-section {padding:15px 24px 42px 24px;text-align:left;}
  #otis-sample-videos .player-card.card .card-section h4 {font-weight:700;font-size:18px;}
  #otis-sample-videos .player-card.card .card-section form.player-options {position:relative;}
  #otis-sample-videos .player-card.card .card-section form.player-options button {positin:relative;display:inline-block;margin:0 auto;padding:.75rem;border-radius:6px;font-weight: 600;font-size:12px;}
  #otis-sample-videos .player-card.card .card-section form.player-options button.details {z-index:100;margin-right:9px;background:transparent;border:2px solid rgb(50,62,72);}
  #otis-sample-videos .player-card.card .card-section form.player-options button.details:hover {background:rgb(50,62,72);color:#ffffff;}
  #otis-sample-videos .player-card.card .card-section form.player-options button.share {background:#00b4e4;border:2px solid #00b4e4;color:#ffffff;}
  #otis-sample-videos .player-card.card .card-section form.player-options .description {opacity:0;width:calc(100% + 60px);position:absolute;top:39px;left:-30px;z-index:1;visibility:hidden;padding:9px;background:#ffffff;box-shadow:21px 21px 60px rgb(156 157 158), -21px -21px 60px rgb(255 255 255);border-radius:9px;transition: all 0.2s ease-in-out;}
  #otis-sample-videos .player-card.card .card-section form.player-options .description p {margin:0 auto;text-transform:none;font-weight:400;font-size:10px;color:#000000;}
  #otis-sample-videos .player-card.card .card-section form.player-options button.details:hover + div.description {opacity:1;visibility:visible;top:54px;}
  .results-container .no-results-message {width:100%;display:none;padding-top:45px;}
  .results-container.no-results-found .no-results-message {display:block;}
</style>
<main id="sales-assistance-portal">
<?php get_template_part( 'template-parts/sales-header', 'none' ); ?>
 <div class="container archive-content">
   <div class="title row flex-center">
		 <div class="column small-12 medium-8">
			 <h1><img src="../images/OTIS-for-educators.svg" style="max-width:240px;" /> <strong>Sample Videos</strong></h1>
		 </div>
     <div class="column small-12 medium-4">
       <a href="https://otis.teq.com/events/pdf" class="button" style="margin-bottom:0;border-radius:6px;font-weight:700;font-size:14px;">Download a complete list of all vidoes by category</a>
     </div>
	 </div>
	 <div class="row archives">
     <nav class="column small-6 medium-3">
       <ul id="video-filter" class="filter-nav">
         <li style="font-size:12px;font-weight:700;text-align:left;border-bottom:1px solid rgb(50,62,72);">FILTER VIDEOS BY:</li>
         <li><button type="button" value="ALL">ALL</button></li>
         <li><button type="button" value="Administrator">Administrator</button></li>
         <li><button type="button" value="Apple-for-Parents">Apple for Parents</button></li>
         <li><button type="button" value="Assessment">Assessment</button></li>
         <li><button type="button" value="Blended-Learning">Blended Learning</button></li>
         <li><button type="button" value="Canvas">Canvas</button></li>
         <li><button type="button" value="Canvas-for-Parents">Canvas for Parents</button></li>
         <li><button type="button" value="Chromebooks-for-Parents">Chromebooks for Parents</button></li>
         <li><button type="button" value="Civics">Civics</button></li>
         <li><button type="button" value="Computer-Science">Computer Science</button></li>
         <li><button type="button" value="Digital-Accessiblity">Digital Accessiblity</button></li>
         <li><button type="button" value="Digital-Citizenship">Digital Citizenship</button></li>
         <li><button type="button" value="Digital-Storytelling">Digital Storytelling</button></li>
         <li><button type="button" value="Early-Childhood">Early Childhood</button></li>
         <li><button type="button" value="Educational-Frameworks">Educational Frameworks</button></li>
         <li><button type="button" value="ELA">ELA</button></li>
         <li><button type="button" value="ENL-ELL">ENL/ELL</button></li>
         <li><button type="button" value="General-Interest">General Interest</button></li>
         <li><button type="button" value="GoGuardian">GoGuardian</button></li>
         <li><button type="button" value="Google">Google</button></li>
         <li><button type="button" value="Google-for-Parents">Google for Parents</button></li>
         <li><button type="button" value="Infinite-Campus-for-Parents">Infinite Campus for Parents</button></li>
         <li><button type="button" value="iPad">iPad</button></li>
         <li><button type="button" value="iPads-for-Parents">iPads for Parents</button></li>
         <li><button type="button" value="Literacy">Literacy</button></li>
         <li><button type="button" value="Lumio-by-SMART-Technologies">Lumio by SMART Technologies</button></li>
         <li><button type="button" value="Math">Math</button></li>
         <li><button type="button" value="Microsoft">Microsoft</button></li>
         <li><button type="button" value="Microsoft-for-Parents">Microsoft for Parents</button></li>
         <li><button type="button" value="Parents">Parents</button></li>
         <li><button type="button" value="Project-Based-Learning">Project Based Learning</button></li>
         <li><button type="button" value="Promethean">Promethean</button></li>
         <li><button type="button" value="Remote-Learning">Remote Learning</button></li>
         <li><button type="button" value="Rube-Goldberg">Rube Goldberg</button></li>
         <li><button type="button" value="Schoology">Schoology</button></li>
         <li><button type="button" value="Science">Science</button></li>
         <li><button type="button" value="SMART">SMART</button></li>
         <li><button type="button" value="Social-Emotional-Learning">Social Emotional Learning</button></li>
         <li><button type="button" value="Social-Studies">Social Studies</button></li>
         <li><button type="button" value="Special-Ed">Special Ed</button></li>
         <li><button type="button" value="STEM">STEM</button></li>
         <li><button type="button" value="Website-Makeover">Website Makeover</button></li>
       </ul>
     </nav>
     <div class="column small-6 medium-9">
       <div id="otis-sample-videos" class="row archives results-container">

<div class="column small-12 medium-4 sample-vid ALL Blended-Learning Social-Emotional-Learning Special-Ed Gateway-Group">
  <div class="player-card card">
    <div class="player" data-player-id="4be99d0f-58cd-4c0a-8d66-6c11ff0ada39">
      <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/7/flowplayer.async.js">
      { "src": "31fb53d3-5808-41d3-9b0c-3a1a6d2b5559" }
      </script>
    </div>
    <div class="card-section">
      <form action="https://www.teq.com/otis-sample-video-player" method="get" target="_blank" class="player-options">
        <h4>Keeping Routines for Special Ed Students</h4>
        <button class="details" type="button">DETAILS</button>
        <div class="description">
          <p>As special educators, we know that schedules, sensory support, and close collaboration with parents and caregivers is crucial during home-based instruction situations. Join us as we share strategies for special education teachers to tailor instructional materials to meet each student's needs and keep routines as consistent as possible in an alternate setting. We'll share scheduling templates, suggestions for specialized coaching and instruction, and other digital resources to support behavioral and social needs to help keep students on task no matter the setting.</p>
        </div>
        <input type="hidden" name="title" value="Keeping Routines for Special Ed Students" />
        <input type="hidden" name="description" value="As special educators, we know that schedules, sensory support, and close collaboration with parents and caregivers is crucial during home-based instruction situations. Join us as we share strategies for special education teachers to tailor instructional materials to meet each student's needs and keep routines as consistent as possible in an alternate setting. We'll share scheduling templates, suggestions for specialized coaching and instruction, and other digital resources to support behavioral and social needs to help keep students on task no matter the setting." />
        <input type="hidden" name="id" value="31fb53d3-5808-41d3-9b0c-3a1a6d2b5559" />
        <button class="share" type="submit">SHARE VIDEO LINK</button>
      </form>
    </div>
  </div>
</div>
<div class="column small-12 medium-4 sample-vid ALL Special-Ed Social-Emotional-Learning">
  <div class="player-card card">
    <div class="player" data-player-id="4be99d0f-58cd-4c0a-8d66-6c11ff0ada39">
      <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/7/flowplayer.async.js">
      { "src": "ad16e491-19d7-4fb4-82b1-22bce01647ab" }
      </script>
    </div>
    <div class="card-section">
      <h4>Social Emotional Learning with Storyboards</h4>
      <form action="https://www.teq.com/otis-sample-video-player" method="get" target="_blank" class="player-options">
        <button class="details" type="button">DETAILS</button>
        <div class="description">
          <p>Do you have a student who is frequently becoming frustrated with what seems like simple tasks and isn't sure how to act in general social situations? Join our Curriculum Specialists and Teddy as we take a look at creating and implementing Storyboards in your classroom.  Storyboards help students develop skills to combat difficulties throughout the day while incorporating different components of social emotional learning techniques in a safe environment.  Learning how Teddy reacts in difficult situations gives students the necessary tools to get through their own day with less frustrations and difficulties.</p>
        </div>
        <input type="hidden" name="title" value="Social Emotional Learning with Storyboards" />
        <input type="hidden" name="description" value="Do you have a student who is frequently becoming frustrated with what seems like simple tasks and isn't sure how to act in general social situations? Join our Curriculum Specialists and Teddy as we take a look at creating and implementing Storyboards in your classroom.  Storyboards help students develop skills to combat difficulties throughout the day while incorporating different components of social emotional learning techniques in a safe environment.  Learning how Teddy reacts in difficult situations gives students the necessary tools to get through their own day with less frustrations and difficulties." />
        <input type="hidden" name="id" value="ad16e491-19d7-4fb4-82b1-22bce01647ab" />
        <button class="share" type="submit">SHARE VIDEO LINK</button>
      </form>
    </div>
  </div>
</div>
<div class="column small-12 medium-4 sample-vid ALL Administrator Blended-Learning Google Hauppauge-Staff-Created-Content Jefferson-Lewis-BOCES Remote-Learning NYSCATE">
  <div class="player-card card">
    <div class="player" data-player-id="4be99d0f-58cd-4c0a-8d66-6c11ff0ada39">
      <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/7/flowplayer.async.js">
      { "src": "139df749-9b64-45c8-9a45-288dbab8b5f5" }
      </script>
    </div>
    <div class="card-section">
      <h4>Remote Learning: Things to Consider</h4>
      <form action="https://www.teq.com/otis-sample-video-player" class="player-options">
        <button class="details" type="button">DETAILS</button>
        <div class="description">
          <p>Join Joseph and Matt as they share tips and things to consider as you prepare for Remote Learning in your school or District. </p>
        </div>
        <input type="hidden" name="title" value="Remote Learning: Things to Consider" />
        <input type="hidden" name="description" value="Join Joseph and Matt as they share tips and things to consider as you prepare for Remote Learning in your school or District." />
        <input type="hidden" name="id" value="139df749-9b64-45c8-9a45-288dbab8b5f5" />
        <button class="share" type="submit">SHARE VIDEO LINK</button>
      </form>
    </div>
  </div>
</div>
<div class="column small-12 medium-4 sample-vid ALL Blended-Learning Social-Emotional-Learning Special-Ed Gateway-Group">
  <div class="player-card card" data-player-tags="">
    <div class="player" data-player-id="4be99d0f-58cd-4c0a-8d66-6c11ff0ada39">
      <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/7/flowplayer.async.js">
      { "src": "a6e38dc3-1a37-42d1-8168-91563cc53e46" }
      </script>
    </div>
    <div class="card-section">
      <h4>Creating Vision Boards Using Google Slides</h4>
      <form action="https://www.teq.com/otis-sample-video-player" class="player-options">
        <button class="details" type="button">DETAILS</button>
        <div class="description">
          <p>Whether you're looking for a great end of year activity or are already storing away ideas for the next school year, we have a fun and engaging project to share that incorporates Google Slides! Google Slides can be used for much more than student research projects. In this session, we'll talk about how you can use Google Slides to create a vision board project with your students to get them reflecting on and thinking about their futures.</p>
        </div>
        <input type="hidden" name="title" value="Creating Vision Boards Using Google Slides" />
        <input type="hidden" name="description" value="Whether you're looking for a great end of year activity or are already storing away ideas for the next school year, we have a fun and engaging project to share that incorporates Google Slides! Google Slides can be used for much more than student research projects. In this session, we'll talk about how you can use Google Slides to create a vision board project with your students to get them reflecting on and thinking about their futures." />
        <input type="hidden" name="id" value="a6e38dc3-1a37-42d1-8168-91563cc53e46" />
        <button class="share" type="submit">SHARE VIDEO LINK</button>
      </form>
    </div>
  </div>
</div>
<div class="column small-12 medium-4 sample-vid ALL SMART Remote-Learning Valley-Stream-30 Lumio-by-SMART-Technologies">
  <div class="player-card card" data-player-tags="">
    <div class="player" data-player-id="4be99d0f-58cd-4c0a-8d66-6c11ff0ada39">
      <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/7/flowplayer.async.js">
      { "src": "0e46a21e-e5c4-47be-aedb-5aedf63dca11" }
      </script>
    </div>
    <div class="card-section">
      <h4>Introduction to Lumio</h4>
      <form action="https://www.teq.com/otis-sample-video-player" class="player-options">
        <button class="details" type="button">DETAILS</button>
        <div class="description">
          <p>Lumio, formerly know as SMART Learning Suite Online (SLSO) gives teachers a place to create classroom activities, assessments, and enhance archived lessons to extend learning. Join us as we walk through Lumio features that will help you to add an interactive spin to your static lessons that will spark engagement in your students. We'll explore ready-made activity templates and complimentary lesson files that can be easily adapted to fit your classroom!</p>
        </div>
        <input type="hidden" name="title" value="Introduction to Lumio" />
        <input type="hidden" name="description" value="Lumio, formerly know as SMART Learning Suite Online (SLSO) gives teachers a place to create classroom activities, assessments, and enhance archived lessons to extend learning. Join us as we walk through Lumio features that will help you to add an interactive spin to your static lessons that will spark engagement in your students. We'll explore ready-made activity templates and complimentary lesson files that can be easily adapted to fit your classroom!" />
        <input type="hidden" name="id" value="0e46a21e-e5c4-47be-aedb-5aedf63dca11" />
        <button class="share" type="submit">SHARE VIDEO LINK</button>
      </form>
    </div>
  </div>
</div>
<div class="column small-12 medium-4 sample-vid ALL General-Interest Remote-Learning Schoology">
  <div class="player-card card" data-player-tags="">
    <div class="player" data-player-id="4be99d0f-58cd-4c0a-8d66-6c11ff0ada39">
      <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/7/flowplayer.async.js">
      { "src": "b40c0a47-b83b-4278-a476-5f47c6579ad1" }
      </script>
    </div>
    <div class="card-section">
      <h4>Introduction to Schoology</h4>
      <form action="https://www.teq.com/otis-sample-video-player" class="player-options">
        <button class="details" type="button">DETAILS</button>
        <div class="description">
          <p>Does technology hold the key to academic success? Schoology is a virtual learning environment that allows you to create, manage, and share academic content with the students in your K-12 class. Join our team as we explore the schoology platform and how it helps to improve student performance, foster collaboration, and deliver a personalized learning experience for students.</p>
        </div>
        <input type="hidden" name="title" value="Introduction to Schoology" />
        <input type="hidden" name="description" value="Does technology hold the key to academic success? Schoology is a virtual learning environment that allows you to create, manage, and share academic content with the students in your K-12 class. Join our team as we explore the schoology platform and how it helps to improve student performance, foster collaboration, and deliver a personalized learning experience for students." />
        <input type="hidden" name="id" value="b40c0a47-b83b-4278-a476-5f47c6579ad1" />
        <button class="share" type="submit">SHARE VIDEO LINK</button>
      </form>
    </div>
  </div>
</div>
<div class="column small-12 medium-4 sample-vid ALL Remote-Learning ELA Social-Studies Literacy">
  <div class="player-card card" data-player-tags="">
    <div class="player" data-player-id="4be99d0f-58cd-4c0a-8d66-6c11ff0ada39">
      <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/7/flowplayer.async.js">
      { "src": "c8e4ab55-39e7-4e2a-83b4-37c724d3150b" }
      </script>
    </div>
    <div class="card-section">
      <h4>Creating Interactive Vocabulary Lists Using Thinglink</h4>
      <form action="https://www.teq.com/otis-sample-video-player" class="player-options">
        <button class="details" type="button">DETAILS</button>
        <div class="description">
          <p>Vocabulary lists are used in almost every classroom and rarely offer any interactive engagement for students. Join us as we talk about Thinglink, a website that allows students to create interactive displays and virtual tours that connect the tactile world to the digital world. With Thinglink, we will show you how to make vocabulary lists with your students that are interactive, informative, and meaningful.</p>
        </div>
        <input type="hidden" name="title" value="Creating Interactive Vocabulary Lists Using Thinglink" />
        <input type="hidden" name="description" value="Vocabulary lists are used in almost every classroom and rarely offer any interactive engagement for students. Join us as we talk about Thinglink, a website that allows students to create interactive displays and virtual tours that connect the tactile world to the digital world. With Thinglink, we will show you how to make vocabulary lists with your students that are interactive, informative, and meaningful." />
        <input type="hidden" name="id" value="c8e4ab55-39e7-4e2a-83b4-37c724d3150b" />
        <button class="share" type="submit">SHARE VIDEO LINK</button>
      </form>
    </div>
  </div>
</div>
<div class="column small-12 medium-4 sample-vid ALL Google Remote-Learning Social-Emotional-Learning Art-Design">
  <div class="player-card card" data-player-tags="">
    <div class="player" data-player-id="4be99d0f-58cd-4c0a-8d66-6c11ff0ada39">
      <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/7/flowplayer.async.js">
      { "src": "9c9177b4-713f-4d37-bf80-6c28f1ffc283" }
      </script>
    </div>
    <div class="card-section">
      <h4>Creating Self-Portraits for Social-Emotional Learning Using Google Drawings</h4>
      <form action="https://www.teq.com/otis-sample-video-player" class="player-options">
        <button class="details" type="button">DETAILS</button>
        <div class="description">
          <p>Are you looking for a creative activity to bring to your students? Join us as we explore how to create self-portraits online using Google Drawings. We will discuss how this project can teach your students vital social-emotional skills to help them academically and emotionally. We will also discuss unique ways to get students creating and reflecting on their self-portrait design.</p>
        </div>
        <input type="hidden" name="title" value="Creating Self-Portraits for Social-Emotional Learning Using Google Drawings" />
        <input type="hidden" name="description" value="Are you looking for a creative activity to bring to your students? Join us as we explore how to create self-portraits online using Google Drawings. We will discuss how this project can teach your students vital social-emotional skills to help them academically and emotionally. We will also discuss unique ways to get students creating and reflecting on their self-portrait design." />
        <input type="hidden" name="id" value="9c9177b4-713f-4d37-bf80-6c28f1ffc283" />
        <button class="share" type="submit">SHARE VIDEO LINK</button>
      </form>
    </div>
  </div>
</div>
<div class="column small-12 medium-4 sample-vid ALL Digital-Storytelling Apple">
  <div class="player-card card" data-player-tags="">
    <div class="player" data-player-id="4be99d0f-58cd-4c0a-8d66-6c11ff0ada39">
      <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/7/flowplayer.async.js">
      { "src": "19f19c3c-4638-4e27-be0c-e4de4bcceca4" }
      </script>
    </div>
    <div class="card-section">
      <h4>Digital Storytelling with iMovie 10.1</h4>
      <form action="https://www.teq.com/otis-sample-video-player" class="player-options">
        <button class="details" type="button">DETAILS</button>
        <div class="description">
          <p>Things are getting spooky around here at Teq!  In preparation for Halloween, the PD team has prepared an exciting session that will discuss how teachers and students can utilize iMovie 10.1 to demonstrate creativity and convey elements of effective storytelling. We'll point out useful updates and fantastic features including Trailer Templates, Storyboards, and Outlines that will help transform the ordinary classroom into an innovative film studio!  See you there in your scary-wear!</p>
        </div>
        <input type="hidden" name="title" value="Digital Storytelling with iMovie 10.1" />
        <input type="hidden" name="description" value="Things are getting spooky around here at Teq!  In preparation for Halloween, the PD team has prepared an exciting session that will discuss how teachers and students can utilize iMovie 10.1 to demonstrate creativity and convey elements of effective storytelling. We'll point out useful updates and fantastic features including Trailer Templates, Storyboards, and Outlines that will help transform the ordinary classroom into an innovative film studio!  See you there in your scary-wear!" />
        <input type="hidden" name="id" value="19f19c3c-4638-4e27-be0c-e4de4bcceca4" />
        <button class="share" type="submit">SHARE VIDEO LINK</button>
      </form>
    </div>
  </div>
</div>
<div class="column small-12 medium-4 sample-vid ALL STEM Early-Childhood Literacy">
  <div class="player-card card" data-player-tags="">
    <div class="player" data-player-id="4be99d0f-58cd-4c0a-8d66-6c11ff0ada39">
      <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/7/flowplayer.async.js">
      { "src": "ee7607cf-6f76-4558-a9fe-7ba548bc6611" }
      </script>
    </div>
    <div class="card-section">
      <h4>Picture This: Teaching STEAM Through Fairy Tales </h4>
      <form action="https://www.teq.com/otis-sample-video-player" class="player-options">
        <button class="details" type="button">DETAILS</button>
        <div class="description">
          <p>Fairy tales are perfect for connecting STEAM and literacy learning! Engage your students with hands-on engineering challenges that use the beloved classic fairy tales, as well as some modern ones.</p>
        </div>
        <input type="hidden" name="title" value="Picture This: Teaching STEAM Through Fairy Tales" />
        <input type="hidden" name="description" value="Fairy tales are perfect for connecting STEAM and literacy learning! Engage your students with hands-on engineering challenges that use the beloved classic fairy tales, as well as some modern ones." />
        <input type="hidden" name="id" value="ee7607cf-6f76-4558-a9fe-7ba548bc6611" />
        <button class="share" type="submit">SHARE VIDEO LINK</button>
      </form>
    </div>
  </div>
</div>
<div class="column small-12 medium-4 sample-vid ALL Blended-Learning Math Remote-Learning">
  <div class="player-card card" data-player-tags="">
    <div class="player" data-player-id="4be99d0f-58cd-4c0a-8d66-6c11ff0ada39">
      <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/7/flowplayer.async.js">
      { "src": "feb98f2f-50ce-423b-b9e4-b8238a0ecad7" }
      </script>
    </div>
    <div class="card-section">
      <h4>GeoGebra Tools for Math Practice</h4>
      <form action="https://www.teq.com/otis-sample-video-player" class="player-options">
        <button class="details" type="button">DETAILS</button>
        <div class="description">
          <p>Interested in learning how GeoGebra can help increase math achievement in your class? In this course, we'll explore the website and how it can help you introduce and provide opportunities for students to practice different math concepts including geometry, algebra, tables, and graphing.</p>
        </div>
        <input type="hidden" name="title" value="GeoGebra Tools for Math Practice" />
        <input type="hidden" name="description" value="Interested in learning how GeoGebra can help increase math achievement in your class? In this course, we'll explore the website and how it can help you introduce and provide opportunities for students to practice different math concepts including geometry, algebra, tables, and graphing." />
        <input type="hidden" name="id" value="feb98f2f-50ce-423b-b9e4-b8238a0ecad7" />
        <button class="share" type="submit">SHARE VIDEO LINK</button>
      </form>
    </div>
  </div>
</div>
<div class="column small-12 medium-4 sample-vid ALL ENL-ELL STEM Literacy">
  <div class="player-card card" data-player-tags="">
    <div class="player" data-player-id="4be99d0f-58cd-4c0a-8d66-6c11ff0ada39">
      <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/7/flowplayer.async.js">
      { "src": "854235b3-e0b5-4d50-9df0-cfa013c191d2" }
      </script>
    </div>
    <div class="card-section">
      <h4>Expanding ELL Vocabulary Through STEM</h4>
      <form action="https://www.teq.com/otis-sample-video-player" class="player-options">
        <button class="details" type="button">DETAILS</button>
        <div class="description">
          <p>Are you struggling to find the right tools to bridge the gap between STEM and ELL vocabulary? We know that teaching ELLs outside of the English classroom can be challenging, but communicating through STEM subjects can make it that much easier! In this session, we'll discuss strategies to increase acquisition of academic English language through STEM and NGSS across all grade levels. We will also learn how STEM literacy and English Language Learner literacy can be used productively together.</p>
        </div>
        <input type="hidden" name="title" value="Expanding ELL Vocabulary Through STEM" />
        <input type="hidden" name="description" value="Are you struggling to find the right tools to bridge the gap between STEM and ELL vocabulary? We know that teaching ELLs outside of the English classroom can be challenging, but communicating through STEM subjects can make it that much easier! In this session, we'll discuss strategies to increase acquisition of academic English language through STEM and NGSS across all grade levels. We will also learn how STEM literacy and English Language Learner literacy can be used productively together." />
        <input type="hidden" name="id" value="854235b3-e0b5-4d50-9df0-cfa013c191d2" />
        <button class="share" type="submit">SHARE VIDEO LINK</button>
      </form>
    </div>
  </div>
</div>
<div class="column small-12 medium-4 sample-vid ALL Google ENL-ELL Assessment Remote-Learning Blended-Learning">
  <div class="player-card card" data-player-tags="">
    <div class="player" data-player-id="4be99d0f-58cd-4c0a-8d66-6c11ff0ada39">
      <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/7/flowplayer.async.js">
      { "src": "0bbd08cb-88f1-4e6b-a77b-87c4e9063d67" }
      </script>
    </div>
    <div class="card-section">
      <h4>Formative Assessments for ELLs Using Pear Deck</h4>
      <form action="https://www.teq.com/otis-sample-video-player" class="player-options">
        <button class="details" type="button">DETAILS</button>
        <div class="description">
          <p>Formative assessments are a great way to monitor student understanding, but are particularly useful for ELLs. Pear Deck is a Google add-on that makes it easy to include quick, virtual, formative assessments in your existing Google Slide presentations. In this session, we'll demonstrate and discuss the advantages of using Pear Deck.</p>
        </div>
        <input type="hidden" name="title" value="Formative Assessments for ELLs Using Pear Deck" />
        <input type="hidden" name="description" value="Formative assessments are a great way to monitor student understanding, but are particularly useful for ELLs. Pear Deck is a Google add-on that makes it easy to include quick, virtual, formative assessments in your existing Google Slide presentations. In this session, we'll demonstrate and discuss the advantages of using Pear Deck." />
        <input type="hidden" name="id" value="0bbd08cb-88f1-4e6b-a77b-87c4e9063d67" />
        <button class="share" type="submit">SHARE VIDEO LINK</button>
      </form>
    </div>
  </div>
</div>
<div class="column small-12 medium-4 sample-vid ALL Social-Emotional-Learning Digital-Citizenship Blended-Learning">
  <div class="player-card card" data-player-tags="">
    <div class="player" data-player-id="4be99d0f-58cd-4c0a-8d66-6c11ff0ada39">
      <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/7/flowplayer.async.js">
      { "src": "1aeb460b-6924-4a0a-b20b-6e3aaa0a7be3" }
      </script>
    </div>
    <div class="card-section">
      <h4>Social Media in the Classroom</h4>
      <form action="https://www.teq.com/otis-sample-video-player" class="player-options">
        <button class="details" type="button">DETAILS</button>
        <div class="description">
          <p>Social media is an effective tool for opening up communication between teachers, students, and parents worldwide. Join us as we discuss the best practices for implementing popular social media networks into your classroom. We'll also show you how to use Twitter, Facebook, Instagram, and Pinterest to grow your own education- focused network. Let's explore how to communicate with our students and engage them in learning through social media!</p>
        </div>
        <input type="hidden" name="title" value="Social Media in the Classroom" />
        <input type="hidden" name="description" value="Social media is an effective tool for opening up communication between teachers, students, and parents worldwide. Join us as we discuss the best practices for implementing popular social media networks into your classroom. We'll also show you how to use Twitter, Facebook, Instagram, and Pinterest to grow your own education- focused network. Let's explore how to communicate with our students and engage them in learning through social media!" />
        <input type="hidden" name="id" value="1aeb460b-6924-4a0a-b20b-6e3aaa0a7be3" />
        <button class="share" type="submit">SHARE VIDEO LINK</button>
      </form>
    </div>
  </div>
</div>
<div class="column small-12 medium-4 sample-vid ALL Promethean">
  <div class="player-card card" data-player-tags="">
    <div class="player" data-player-id="4be99d0f-58cd-4c0a-8d66-6c11ff0ada39">
      <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/7/flowplayer.async.js">
      { "src": "3026e525-745b-4434-9277-b7cf86f7d0dc" }
      </script>
    </div>
    <div class="card-section">
      <h4>Intro to Promethean ClassFlow</h4>
      <form action="https://www.teq.com/otis-sample-video-player" class="player-options">
        <button class="details" type="button">DETAILS</button>
        <div class="description">
          <p>ClassFlow is an in browser lesson building application created by Promethean. In ClassFlow you can create lessons, assessments, and assignments that are easily accessible at home or on the go! Join us as we go over the basics and discover what ClassFlow has to offer to help make your classroom more interactive and media rich.</p>
        </div>
        <input type="hidden" name="title" value="Intro to Promethean ClassFlow" />
        <input type="hidden" name="description" value="ClassFlow is an in browser lesson building application created by Promethean. In ClassFlow you can create lessons, assessments, and assignments that are easily accessible at home or on the go! Join us as we go over the basics and discover what ClassFlow has to offer to help make your classroom more interactive and media rich." />
        <input type="hidden" name="id" value="3026e525-745b-4434-9277-b7cf86f7d0dc" />
        <button class="share" type="submit">SHARE VIDEO LINK</button>
      </form>
    </div>
  </div>
</div>
<div class="column small-12 medium-4 sample-vid ALL Digital-Accessiblity">
  <div class="player-card card" data-player-tags="">
    <div class="player" data-player-id="adcf94ca-75d8-4152-9086-19a68e7e2d0d">
      <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/7/flowplayer.async.js">
      { "src": "adcf94ca-75d8-4152-9086-19a68e7e2d0d" }
      </script>
    </div>
    <div class="card-section">
      <h4>Formatting for Digital Accessibility</h4>
      <form action="https://www.teq.com/otis-sample-video-player" class="player-options">
        <button class="details" type="button">DETAILS</button>
        <div class="description">
          <p>Digital accessibility requires accessible formating. In this session you'll learn how to format accessible documents as well as how to evaluate documents for proper accessibility formats.</p>
        </div>
        <input type="hidden" name="title" value="Formatting for Digital Accessibility" />
        <input type="hidden" name="description" value="Digital accessibility requires accessible formating. In this session you'll learn how to format accessible documents as well as how to evaluate documents for proper accessibility formats." />
        <input type="hidden" name="id" value="adcf94ca-75d8-4152-9086-19a68e7e2d0d" />
        <button class="share" type="submit">SHARE VIDEO LINK</button>
      </form>
    </div>
  </div>
</div>
<div class="column small-12 medium-4 sample-vid ALL Social-Studies">
  <div class="player-card card" data-player-tags="">
    <div class="player" data-player-id="4be99d0f-58cd-4c0a-8d66-6c11ff0ada39">
      <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/7/flowplayer.async.js">
      { "src": "5160d22c-ae71-41de-a796-c73d6ed1612b" }
      </script>
    </div>
    <div class="card-section">
      <h4>Digital DBQs for the Social Studies Classroom</h4>
      <form action="https://www.teq.com/otis-sample-video-player" class="player-options">
        <button class="details" type="button">DETAILS</button>
        <div class="description">
          <p>Effective document-based questions (DBQs) can be used to develop students' abilities to appreciate historical perspectives and hone their analytical skills. In this course you'll learn how to use various digital tools to create DBQ activities and templates to encourage inquiry and critical thinking.</p>
        </div>
        <input type="hidden" name="title" value="Digital DBQs for the Social Studies Classroom" />
        <input type="hidden" name="description" value="Effective document-based questions (DBQs) can be used to develop students' abilities to appreciate historical perspectives and hone their analytical skills. In this course you'll learn how to use various digital tools to create DBQ activities and templates to encourage inquiry and critical thinking." />
        <input type="hidden" name="id" value="5160d22c-ae71-41de-a796-c73d6ed1612b" />
        <button class="share" type="submit">SHARE VIDEO LINK</button>
      </form>
    </div>
  </div>
</div>
<div class="column small-12 medium-4 sample-vid ALL Administrator">
  <div class="player-card card" data-player-tags="">
    <div class="player" data-player-id="adcf94ca-75d8-4152-9086-19a68e7e2d0d">
      <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/7/flowplayer.async.js">
      { "src": "494cde4c-05a2-4301-8905-c21bd97c3637" }
      </script>
    </div>
    <div class="card-section">
      <h4>Evaluating Effective Classroom Technology Usage</h4>
      <form action="https://www.teq.com/otis-sample-video-player" class="player-options">
        <button class="details" type="button">DETAILS</button>
        <div class="description">
          <p>It is easy to walk into a classroom and see that a teacher has something displayed on an interactive whiteboard, but how do you really assess what type of learning is taking place? During this session, we will examine the utilization of Interactive Whiteboards, Laptops/Chromebooks, and iPads/Tablets into classroom instruction. Participants will leave this session able to apply two model frameworks for the integration of technology into classroom curriculum and content:  SAMR and T-PACK. We will look at effective tools for evaluation:  lesson planning templates and rubrics.  If you are concerned that your school technology investments may be underutilized, or you want to highlight your great technology pioneers, this session is for you.</p>
        </div>
        <input type="hidden" name="title" value="Evaluating Effective Classroom Technology Usage" />
        <input type="hidden" name="description" value="It is easy to walk into a classroom and see that a teacher has something displayed on an interactive whiteboard, but how do you really assess what type of learning is taking place? During this session, we will examine the utilization of Interactive Whiteboards, Laptops/Chromebooks, and iPads/Tablets into classroom instruction. Participants will leave this session able to apply two model frameworks for the integration of technology into classroom curriculum and content:  SAMR and T-PACK. We will look at effective tools for evaluation:  lesson planning templates and rubrics.  If you are concerned that your school technology investments may be underutilized, or you want to highlight your great technology pioneers, this session is for you." />
        <input type="hidden" name="id" value="494cde4c-05a2-4301-8905-c21bd97c3637" />
        <button class="share" type="submit">SHARE VIDEO LINK</button>
      </form>
    </div>
  </div>
</div>
<div class="column small-12 medium-4 sample-vid ALL Assessment">
  <div class="player-card card" data-player-tags="">
    <div class="player" data-player-id="4be99d0f-58cd-4c0a-8d66-6c11ff0ada39">
      <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/7/flowplayer.async.js">
      { "src": "333c0ab5-7dd8-42ae-ae4b-f9f0e700c645" }
      </script>
    </div>
    <div class="card-section">
      <h4>Using Common Assessment Data to Inform Instruction</h4>
      <form action="https://www.teq.com/otis-sample-video-player" class="player-options">
        <button class="details" type="button">DETAILS</button>
        <div class="description">
          <p>Forming assessments that are clearly defined for all students can be a challenging task. In this session, you'll learn the best practices for creating and using common assessment data. We'll review the importance of discussing and analyzing questions and answers for more accurate data comparison. We'll also cover formative and summative common assessments and the collaborative common assessment creation process.</p>
        </div>
        <input type="hidden" name="title" value="Using Common Assessment Data to Inform Instruction" />
        <input type="hidden" name="description" value="Forming assessments that are clearly defined for all students can be a challenging task. In this session, you'll learn the best practices for creating and using common assessment data. We'll review the importance of discussing and analyzing questions and answers for more accurate data comparison. We'll also cover formative and summative common assessments and the collaborative common assessment creation process." />
        <input type="hidden" name="id" value="333c0ab5-7dd8-42ae-ae4b-f9f0e700c645" />
        <button class="share" type="submit">SHARE VIDEO LINK</button>
      </form>
    </div>
  </div>
</div>
<div class="column small-12 medium-4 sample-vid ALL Apple iPad">
  <div class="player-card card" data-player-tags="">
    <div class="player" data-player-id="adcf94ca-75d8-4152-9086-19a68e7e2d0d">
      <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/7/flowplayer.async.js">
      { "src": "d434ffb8-4d53-4e44-8198-93f219e538fc" }
      </script>
    </div>
    <div class="card-section">
      <h4>Overview of iPadOS (iOS)</h4>
      <form action="https://www.teq.com/otis-sample-video-player" class="player-options">
        <button class="details" type="button">DETAILS</button>
        <div class="description">
          <p>Just received a new Apple iPad or upgraded to iPadOS? Join us as we go over the most recent updates to your favorite apple apps and accessibility options! iPadOS is the new iOS for iPads. </p>
        </div>
        <input type="hidden" name="title" value="Overview of iPadOS (iOS)" />
        <input type="hidden" name="description" value="Just received a new Apple iPad or upgraded to iPadOS? Join us as we go over the most recent updates to your favorite apple apps and accessibility options! iPadOS is the new iOS for iPads. " />
        <input type="hidden" name="id" value="d434ffb8-4d53-4e44-8198-93f219e538fc" />
        <button class="share" type="submit">SHARE VIDEO LINK</button>
      </form>
    </div>
  </div>
</div>
<div class="column small-12 medium-4 sample-vid ALL Remote-Learning Microsoft Microsoft-for-Parents">
  <div class="player-card card" data-player-tags="">
    <div class="player" data-player-id="4be99d0f-58cd-4c0a-8d66-6c11ff0ada39">
      <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/7/flowplayer.async.js">
      { "src": "770550e3-9174-4058-a1a3-5aa7713a0dea" }
      </script>
    </div>
    <div class="card-section">
      <h4>Microsoft Teams Overview for Parents</h4>
      <form action="https://www.teq.com/otis-sample-video-player" class="player-options">
        <button class="details" type="button">DETAILS</button>
        <div class="description">
          <p>So your student has been assigned work through Microsoft Teams. What does that mean? How can you see what they're working on? What can you do to help your student? In this course, we'll go over the basics of Microsoft Teams and what you need to know as a parent.</p>
        </div>
        <input type="hidden" name="title" value="Microsoft Teams Overview for Parents" />
        <input type="hidden" name="description" value="So your student has been assigned work through Microsoft Teams. What does that mean? How can you see what they're working on? What can you do to help your student? In this course, we'll go over the basics of Microsoft Teams and what you need to know as a parent." />
        <input type="hidden" name="id" value="770550e3-9174-4058-a1a3-5aa7713a0dea" />
        <button class="share" type="submit">SHARE VIDEO LINK</button>
      </form>
    </div>
  </div>
</div>
<div class="column small-12 medium-4 sample-vid ALL Blended-Learning Microsoft Remote-Learning Administrator">
  <div class="player-card card" data-player-tags="">
    <div class="player" data-player-id="adcf94ca-75d8-4152-9086-19a68e7e2d0d">
      <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/7/flowplayer.async.js">
      { "src": "3c94d982-d6ad-41fa-b4c8-cb090e9f59c5" }
      </script>
    </div>
    <div class="card-section">
      <h4>Using Microsoft Teams for School PLCs</h4>
      <form action="https://www.teq.com/otis-sample-video-player" class="player-options">
        <button class="details" type="button">DETAILS</button>
        <div class="description">
          <p>Just because teaching may look a little different right now, doesn't mean that professional learning communities (PLCs) can't continue! Join us as we explore how Microsoft Teams allows you to connect with others on your grade level or subject area while following a hybrid or remote learning model. We'll also share how to use Microsoft Teams to build off one another's ideas and how to easily share files and data with others in your PLC.</p>
        </div>
        <input type="hidden" name="title" value="Using Microsoft Teams for School PLCs" />
        <input type="hidden" name="description" value="Just because teaching may look a little different right now, doesn't mean that professional learning communities (PLCs) can't continue! Join us as we explore how Microsoft Teams allows you to connect with others on your grade level or subject area while following a hybrid or remote learning model. We'll also share how to use Microsoft Teams to build off one another's ideas and how to easily share files and data with others in your PLC." />
        <input type="hidden" name="id" value="3c94d982-d6ad-41fa-b4c8-cb090e9f59c5" />
        <button class="share" type="submit">SHARE VIDEO LINK</button>
      </form>
    </div>
  </div>
</div>
<div class="column small-12 medium-4 sample-vid ALL Blended-Learning Remote-Learning Canvas">
  <div class="player-card card" data-player-tags="">
    <div class="player" data-player-id="4be99d0f-58cd-4c0a-8d66-6c11ff0ada39">
      <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/7/flowplayer.async.js">
      { "src": "98dfe771-b91f-4592-a05a-3a18883e3c62" }
      </script>
    </div>
    <div class="card-section">
      <h4>Introduction to Canvas</h4>
      <form action="https://www.teq.com/otis-sample-video-player" class="player-options">
        <button class="details" type="button">DETAILS</button>
        <div class="description">
          <p>Are you looking for a Learning Management System to engage your students in online learning? Join us as we discuss Canvas; a platform where you can create lessons, store files, share activities with students, and communicate! In this session, we will also discuss how Canvas can be used by teachers, students, and parents. We will also explore how to set up accounts and dive into assignment creation and app integration!</p>
        </div>
        <input type="hidden" name="title" value="Introduction to Canvas" />
        <input type="hidden" name="description" value="Are you looking for a Learning Management System to engage your students in online learning? Join us as we discuss Canvas; a platform where you can create lessons, store files, share activities with students, and communicate! In this session, we will also discuss how Canvas can be used by teachers, students, and parents. We will also explore how to set up accounts and dive into assignment creation and app integration!" />
        <input type="hidden" name="id" value="98dfe771-b91f-4592-a05a-3a18883e3c62" />
        <button class="share" type="submit">SHARE VIDEO LINK</button>
      </form>
    </div>
  </div>
</div>
<div class="column small-12 medium-4 sample-vid ALL Project-Based-Learning">
  <div class="player-card card" data-player-tags="">
    <div class="player" data-player-id="adcf94ca-75d8-4152-9086-19a68e7e2d0d">
      <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/7/flowplayer.async.js">
      { "src": "a2efbc2a-56c7-4356-83db-6d34ff040a5d" }
      </script>
    </div>
    <div class="card-section">
      <h4>PBL: Driving Questions</h4>
      <form action="https://www.teq.com/otis-sample-video-player" class="player-options">
        <button class="details" type="button">DETAILS</button>
        <div class="description">
          <p>Every good Project-based learning activity starts with a driving question, so creating meaningful ones is essential to building an authentic PBL experiences for your students. In this course, we will discuss some ways of creating driving questions that are focused, open-ended and engaging.</p>
        </div>
        <input type="hidden" name="title" value="PBL: Driving Questions" />
        <input type="hidden" name="description" value="Every good Project-based learning activity starts with a driving question, so creating meaningful ones is essential to building an authentic PBL experiences for your students. In this course, we will discuss some ways of creating driving questions that are focused, open-ended and engaging." />
        <input type="hidden" name="id" value="a2efbc2a-56c7-4356-83db-6d34ff040a5d" />
        <button class="share" type="submit">SHARE VIDEO LINK</button>
      </form>
    </div>
  </div>
</div>
<div class="column small-12 medium-4 sample-vid ALL Administrator Educational-Frameworks General-Interest">
  <div class="player-card card" data-player-tags="">
    <div class="player" data-player-id="4be99d0f-58cd-4c0a-8d66-6c11ff0ada39">
      <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/7/flowplayer.async.js">
      { "src": "42bfe070-4705-4ae1-b9b4-047f346557f3" }
      </script>
    </div>
    <div class="card-section">
      <h4>EdTech Essentials Part 1: Curating Resources and Expanding Classroom Walls</h4>
      <form action="https://www.teq.com/otis-sample-video-player" class="player-options">
        <button class="details" type="button">DETAILS</button>
        <div class="description">
          <p>Join educator, author, and speaker Monica Burns and the OTIS for educators team for part one of this three-part webinar series that will explore essential EdTech topics alongside actionable tips and favorite tools. Learn about free and low-cost resources for student consumers that connect to reading, viewing, and listening experiences students have online. In this session, you'll explore the tools and the strategies for curating content for students with an emphasis on expanding classroom walls with digital resources.</p>
        </div>
        <input type="hidden" name="title" value="EdTech Essentials Part 1: Curating Resources and Expanding Classroom Walls" />
        <input type="hidden" name="description" value="Join educator, author, and speaker Monica Burns and the OTIS for educators team for part one of this three-part webinar series that will explore essential EdTech topics alongside actionable tips and favorite tools. Learn about free and low-cost resources for student consumers that connect to reading, viewing, and listening experiences students have online. In this session, you'll explore the tools and the strategies for curating content for students with an emphasis on expanding classroom walls with digital resources." />
        <input type="hidden" name="id" value="42bfe070-4705-4ae1-b9b4-047f346557f3" />
        <button class="share" type="submit">SHARE VIDEO LINK</button>
      </form>
    </div>
  </div>
</div>
<div class="column small-12 medium-4 sample-vid ALL Website-Makeover">
  <div class="player-card card" data-player-tags="">
    <div class="player" data-player-id="4be99d0f-58cd-4c0a-8d66-6c11ff0ada39">
      <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/7/flowplayer.async.js">
      { "src": "42bfe070-4705-4ae1-b9b4-047f346557f3" }
      </script>
    </div>
    <div class="card-section">
      <h4>Website Makeover Series: Telling Your School's Story</h4>
      <form action="https://www.teq.com/otis-sample-video-player" class="player-options">
        <button class="details" type="button">DETAILS</button>
        <div class="description">
          <p>In this series, learn how to make your school website engaging and accessible to all. In this course, we'll discuss how to use storytelling to make sure that anyone accessing your website will find the information they're looking for. We'll also talk about telling your school's story, and presenting your school in a positive light, through your website design. After taking this course, you'll be able to plan and redesign your website to best represent your school. Note: This course does NOT count toward the annual 3-hour accessibility requirement for NYC DOE webmasters.</p>
        </div>
        <input type="hidden" name="title" value="Website Makeover Series: Telling Your School's Story" />
        <input type="hidden" name="description" value="In this series, learn how to make your school website engaging and accessible to all. In this course, we'll discuss how to use storytelling to make sure that anyone accessing your website will find the information they're looking for. We'll also talk about telling your school's story, and presenting your school in a positive light, through your website design. After taking this course, you'll be able to plan and redesign your website to best represent your school. Note: This course does NOT count toward the annual 3-hour accessibility requirement for NYC DOE webmasters." />
        <input type="hidden" name="id" value="42bfe070-4705-4ae1-b9b4-047f346557f3" />
        <button class="share" type="submit">SHARE VIDEO LINK</button>
      </form>
    </div>
  </div>
</div>
<div class="column small-12 medium-4 sample-vid ALL Blended-Learning Computer-Science Holiday Remote-Learning STEM Art-Design">
  <div class="player-card card" data-player-tags="">
    <div class="player" data-player-id="adcf94ca-75d8-4152-9086-19a68e7e2d0d">
      <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/7/flowplayer.async.js">
      { "src": "767e6058-d255-4edb-9a18-53a189e84e42" }
      </script>
    </div>
    <div class="card-section">
      <h4>Design Your Holiday Card with Scratch</h4>
      <form action="https://www.teq.com/otis-sample-video-player" class="player-options">
        <button class="details" type="button">DETAILS</button>
        <div class="description">
          <p>Are you looking for a unique way to engage students in coding during the holiday season? In this session, we'll discover how to make a holiday card in Scratch! This activity will challenge students to use code to add images, movement, and text on their cards. We'll also explore how to change backdrops, pictures, and even music, to customize our cards. Join us for a creative and festive coding celebration!</p>
        </div>
        <input type="hidden" name="title" value="Design Your Holiday Card with Scratch" />
        <input type="hidden" name="description" value="Are you looking for a unique way to engage students in coding during the holiday season? In this session, we'll discover how to make a holiday card in Scratch! This activity will challenge students to use code to add images, movement, and text on their cards. We'll also explore how to change backdrops, pictures, and even music, to customize our cards. Join us for a creative and festive coding celebration!" />
        <input type="hidden" name="id" value="767e6058-d255-4edb-9a18-53a189e84e42" />
        <button class="share" type="submit">SHARE VIDEO LINK</button>
      </form>
    </div>
  </div>
</div>
<div class="column small-12 medium-4 sample-vid ALL Schoology-for-Parents">
  <div class="player-card card" data-player-tags="">
    <div class="player" data-player-id="4be99d0f-58cd-4c0a-8d66-6c11ff0ada39">
      <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/7/flowplayer.async.js">
      { "src": "78fee5cb-d088-43f5-ae08-d649513f2b77" }
      </script>
    </div>
    <div class="card-section">
      <h4>Schoology: Checking Your Child's Progress</h4>
      <form action="https://www.teq.com/otis-sample-video-player" class="player-options">
        <button class="details" type="button">DETAILS</button>
        <div class="description">
          <p>In this video we'll go over how to check your child's grades in the student view.</p>
        </div>
        <input type="hidden" name="title" value="Schoology: Checking Your Child's Progress" />
        <input type="hidden" name="description" value="In this video we'll go over how to check your child's grades in the student view." />
        <input type="hidden" name="id" value="78fee5cb-d088-43f5-ae08-d649513f2b77" />
        <button class="share" type="submit">SHARE VIDEO LINK</button>
      </form>
    </div>
  </div>
</div>
<div class="column small-12 medium-4 sample-vid ALL Civics Parents">
  <div class="player-card card" data-player-tags="">
    <div class="player" data-player-id="adcf94ca-75d8-4152-9086-19a68e7e2d0d">
      <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/7/flowplayer.async.js">
      { "src": "635a24a4-028f-4f9d-915a-5af17e9b33f8" }
      </script>
    </div>
    <div class="card-section">
      <h4>Civics for Adults: Voting</h4>
      <form action="https://www.teq.com/otis-sample-video-player" class="player-options">
        <button class="details" type="button">DETAILS</button>
        <div class="description">
          <p>The process of making one's voice count is through one of the basic tenets of American society - the power of the voting booth. This video is the first in a series related to how one can vote in their local, state, and national elections.</p><p>The first step to be able to vote is to register. By registering, you will be allowed to enter a designated polling place and cast your vote. So how does one become registered? Let's begin.</p>
        </div>
        <input type="hidden" name="title" value="Civics for Adults: Voting" />
        <input type="hidden" name="description" value="The process of making one's voice count is through one of the basic tenets of American society - the power of the voting booth. This video is the first in a series related to how one can vote in their local, state, and national elections.</p><p>The first step to be able to vote is to register. By registering, you will be allowed to enter a designated polling place and cast your vote. So how does one become registered? Let's begin." />
        <input type="hidden" name="id" value="635a24a4-028f-4f9d-915a-5af17e9b33f8" />
        <button class="share" type="submit">SHARE VIDEO LINK</button>
      </form>
    </div>
  </div>
</div>
<div class="column small-12 medium-4 sample-vid ALL Chromebooks-for-Parents">
  <div class="player-card card" data-player-tags="">
    <div class="player" data-player-id="4be99d0f-58cd-4c0a-8d66-6c11ff0ada39">
      <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/7/flowplayer.async.js">
      { "src": "460617b3-6b67-4e88-b092-4bb468d132aa" }
      </script>
    </div>
    <div class="card-section">
      <h4>Chromebook Settings Overview for Parents</h4>
      <form action="https://www.teq.com/otis-sample-video-player" class="player-options">
        <button class="details" type="button">DETAILS</button>
        <div class="description">
          <p>Learn how to access and adjust the settings on your Chromebook.</p>
        </div>
        <input type="hidden" name="title" value="Chromebook Settings Overview for Parents" />
        <input type="hidden" name="description" value="Learn how to access and adjust the settings on your Chromebook." />
        <input type="hidden" name="id" value="460617b3-6b67-4e88-b092-4bb468d132aa" />
        <button class="share" type="submit">SHARE VIDEO LINK</button>
      </form>
    </div>
  </div>
</div>
<div class="column small-12 medium-4 sample-vid ALL Canvas-for-Parents">
  <div class="player-card card" data-player-tags="">
    <div class="player" data-player-id="adcf94ca-75d8-4152-9086-19a68e7e2d0d">
      <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/7/flowplayer.async.js">
      { "src": "4c432373-47f9-4f90-a068-9d4ed3fe49b1" }
      </script>
    </div>
    <div class="card-section">
      <h4>How to Check My Student's Progress on Canvas</h4>
      <form action="https://www.teq.com/otis-sample-video-player" class="player-options">
        <button class="details" type="button">DETAILS</button>
        <div class="description">
          <p>In this skills video, we'll show you how to navigate your student's courses on Canvas to check their progress!</p>
        </div>
        <input type="hidden" name="title" value="How to Check My Student's Progress on Canvas" />
        <input type="hidden" name="description" value="In this skills video, we'll show you how to navigate your student's courses on Canvas to check their progress!" />
        <input type="hidden" name="id" value="4c432373-47f9-4f90-a068-9d4ed3fe49b1" />
        <button class="share" type="submit">SHARE VIDEO LINK</button>
      </form>
    </div>
  </div>
</div>
<div class="column small-12 medium-4 sample-vid ALL Apple-for-Parents">
  <div class="player-card card" data-player-tags="">
    <div class="player" data-player-id="4be99d0f-58cd-4c0a-8d66-6c11ff0ada39">
      <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/7/flowplayer.async.js">
      { "src": "bcafc602-ae4b-4499-97ad-2ebe83facb71" }
      </script>
    </div>
    <div class="card-section">
      <h4>Using Speech to Text on a Mac</h4>
      <form action="https://www.teq.com/otis-sample-video-player" class="player-options">
        <button class="details" type="button">DETAILS</button>
        <div class="description">
          <p>In this video, we'll cover how to enable and use the speech to text feature on your Mac.</p>
        </div>
        <input type="hidden" name="title" value="Using Speech to Text on a Mac" />
        <input type="hidden" name="description" value="In this video, we'll cover how to enable and use the speech to text feature on your Mac." />
        <input type="hidden" name="id" value="bcafc602-ae4b-4499-97ad-2ebe83facb71" />
        <button class="share" type="submit">SHARE VIDEO LINK</button>
      </form>
    </div>
  </div>
</div>
<div class="column small-12 medium-4 sample-vid ALL Infinite-Campus-for-Parents">
  <div class="player-card card" data-player-tags="">
    <div class="player" data-player-id="adcf94ca-75d8-4152-9086-19a68e7e2d0d">
      <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/7/flowplayer.async.js">
      { "src": "a5b52e7f-b29b-447b-bf68-d6f462232da7" }
      </script>
    </div>
    <div class="card-section">
      <h4>Check your Child's Grades in Infinite Campus</h4>
      <form action="https://www.teq.com/otis-sample-video-player" class="player-options">
        <button class="details" type="button">DETAILS</button>
        <div class="description">
          <p>Learn how to check your child's grades in Infinite Campus.</p>
        </div>
        <input type="hidden" name="title" value="Check your Child's Grades in Infinite Campus" />
        <input type="hidden" name="description" value="Learn how to check your child's grades in Infinite Campus." />
        <input type="hidden" name="id" value="a5b52e7f-b29b-447b-bf68-d6f462232da7" />
        <button class="share" type="submit">SHARE VIDEO LINK</button>
      </form>
    </div>
  </div>
</div>
<div class="column small-12 medium-4 sample-vid ALL iPads-for-Parents">
  <div class="player-card card" data-player-tags="">
    <div class="player" data-player-id="4be99d0f-58cd-4c0a-8d66-6c11ff0ada39">
      <script src="//cdn.flowplayer.com/players/502f72ae-3c46-4e4d-bd80-631077be8b16/7/flowplayer.async.js">
      { "src": "d436c3d3-8358-429c-ab22-1c905255ece7" }
      </script>
    </div>
    <div class="card-section">
      <h4>How to Scan and Upload a Document on an iPad for Parents</h4>
      <form action="https://www.teq.com/otis-sample-video-player" class="player-options">
        <button class="details" type="button">DETAILS</button>
        <div class="description">
          <p>Learn how to use your device's notes app to scan documents and even add signatures!</p>
        </div>
        <input type="hidden" name="title" value="How to Scan and Upload a Document on an iPad for Parents" />
        <input type="hidden" name="description" value="Learn how to use your device's notes app to scan documents and even add signatures!" />
        <input type="hidden" name="id" value="d436c3d3-8358-429c-ab22-1c905255ece7" />
        <button class="share" type="submit">SHARE VIDEO LINK</button>
      </form>
    </div>
  </div>
</div>
<div class="no-results-message">
  <h5 style="color:#412F17;">No videos found for this category.</h5>
  <h3 style="color:#A8765B;"><strong> Try searching otter categories</strong>.</h3>
  <svg version="1.1" viewBox="0 0 100 50" style="max-width:45%">
  <style type="text/css">
  	.nost0{display:none;}
  	.nost1{display:inline;fill:#412F17;}
  	.nost2{fill:#412F17;}
  	.nost3{fill:#A8765B;}
  	.nost4{fill:#F2DFC1;}
  	.nost5{fill:#FF0000;}
  	.nost6{fill:#7FC2DC;}
  </style>
  <g class="nost0">
  	<path class="nost1" d="M338.034,129.522c-0.018,1.022-0.202,2.035-0.529,3.004c-0.371,0.95-0.821,1.876-1.416,2.709
  		c-1.145,1.699-2.651,3.118-4.235,4.401c-3.199,2.554-6.823,4.512-10.516,6.246c-7.424,3.431-15.245,5.909-23.12,8.064
  		c-15.785,4.246-31.906,7.147-48.092,9.393c-32.388,4.502-65.098,6.566-97.814,6.959c-16.361,0.176-32.734-0.069-49.094-0.831
  		c-16.358-0.775-32.713-1.982-49.002-3.988c-16.277-2.059-32.529-4.674-48.529-8.857c-7.984-2.147-15.926-4.614-23.615-8.122
  		c-3.832-1.782-7.624-3.79-11.14-6.565c-1.743-1.402-3.449-2.974-4.848-5.018c-0.714-0.998-1.303-2.158-1.778-3.386
  		c-0.437-1.261-0.695-2.622-0.717-4.007c0.015-1.385,0.273-2.748,0.711-4.009c0.475-1.229,1.064-2.389,1.778-3.387
  		c1.4-2.044,3.105-3.616,4.849-5.019c3.517-2.776,7.309-4.784,11.141-6.566c7.689-3.508,15.632-5.975,23.616-8.122
  		c7.989-2.131,16.065-3.787,24.161-5.229c8.099-1.427,16.224-2.63,24.368-3.636c16.287-2.022,32.645-3.215,49.002-3.993
  		c16.36-0.761,32.733-1.005,49.095-0.827c32.717,0.397,65.428,2.459,97.815,6.969c16.187,2.247,32.307,5.147,48.092,9.396
  		c7.875,2.155,15.696,4.633,23.12,8.064c3.693,1.734,7.317,3.692,10.516,6.246c1.584,1.282,3.091,2.702,4.235,4.401
  		c0.595,0.833,1.045,1.759,1.416,2.709C337.832,127.487,338.016,128.499,338.034,129.522z M338.034,129.522
  		c-0.022-1.022-0.211-2.033-0.542-2.999c-0.375-0.947-0.829-1.869-1.426-2.697c-1.15-1.69-2.66-3.1-4.247-4.372
  		c-3.205-2.535-6.832-4.472-10.528-6.187c-7.43-3.392-15.254-5.831-23.131-7.947c-15.8-4.139-31.957-6.735-48.142-8.782
  		c-16.201-1.999-32.489-3.195-48.784-3.967c-16.298-0.757-32.615-1-48.921-0.822c-32.605,0.394-65.208,2.461-97.424,6.938
  		c-16.096,2.231-32.117,5.127-47.706,9.314c-7.768,2.124-15.471,4.574-22.636,7.888c-3.557,1.667-7.015,3.555-9.904,5.868
  		c-2.885,2.269-5.118,5.158-5.057,7.767c-0.072,2.612,2.171,5.503,5.054,7.772c2.889,2.313,6.347,4.201,9.905,5.868
  		c7.166,3.314,14.868,5.765,22.637,7.888c15.585,4.206,31.61,7.086,47.706,9.321c32.215,4.491,64.82,6.544,97.425,6.939
  		c16.307,0.177,32.624-0.068,48.922-0.826c16.295-0.774,32.584-1.968,48.784-3.973c16.185-2.048,32.342-4.643,48.142-8.786
  		c7.877-2.116,15.701-4.555,23.131-7.947c3.696-1.715,7.323-3.653,10.528-6.187c1.587-1.273,3.097-2.682,4.247-4.372
  		c0.597-0.829,1.051-1.75,1.426-2.697C337.823,131.555,338.012,130.544,338.034,129.522z"/>
  </g>
  <g class="nost0">
  	<path class="nost1" d="M338.034,143.34c-0.014,1.02-0.218,2.028-0.565,2.986c-0.373,0.949-0.882,1.839-1.478,2.665
  		c-1.205,1.648-2.737,3.026-4.351,4.261c-3.259,2.454-6.902,4.343-10.618,5.999c-7.461,3.286-15.282,5.671-23.159,7.728
  		c-15.78,4.071-31.867,6.856-48.016,9.012c-32.311,4.325-64.92,6.321-97.536,6.712c-16.311,0.177-32.633-0.051-48.944-0.773
  		c-16.309-0.735-32.616-1.882-48.863-3.798c-16.236-1.968-32.45-4.466-48.436-8.47c-7.98-2.046-15.918-4.418-23.635-7.773
  		c-3.849-1.699-7.656-3.633-11.227-6.292c-1.772-1.347-3.505-2.871-4.973-4.853c-0.726-0.997-1.377-2.11-1.869-3.354
  		c-0.469-1.26-0.758-2.64-0.775-4.049c0.011-1.41,0.3-2.792,0.77-4.052c0.492-1.245,1.143-2.358,1.869-3.356
  		c1.468-1.983,3.202-3.507,4.974-4.854c3.571-2.66,7.379-4.594,11.228-6.293c7.717-3.355,15.655-5.727,23.635-7.773
  		c15.982-4.023,32.2-6.507,48.435-8.478c16.245-1.932,32.555-3.065,48.863-3.803c16.311-0.721,32.633-0.948,48.945-0.769
  		c32.617,0.395,65.227,2.389,97.537,6.722c16.149,2.157,32.237,4.941,48.016,9.015c7.876,2.057,15.698,4.441,23.158,7.728
  		c3.716,1.656,7.359,3.546,10.618,6c1.615,1.235,3.146,2.614,4.351,4.261c0.596,0.827,1.104,1.716,1.478,2.665
  		C337.816,141.312,338.02,142.32,338.034,143.34z M338.034,143.34c-0.019-1.02-0.227-2.026-0.578-2.98
  		c-0.377-0.946-0.889-1.831-1.487-2.653c-1.21-1.639-2.745-3.007-4.363-4.233c-3.265-2.434-6.911-4.304-10.63-5.941
  		c-7.466-3.247-15.291-5.593-23.169-7.611c-15.794-3.964-31.916-6.445-48.064-8.401c-16.162-1.91-32.405-3.046-48.654-3.778
  		c-16.251-0.717-32.519-0.943-48.778-0.765c-32.509,0.392-65.015,2.391-97.161,6.693c-16.062,2.142-32.054,4.923-47.645,8.939
  		c-7.775,2.028-15.482,4.387-22.692,7.566c-3.586,1.595-7.067,3.419-10.019,5.647c-1.46,1.113-2.792,2.337-3.74,3.64
  		c-0.468,0.651-0.837,1.313-1.096,1.963c-0.229,0.652-0.352,1.284-0.373,1.914c0.015,0.63,0.138,1.264,0.368,1.916
  		c0.259,0.65,0.628,1.313,1.096,1.964c0.948,1.304,2.281,2.528,3.741,3.641c2.953,2.229,6.435,4.053,10.02,5.648
  		c7.211,3.179,14.918,5.538,22.693,7.566c15.587,4.035,31.583,6.801,47.645,8.946c32.145,4.317,64.653,6.301,97.162,6.695
  		c16.258,0.177,32.527-0.05,48.778-0.768c16.249-0.734,32.492-1.868,48.654-3.785c16.148-1.958,32.271-4.438,48.064-8.405
  		c7.878-2.018,15.703-4.364,23.169-7.611c3.719-1.637,7.365-3.507,10.63-5.941c1.617-1.225,3.152-2.594,4.363-4.233
  		c0.598-0.822,1.11-1.708,1.487-2.653C337.807,145.366,338.015,144.36,338.034,143.34z"/>
  </g>
  <g>
  	<g>
  		<path class="nost2" d="M78.114,12.012c-0.503-0.928-1.673-0.991-2.375-0.935c-0.437-1.437-1.165-2.85-2.348-4.014
  			c-3.086-3.037-7.339-4.779-11.669-4.779c-1.265,0-2.519,0.15-3.727,0.444c-2.429,0.593-4.656,1.903-6.439,3.789
  			c-0.251,0.266-0.493,0.543-0.723,0.828c-0.668-0.429-1.758-0.784-2.781,0.418c-1.139,1.339-0.108,2.774,0.611,3.514
  			c-0.516,1.637-0.663,2.039-0.674,2.07c-0.066,0.175-0.1,0.36-0.1,0.546c0,0.629,0.073,3.856,1.51,5.643
  			c0.126,0.156,0.275,0.321,0.441,0.49c-0.204,0.045-0.395,0.131-0.563,0.255c-0.996-0.798-2.337-1.547-3.866-1.547
  			c-0.071,0-0.142,0.002-0.214,0.005c-1.548,0.072-2.761,0.732-3.417,1.857c-0.51,0.876-0.63,1.948-0.369,3.067
  			c-0.215-0.008-0.461-0.014-0.719-0.014c-0.722,0-1.289,0.046-1.733,0.14c-0.142,0.03-0.276,0.06-0.403,0.091
  			c-0.043-0.445-0.175-0.885-0.495-1.285c-0.363-0.454-0.831-0.98-0.85-1.002c-0.229-0.257-0.534-0.428-0.865-0.491
  			c-0.261-0.223-0.585-0.35-0.921-0.367c-0.155-0.022-0.437-0.062-0.792-0.062c-1.389,0-2.604,0.623-3.421,1.755
  			c-0.934,1.293-1.379,2.765-1.559,3.913c-0.493-0.728-1.271-2.712-1.962-4.475c-0.742-1.892-1.509-3.849-2.323-5.45
  			c-0.75-1.474-2.175-2.695-4.236-3.63c-2.348-1.065-4.757-1.405-4.858-1.419c-0.071-0.01-0.141-0.014-0.211-0.014
  			c-0.62,0-1.19,0.374-1.429,0.961c-0.266,0.653-0.056,1.403,0.511,1.823c0.029,0.021,1.402,1.043,3.023,2.501
  			c1.298,1.168,1.623,2.755,1.861,5.87c0.262,3.431,1.369,5.729,3.203,9.536c0.128,0.265,0.26,0.539,0.396,0.822
  			c1.455,3.03,4.857,6.644,9.837,10.452c1.563,1.195,6.199,2.914,7.112,3.247c0.173,0.063,0.351,0.093,0.528,0.093
  			c0.244,0,0.483-0.058,0.699-0.167c2.491,1.385,5.653,1.386,7.023,1.386c0.482,0,0.932-0.009,1.329-0.017l0.22-0.004
  			c5.786-0.11,11.044-1.65,15.208-4.454c4.324-2.912,7.156-6.868,8.419-11.757c0.741-2.872,0.319-8.051,0.3-8.27
  			c-0.027-0.318-0.153-0.612-0.349-0.85c0.534-0.485,0.939-0.954,1.149-1.358c0.188-0.359,0.418-0.87,0.601-1.332
  			c0.154-0.389,0.311-0.785,0.342-1.189c0.078-0.41,0.257-1.503,0.284-2.912c0.322-0.09,0.727-0.219,0.986-0.356
  			C77.8,15.12,78.856,13.381,78.114,12.012z"/>
  		<g>
  			<path class="nost3" d="M71.497,24.25c-0.69,0.367-1.612,0.801-2.64,1.135c-2.196,0.713-4.735,0.2-4.735,0.2
  				s0.485,0.941,0.656,2.481c0.171,1.54-0.114,2.081-0.114,2.081s-0.428-1.055-0.656-1.996c-0.228-0.941-1.455-2.823-2.139-3.992
  				c-0.685-1.169-2.111-1.796-2.111-1.796l-0.057,1.768l-0.627-1.796l-1.312,0.029l0.342,2.224l-0.827-1.882
  				c0,0-0.685,0.656-0.799,1.682c-0.114,1.026,0.599,2.538,1.882,4.819c1.283,2.281,4.849,4.876,6.902,5.56
  				c1.43,0.477,3.248,0.068,4.22-0.224c0.423-0.127,0.686-0.232,0.686-0.232s-0.408,0.38-1.105,0.766
  				c-0.718,0.398-1.744,0.802-2.945,0.802c-2.367,0-4.107-1.654-4.107-1.654s-1.911-1.568-4.164-4.191
  				c-2.253-2.623-2.396-6.387-2.396-6.387s-1.084-0.542-1.854-0.884c-0.77-0.342-1.825-1.568-1.825-1.568s-0.428,0.143-0.799,0.257
  				c-0.371,0.114-0.77,0.086-0.77,0.086s0.913,1.34,1.369,1.882c0.456,0.542,1.169,1.112,0.342,4.049
  				c-0.827,2.937-5.932,1.711-6.931,1.14c-0.998-0.57-2.424-2.623-2.424-2.623s-1.141,0.656-1.569,1.026
  				c-0.428,0.371-2.481,2.538-2.481,2.538s0,0-0.827,1.369c-0.827,1.369-1.084,4.391-1.084,4.391l-0.799,0.285v-2.623
  				c0,0-1.825-0.855-2.909-1.312c-1.084-0.456-3.251-2.794-4.392-4.277c-1.141-1.483-2.795-6.9-4.506-10.264
  				c-0.679-1.336-2.069-2.276-3.498-2.924c-2.17-0.984-4.431-1.295-4.431-1.295s1.426,1.055,3.137,2.595
  				c1.711,1.54,2.111,3.536,2.367,6.9c0.257,3.364,1.398,5.531,3.451,9.808c2.054,4.277,7.929,8.782,9.383,9.894
  				c1.455,1.112,6.702,3.022,6.702,3.022l-1.483-1.825c0,0,0.2,0.513-0.599-1.198c-0.799-1.711-0.742-4.762-0.742-4.762
  				s0.029-0.713,0.086-2.195s0.342-3.593,1.797-5.389c1.455-1.796,4.107-0.77,5.333,0.057c1.226,0.827,0.485,4.847,0.485,4.847
  				s1.654-0.855,2.139-1.083c0.485-0.228,3.023-0.656,5.476,0.342c2.453,0.998,2.966,3.193,2.966,3.193s0.257,0.485,0.399,1.255
  				c0.143,0.77,0.029,1.312,0.029,1.312s-0.599-1.169-1.169-2.623c-0.57-1.454-2.139-2.024-4.535-2.652
  				c-2.396-0.627-5.676,1.682-5.676,1.682l-0.77-0.228c0,0,0.371-2.737,0.257-3.992c-0.114-1.255-0.799-1.711-0.799-1.711
  				l-0.029,1.14c0,0-0.314,0.57-0.314,0.656c0,0.086-0.314-1.996-0.371-2.081c-0.057-0.086-0.542-0.029-0.542-0.029l0.228,1.597
  				c0,0-0.542,0.57-0.627,0.599c-0.086,0.029,0-2.252,0-2.252s-0.97,0-2.025,0.884c-1.055,0.884-1.711,7.1-0.456,11.519
  				c1.255,4.419,7.187,4.191,10.182,4.134c2.995-0.057,8.956-0.542,14.375-4.191c5.419-3.65,7.102-8.212,7.786-10.863
  				c0.685-2.652,0.257-7.755,0.257-7.755S72.281,23.833,71.497,24.25z"/>
  			<path class="nost3" d="M32.007,29.615c0,0,1.683,1.244,2.253,1.586c0.57,0.342,1.226,0.542,1.312,0.57c0.086,0.029,0.742,0,0.742,0
  				s1.198-2.595,1.911-3.364c0.713-0.77,3.793-3.165,3.793-3.165s-1.797-0.143-2.738,0.057c-0.941,0.2-1.369,0.399-1.341,0.485
  				c0.029,0.086-0.314,2.024-0.627,2.794c-0.314,0.77-0.513,1.037-0.513,1.037h-0.97c0,0,1.055-2.406,1.084-3.603
  				c0.029-1.198,0.285-2.024-0.057-2.452c-0.342-0.428-0.799-0.941-0.799-0.941s-1.112,1.739-1.055,1.597
  				c0.057-0.143,0.086-0.713,0.086-0.713l0.257-1.226c-0.114,0.029-1.768-0.485-2.881,1.055c-1.112,1.54-1.398,3.45-1.369,4.334
  				c0.029,0.884-0.002,1.397-0.002,1.397L32.007,29.615z"/>
  			<path class="nost3" d="M46.496,27.865c0.656,0.171,1.996,0.257,1.996,0.257s-0.998-1.825-0.827-1.625
  				c0.171,0.2,1.569,1.511,1.569,1.511l0.941-0.855l-1.34-1.882c0,0,1.74,1.835,1.882,1.73c0.143-0.105,1.255-1.388-0.884-3.954
  				c0,0-2.111-2.88-4.563-2.766c-2.453,0.114-2.966,2.11-1.968,4.077C44.3,26.325,45.84,27.694,46.496,27.865z"/>
  			<path class="nost3" d="M63.352,3.848C51.335,2.29,49.434,13.894,49.434,13.894s0,3.222,1.169,4.676
  				c1.169,1.454,5.02,3.963,5.02,3.963s1.683-1.967,3.594-1.312s2.824,1.54,3.251,1.967c0.428,0.428,0.77,1.226,0.77,1.226
  				s4.592,0.029,6.588-0.969c1.996-0.998,3.565-2.338,3.907-2.994c0.342-0.656,0.827-1.853,0.77-1.967
  				C74.504,18.485,76.796,5.592,63.352,3.848z M56.764,11.87c-0.977,0-1.768-0.843-1.768-1.882c0-1.039,0.792-1.882,1.768-1.882
  				c0.977,0,1.768,0.843,1.768,1.882C58.532,11.027,57.74,11.87,56.764,11.87z M69.185,13.723c-0.969,0-1.754-0.785-1.754-1.754
  				s0.785-1.754,1.754-1.754s1.754,0.785,1.754,1.754S70.154,13.723,69.185,13.723z"/>
  		</g>
  		<g>
  			<path class="nost4" d="M57.848,30.032c-2.253-2.623-2.396-6.387-2.396-6.387s-1.084-0.542-1.854-0.884
  				c-0.77-0.342-1.825-1.568-1.825-1.568s-0.428,0.143-0.799,0.257c-0.371,0.114-0.77,0.086-0.77,0.086s0.913,1.34,1.369,1.882
  				c0.456,0.542,1.169,1.112,0.342,4.049c-0.827,2.937-5.932,1.711-6.931,1.14c-0.998-0.57-2.424-2.623-2.424-2.623
  				s-1.141,0.656-1.569,1.026c-0.428,0.371-2.481,2.538-2.481,2.538s0,0-0.827,1.369c0,0-0.143,2.195-0.143,3.393
  				s0.742,3.108,0.742,3.108s-0.799-7.556,4.021-8.554c4.82-0.998,3.765,5.931,3.765,5.931s0.314-0.855,1.797-1.226
  				c1.483-0.371,2.196-0.456,4.991,0.171c2.795,0.627,3.793,3.393,3.793,3.393s2.339-0.342,3.366-0.912
  				c1.027-0.57,1.996-1.996,1.996-1.996S60.101,32.655,57.848,30.032z"/>
  			<path class="nost4" d="M74.504,18.485c-0.057-0.114-0.998-3.136-2.938-3.564c-1.939-0.428-4.478,0.143-5.105,0.342
  				c-0.627,0.2-3.137,0.713-3.28,0.713c-0.143,0-1.198,0-1.198,0s-2.824-1.14-4.107-1.939s-1.882-1.853-3.907-1.853
  				c-2.025,0-4.535,1.711-4.535,1.711s0,3.222,1.169,4.676c1.169,1.454,5.02,3.963,5.02,3.963s1.683-1.967,3.594-1.312
  				s2.824,1.54,3.251,1.967c0.428,0.428,0.77,1.226,0.77,1.226s4.592,0.029,6.588-0.969c1.996-0.998,3.565-2.338,3.907-2.994
  				C74.076,19.796,74.561,18.599,74.504,18.485z"/>
  			<path class="nost4" d="M57.534,10.539c0.273,0,0.494-0.221,0.494-0.494c0-0.273-0.221-0.494-0.494-0.494
  				c-0.273,0-0.494,0.221-0.494,0.494C57.04,10.318,57.261,10.539,57.534,10.539z"/>
  			<path class="nost4" d="M69.684,12.183c0.276,0,0.499-0.223,0.499-0.499s-0.223-0.499-0.499-0.499c-0.276,0-0.499,0.223-0.499,0.499
  				S69.408,12.183,69.684,12.183z"/>
  		</g>
  		<g>
  			<path class="nost2" d="M72.983,16.653c-0.008,0-0.81-0.012-1.664-0.012c-0.502,0-0.924,0.004-1.255,0.012
  				c-1.102,0.027-3.179,0.122-3.2,0.123c-0.09,0.004-0.16,0.057-0.16,0.12c0,0.063,0.07,0.116,0.16,0.12
  				c0.016,0.001,1.587,0.074,2.698,0.074c0.21,0,0.393-0.003,0.545-0.008c1.049-0.036,2.874-0.188,2.893-0.19
  				c0.089-0.007,0.155-0.062,0.151-0.125C73.146,16.704,73.073,16.654,72.983,16.653z"/>
  			<path class="nost2" d="M72.734,18.75c-0.008-0.002-0.771-0.156-1.586-0.31c-0.48-0.09-0.883-0.163-1.199-0.215
  				c-1.056-0.175-3.054-0.467-3.074-0.47c-0.087-0.013-0.162,0.02-0.173,0.075c-0.01,0.055,0.048,0.113,0.133,0.132
  				c0.015,0.003,1.502,0.35,2.563,0.55c0.2,0.038,0.376,0.068,0.521,0.091c1.007,0.158,2.774,0.355,2.792,0.357
  				c0.087,0.01,0.158-0.026,0.165-0.081C72.882,18.824,72.82,18.767,72.734,18.75z"/>
  			<path class="nost2" d="M71.992,20.4c-0.007-0.002-0.743-0.217-1.53-0.436c-0.463-0.129-0.852-0.233-1.158-0.311
  				c-1.021-0.26-2.954-0.715-2.974-0.72c-0.084-0.02-0.16,0.005-0.175,0.056c-0.014,0.051,0.038,0.112,0.12,0.138
  				c0.014,0.005,1.444,0.466,2.467,0.751c0.193,0.054,0.362,0.098,0.503,0.133c0.974,0.24,2.689,0.583,2.706,0.587
  				c0.084,0.017,0.157-0.011,0.167-0.063C72.131,20.483,72.075,20.424,71.992,20.4z"/>
  			<path class="nost2" d="M56.239,15.726c-0.019-0.008-1.932-0.822-2.955-1.232c-0.306-0.123-0.7-0.274-1.171-0.449
  				c-0.8-0.298-1.556-0.567-1.564-0.57c-0.085-0.03-0.171-0.009-0.197,0.049c-0.026,0.058,0.016,0.132,0.098,0.17
  				c0.017,0.008,1.674,0.788,2.644,1.188c0.14,0.058,0.311,0.124,0.508,0.198c1.041,0.388,2.539,0.868,2.554,0.873
  				c0.086,0.027,0.17,0.003,0.192-0.057C56.37,15.835,56.322,15.762,56.239,15.726z"/>
  			<path class="nost2" d="M53.259,16.468c1.063,0.183,2.578,0.378,2.593,0.38c0.087,0.011,0.162-0.023,0.171-0.078
  				c0.009-0.055-0.05-0.112-0.136-0.13c-0.02-0.004-1.993-0.428-3.044-0.633c-0.315-0.061-0.718-0.134-1.199-0.217
  				c-0.817-0.141-1.587-0.262-1.595-0.264c-0.086-0.014-0.164,0.018-0.178,0.071c-0.014,0.054,0.041,0.112,0.126,0.133
  				c0.017,0.004,1.742,0.437,2.741,0.641C52.883,16.401,53.058,16.433,53.259,16.468z"/>
  			<path class="nost2" d="M55.984,17.934c-0.02-0.003-1.99-0.252-3.038-0.364c-0.314-0.034-0.715-0.072-1.194-0.113
  				c-0.813-0.07-1.578-0.125-1.585-0.126c-0.086-0.006-0.159,0.03-0.168,0.082c-0.009,0.052,0.05,0.104,0.135,0.117
  				c0.017,0.003,1.744,0.28,2.74,0.395c0.144,0.017,0.319,0.034,0.518,0.051c1.058,0.091,2.559,0.158,2.574,0.158
  				c0.086,0.004,0.157-0.034,0.161-0.088C56.133,17.995,56.07,17.945,55.984,17.934z"/>
  			<path class="nost2" d="M65.919,16.66c-0.342-0.029-0.599,0.029-0.827,0.599c-0.228,0.57-0.884,1.112-1.483,1.041
  				c-0.599-0.071-1.226-0.385-1.426-1.069c-0.2-0.684-0.199-1.264-0.199-1.264c1.234,0.089,2.272-0.407,2.381-1.172
  				c0.117-0.823-0.886-1.647-2.24-1.84c-1.354-0.193-2.547,0.318-2.665,1.142c-0.097,0.682,0.575,1.365,1.578,1.688
  				c0,0-0.053,1.389-0.937,1.618c-0.884,0.228-2.139-0.314-2.139-0.884c0-0.57-0.029-1.169-0.456-1.055
  				c-0.428,0.114-0.371,1.283,0,1.739c0.371,0.456,0.542,0.684,0.57,0.77c0.029,0.086,0.352,2.965,2.714,3.079
  				c2.363,0.114,2.79-0.32,3.019-0.773c0.228-0.453,0.566-1.08,0.566-1.08s1.031-0.684,1.174-1.083S66.261,16.688,65.919,16.66z"/>
  		</g>
  		<path class="nost5" d="M63.022,19.776c-0.055,0.413-0.848,0.815-1.894,0.676s-1.949-0.768-1.894-1.181
  			c0.055-0.413,0.948-0.634,1.994-0.495C62.273,18.916,63.077,19.363,63.022,19.776z"/>
  	</g>
  	<g>
  		<path class="nost6" d="M77.272,33.058c-0.202-0.25-0.433-0.396-0.661-0.524c-0.23-0.123-0.463-0.213-0.697-0.292
  			c-0.471-0.148-0.945-0.244-1.428-0.284c0.415,0.251,0.828,0.484,1.212,0.738c0.191,0.127,0.375,0.259,0.539,0.397
  			c0.159,0.139,0.307,0.29,0.377,0.428c0.037,0.068,0.051,0.128,0.053,0.172c-0.004,0.044-0.009,0.076-0.031,0.119
  			c-0.042,0.084-0.158,0.21-0.31,0.319c-0.152,0.111-0.332,0.218-0.525,0.312c-0.191,0.097-0.393,0.187-0.6,0.27
  			c-0.831,0.336-1.718,0.614-2.606,0.903c-0.89,0.29-1.791,0.576-2.686,0.944c0.967,0.054,1.922-0.015,2.871-0.157
  			c0.948-0.149,1.89-0.366,2.811-0.739c0.458-0.197,0.917-0.411,1.349-0.779c0.208-0.189,0.436-0.416,0.551-0.782
  			c0.056-0.181,0.064-0.391,0.019-0.579C77.46,33.339,77.371,33.184,77.272,33.058z"/>
  		<path class="nost6" d="M19.164,34.464c0.093,0.11,0.197,0.188,0.3,0.26c0.419,0.265,0.857,0.361,1.318,0.341
  			c-0.281-0.363-0.579-0.654-0.773-0.936c-0.094-0.138-0.152-0.27-0.149-0.339c0.001-0.035,0.007-0.054,0.015-0.078
  			c0.012-0.024,0.02-0.058,0.052-0.101c0.051-0.088,0.158-0.204,0.283-0.318c0.125-0.116,0.27-0.232,0.419-0.356
  			c0.302-0.246,0.628-0.5,0.942-0.84c-0.458-0.064-0.893-0.008-1.319,0.124c-0.213,0.069-0.421,0.163-0.626,0.29
  			c-0.202,0.13-0.405,0.296-0.572,0.556c-0.08,0.128-0.147,0.29-0.178,0.465c-0.023,0.179-0.011,0.368,0.049,0.53
  			C18.982,34.228,19.069,34.358,19.164,34.464z"/>
  		<path class="nost6" d="M47.221,38.524c1.16-0.005,2.321-0.01,3.48-0.041c1.16-0.042,2.319-0.078,3.477-0.161
  			c2.316-0.148,4.629-0.375,6.922-0.756c-2.324-0.043-4.635-0.039-6.946-0.043l-3.465-0.011c-1.154-0.002-2.309,0-3.463-0.015
  			l-6.927-0.049c-2.311-0.022-4.622-0.054-6.946-0.045c2.287,0.418,4.597,0.674,6.912,0.847C42.58,38.421,44.9,38.514,47.221,38.524
  			z"/>
  		<path class="nost6" d="M17.87,37.435c-0.235-0.083-0.464-0.174-0.681-0.27c-0.219-0.094-0.423-0.201-0.596-0.312
  			c-0.173-0.109-0.304-0.235-0.352-0.319c-0.025-0.042-0.031-0.075-0.035-0.119c0.002-0.044,0.019-0.105,0.06-0.172
  			c0.08-0.139,0.247-0.289,0.428-0.428c0.186-0.138,0.395-0.27,0.612-0.397c0.436-0.254,0.905-0.487,1.376-0.738
  			c-0.549,0.04-1.088,0.136-1.622,0.284c-0.266,0.079-0.531,0.169-0.792,0.292c-0.259,0.127-0.522,0.274-0.751,0.524
  			c-0.112,0.125-0.214,0.281-0.27,0.468c-0.051,0.188-0.042,0.398,0.021,0.579c0.131,0.366,0.389,0.593,0.626,0.782
  			c0.49,0.368,1.011,0.582,1.532,0.779c1.046,0.373,2.116,0.59,3.192,0.739c1.077,0.142,2.162,0.211,3.26,0.157
  			c-1.017-0.369-2.039-0.654-3.05-0.944C19.82,38.049,18.813,37.77,17.87,37.435z"/>
  		<path class="nost6" d="M81.827,36.254c-0.035-0.175-0.11-0.337-0.202-0.465c-0.189-0.26-0.419-0.426-0.649-0.556
  			c-0.232-0.128-0.469-0.221-0.711-0.29c-0.484-0.132-0.977-0.188-1.498-0.124c0.356,0.34,0.727,0.594,1.069,0.84
  			c0.168,0.124,0.333,0.24,0.475,0.356c0.142,0.114,0.263,0.23,0.321,0.318c0.037,0.043,0.045,0.076,0.059,0.101
  			c0.009,0.024,0.016,0.043,0.017,0.078c0.003,0.069-0.062,0.201-0.169,0.339c-0.22,0.282-0.559,0.573-0.878,0.936
  			c0.523,0.019,1.02-0.076,1.496-0.341c0.117-0.072,0.235-0.15,0.341-0.26c0.108-0.106,0.207-0.237,0.272-0.401
  			C81.839,36.622,81.853,36.433,81.827,36.254z"/>
  		<path class="nost6" d="M49.634,40.216c-1.311,0.015-2.621,0.013-3.932,0.015l-3.934,0.011c-2.624,0.004-5.249,0-7.888,0.043
  			c2.604,0.382,5.23,0.608,7.86,0.756c1.315,0.083,2.632,0.118,3.949,0.161c1.317,0.031,2.635,0.037,3.952,0.041
  			c2.635-0.01,5.27-0.103,7.898-0.275c2.628-0.173,5.252-0.429,7.848-0.847c-2.639-0.009-5.263,0.023-7.887,0.045L49.634,40.216z"/>
  	</g>
  </g>
  <g class="nost0">
  	<path class="nost1" d="M338.034,129.522c-0.018,1.022-0.202,2.035-0.529,3.004c-0.371,0.95-0.821,1.876-1.416,2.709
  		c-1.145,1.699-2.651,3.118-4.235,4.401c-3.199,2.554-6.823,4.512-10.516,6.246c-7.424,3.431-15.245,5.909-23.12,8.064
  		c-15.785,4.246-31.906,7.147-48.092,9.393c-32.388,4.502-65.098,6.566-97.814,6.959c-16.361,0.176-32.734-0.069-49.094-0.831
  		c-16.358-0.775-32.713-1.982-49.002-3.988c-16.277-2.059-32.529-4.674-48.529-8.857c-7.984-2.147-15.926-4.614-23.615-8.122
  		c-3.832-1.782-7.624-3.79-11.14-6.565c-1.743-1.402-3.449-2.974-4.848-5.018c-0.714-0.998-1.303-2.158-1.778-3.386
  		c-0.437-1.261-0.695-2.622-0.717-4.007c0.015-1.385,0.273-2.748,0.711-4.009c0.475-1.229,1.064-2.389,1.778-3.387
  		c1.4-2.044,3.105-3.616,4.849-5.019c3.517-2.776,7.309-4.784,11.141-6.566c7.689-3.508,15.632-5.975,23.616-8.122
  		c7.989-2.131,16.065-3.787,24.161-5.229c8.099-1.427,16.224-2.63,24.368-3.636c16.287-2.022,32.645-3.215,49.002-3.993
  		c16.36-0.761,32.733-1.005,49.095-0.827c32.717,0.397,65.428,2.459,97.815,6.969c16.187,2.247,32.307,5.147,48.092,9.396
  		c7.875,2.155,15.696,4.633,23.12,8.064c3.693,1.734,7.317,3.692,10.516,6.246c1.584,1.282,3.091,2.702,4.235,4.401
  		c0.595,0.833,1.045,1.759,1.416,2.709C337.832,127.487,338.016,128.499,338.034,129.522z M338.034,129.522
  		c-0.022-1.022-0.211-2.033-0.542-2.999c-0.375-0.947-0.829-1.869-1.426-2.697c-1.15-1.69-2.66-3.1-4.247-4.372
  		c-3.205-2.535-6.832-4.472-10.528-6.187c-7.43-3.392-15.254-5.831-23.131-7.947c-15.8-4.139-31.957-6.735-48.142-8.782
  		c-16.201-1.999-32.489-3.195-48.784-3.967c-16.298-0.757-32.615-1-48.921-0.822c-32.605,0.394-65.208,2.461-97.424,6.938
  		c-16.096,2.231-32.117,5.127-47.706,9.314c-7.768,2.124-15.471,4.574-22.636,7.888c-3.557,1.667-7.015,3.555-9.904,5.868
  		c-2.885,2.269-5.118,5.158-5.057,7.767c-0.072,2.612,2.171,5.503,5.054,7.772c2.889,2.313,6.347,4.201,9.905,5.868
  		c7.166,3.314,14.868,5.765,22.637,7.888c15.585,4.206,31.61,7.086,47.706,9.321c32.215,4.491,64.82,6.544,97.425,6.939
  		c16.307,0.177,32.624-0.068,48.922-0.826c16.295-0.774,32.584-1.968,48.784-3.973c16.185-2.048,32.342-4.643,48.142-8.786
  		c7.877-2.116,15.701-4.555,23.131-7.947c3.696-1.715,7.323-3.653,10.528-6.187c1.587-1.273,3.097-2.682,4.247-4.372
  		c0.597-0.829,1.051-1.75,1.426-2.697C337.823,131.555,338.012,130.544,338.034,129.522z"/>
  </g>
  <g class="nost0">
  	<path class="nost1" d="M338.034,143.34c-0.014,1.02-0.218,2.028-0.565,2.986c-0.373,0.949-0.882,1.839-1.478,2.665
  		c-1.205,1.648-2.737,3.026-4.351,4.261c-3.259,2.454-6.902,4.343-10.618,5.999c-7.461,3.286-15.282,5.671-23.159,7.728
  		c-15.78,4.071-31.867,6.856-48.016,9.012c-32.311,4.325-64.92,6.321-97.536,6.712c-16.311,0.177-32.633-0.051-48.944-0.773
  		c-16.309-0.735-32.616-1.882-48.863-3.798c-16.236-1.968-32.45-4.466-48.436-8.47c-7.98-2.046-15.918-4.418-23.635-7.773
  		c-3.849-1.699-7.656-3.633-11.227-6.292c-1.772-1.347-3.505-2.871-4.973-4.853c-0.726-0.997-1.377-2.11-1.869-3.354
  		c-0.469-1.26-0.758-2.64-0.775-4.049c0.011-1.41,0.3-2.792,0.77-4.052c0.492-1.245,1.143-2.358,1.869-3.356
  		c1.468-1.983,3.202-3.507,4.974-4.854c3.571-2.66,7.379-4.594,11.228-6.293c7.717-3.355,15.655-5.727,23.635-7.773
  		c15.982-4.023,32.2-6.507,48.435-8.478c16.245-1.932,32.555-3.065,48.863-3.803c16.311-0.721,32.633-0.948,48.945-0.769
  		c32.617,0.395,65.227,2.389,97.537,6.722c16.149,2.157,32.237,4.941,48.016,9.015c7.876,2.057,15.698,4.441,23.158,7.728
  		c3.716,1.656,7.359,3.546,10.618,6c1.615,1.235,3.146,2.614,4.351,4.261c0.596,0.827,1.104,1.716,1.478,2.665
  		C337.816,141.312,338.02,142.32,338.034,143.34z M338.034,143.34c-0.019-1.02-0.227-2.026-0.578-2.98
  		c-0.377-0.946-0.889-1.831-1.487-2.653c-1.21-1.639-2.745-3.007-4.363-4.233c-3.265-2.434-6.911-4.304-10.63-5.941
  		c-7.466-3.247-15.291-5.593-23.169-7.611c-15.794-3.964-31.916-6.445-48.064-8.401c-16.162-1.91-32.405-3.046-48.654-3.778
  		c-16.251-0.717-32.519-0.943-48.778-0.765c-32.509,0.392-65.015,2.391-97.161,6.693c-16.062,2.142-32.054,4.923-47.645,8.939
  		c-7.775,2.028-15.482,4.387-22.692,7.566c-3.586,1.595-7.067,3.419-10.019,5.647c-1.46,1.113-2.792,2.337-3.74,3.64
  		c-0.468,0.651-0.837,1.313-1.096,1.963c-0.229,0.652-0.352,1.284-0.373,1.914c0.015,0.63,0.138,1.264,0.368,1.916
  		c0.259,0.65,0.628,1.313,1.096,1.964c0.948,1.304,2.281,2.528,3.741,3.641c2.953,2.229,6.435,4.053,10.02,5.648
  		c7.211,3.179,14.918,5.538,22.693,7.566c15.587,4.035,31.583,6.801,47.645,8.946c32.145,4.317,64.653,6.301,97.162,6.695
  		c16.258,0.177,32.527-0.05,48.778-0.768c16.249-0.734,32.492-1.868,48.654-3.785c16.148-1.958,32.271-4.438,48.064-8.405
  		c7.878-2.018,15.703-4.364,23.169-7.611c3.719-1.637,7.365-3.507,10.63-5.941c1.617-1.225,3.152-2.594,4.363-4.233
  		c0.598-0.822,1.11-1.708,1.487-2.653C337.807,145.366,338.015,144.36,338.034,143.34z"/>
  </g>
  </svg>
</div>


       </div>
     </div>
	 </div>
 </div>
</main>
<script>
$(document).ready(function() {
    //
    //
    $('#video-filter li button').on('click', function() {
      var filterValue = $(this).val();

        $('#video-filter li button').each(function() {
          $(this).removeClass('selected');
        });
        $(this).addClass('selected');

        $('#otis-sample-videos div.column').each(function() {
          $(this).removeClass('filtered');
            if($(this).hasClass(filterValue)) {
              $(this).addClass('filtered').show(420);
            } else {
              $(this).hide(420);
            }
            if ($('#otis-sample-videos div.column.filtered')[0]){
              $('#otis-sample-videos').removeClass('no-results-found');
            } else {
              $('#otis-sample-videos').addClass('no-results-found');
            }
        });
      console.log(filterValue);
    });
});
</script>
<?php do_action( 'foundationpress_after_content' );  get_footer();
