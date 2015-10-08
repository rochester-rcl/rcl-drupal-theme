
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
          <img class="" src="<?php print $directory;?>/images/logo-rcl.png" />
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

<!-- Content Begins -->
<div class="main-container container">
  <?php print $messages; ?>
</div>
