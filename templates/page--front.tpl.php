
<!-- UofR bar -->
<div class="uofrbar">
 <div class="container">
   <!-- UofR Logo -->
   <a class="" href="#">
     <img class="navbar-brand-uofr-logo" src="<?php print $directory;?>/images/logo-uofr.png" />
   </a>
 </div>
</div>


<!-- RCL navigation bar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
        <!-- Responsive nav button -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- RCL Logo -->
        <a class="navbar-brand" href="#">
          <img class="" src="<?php print $directory;?>/images/logo-rcl-blue.png" />
        </a>
    </div>
    <!-- Nav links -->
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">My Accounts</a></li>
        <li><a href="#">Chat Online</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Giving</a></li>
        <li>
        <!-- Search box -->
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input class="form-control navbar-search-grow" placeholder="Search" title="Seach the Library website" type="text" name="firstname"/>
            <!-- <span class="glyphicon glyphicon-search nav-search-icon" aria-hidden="true"></span> -->
            <!-- <input type="text" class="form-control navbar-search-grow" placeholder="Search"> -->

          </div>
          <!-- <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search nav-search-icon" aria-hidden="true"></span></button> -->
        </form>
        </li>
      </ul>
    </div>
  </div>
</div>

<!--  Vid background -->
<video autoplay loop poster="" id="bgvid">
<source src="<?php print $directory;?>/videos/rcl-bg-vid.webm" type="video/webm">
</video>








<!-- Content Begins -->
<div class="main-container container">
  <?php print $messages; ?>
</div>




<!-- Script for video -->
<script>
var video = document.getElementById("bgvid"),
pauseButton = document.querySelector("#polina button");

function vidFade() {
  video.classList.add("stopfade");
}

video.addEventListener('ended', function()
{
// only functional if "loop" is removed
video.pause();
vidFade();
}, false);

pauseButton.addEventListener("click", function() {
  video.classList.toggle("stopfade");
  if (video.paused) {
    video.play();
    pauseButton.innerHTML = "Pause";
  } else {
    video.pause();
    pauseButton.innerHTML = "Paused";
  }
}, false);

video.addEventListener('touchstart', function(e) {
e.preventDefault();
video.play();
})

</script>
