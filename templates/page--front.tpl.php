

<!--=========  HEADER   ==========-->
<!-- Chat Online/Offline Toggle -->
<?php
  $date = new DateTime();
  $timestamp = $date->getTimestamp();
  $chat_status =  file_get_contents('http://us.libraryh3lp.com/presence/jid/urhomepage1/chat.libraryh3lp.com/text?'. $timestamp);
?>

<!-- UofR bar -->
<div class="uofrbar">
 <div class="container">
   <!-- UofR Logo -->
   <a class="" href="#">
     <img class="navbar-brand-uofr-logo" alt="University of Rochester" src="<?php print base_path() . drupal_get_path('theme', 'rcl_drupal_theme');?>/images/logo-uofr.png" />
   </a>
 </div>
</div>
<!-- RCL Header / Nav  -->
<header id="navbar" role="banner" class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <!-- If user uploads a custom logo-->
      <?php if ($logo): ?>
      <a class="navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
      <?php endif; ?>
      <!-- If user does not upload a custom logo - print default logo -->
      <?php if (!empty($site_name)): ?>
      <a class="navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img class="" alt="River Campus Libraries" src="<?php print base_path() . drupal_get_path('theme', 'rcl_drupal_theme');?>/images/logo-rcl-blue.png" />
      </a>
      <?php endif; ?>
      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <!-- Nav links -->
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://catalog.lib.rochester.edu/vwebv/myAccount">My Accounts</a></li>
        <li><a href="http://www.library.rochester.edu/files/chat/chat.php" onclick="window.open(this.href, 'mywindowtitle','width=300,height=500'); return false" target="_blank" data-chat-status="<?php print $chat_status;?>" class="chat-toggle"></a></li>
        <li><a href="http://www.library.rochester.edu/contact-us">Contact</a></li>
        <li><a href="http://www.library.rochester.edu/giving">Giving</a></li>
        <li>
        <!-- Nav Search box -->
          <form class="navbar-form navbar-left" name="sitesearch" action="http://www.library.rochester.edu/site-search" method="get">
            <div class="form-group">
              <input class="form-control navbar-search-grow" type="text" name="search"  placeholder="Search" title="Seach the Library website">
              </div>
          </form>
          <!-- <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search nav-search-icon" aria-hidden="true"></span></button> -->
        </form>
        </li>
      </ul>
    </div>
  </div>
</header>
<div class="navbar-spacer">Header</div>
<!--======= /HEADER  ========-->










<div class="under-const-bg-image">
<!-- Content Begins -->
<div class="main-container container">
  <?php print $messages; ?>
  <div class="hp-cover">
    <img src="<?php print base_path() . drupal_get_path('theme', 'rcl_drupal_theme');?>/images/lam-square-hp-bg.jpg" />
  </div>

</div>
</div>
<div class="hp-content-feed">
</div>




<!-- Script for video -->
<!-- <script>
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

</script> -->


<script src="<?php print base_path() . drupal_get_path('theme', 'rcl_drupal_theme') . '/js/chat.js'; ?>"></script>
<script src="<?php print base_path() . drupal_get_path('theme', 'rcl_drupal_theme') . '/js/nav.js'; ?>"></script>
