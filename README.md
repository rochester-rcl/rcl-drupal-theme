> This project is currently under development.

# RCL Drupal Theme
A custom drupal theme created for the River Campus libraries web site.

## Requirements
Before you install please make sure your Drupal instance meets the following requirements.

- [Bootstrap](https://drupal.org/project/bootstrap) 7.x-2.0 or 7.x-3.0 (base-theme must be enabled).

- [jQuery Update](https://drupal.org/project/jquery_update) jQuery Update - 7.x-2.4 or higher. Bootstrap 2 requires a minimum jQuery version of 1.7 or higher, while Bootstrap 3 requires jQuery 1.9+

### Installation
Install this theme as you would any other Drupal theme.

1. Move the **rcl_drupal_theme** folder into **sites/all/themes**
2. Unzip the contents of **install_modules** folder into the **sites/all/modules folder**. *See the install_modules README for more information about module installs*
3. Download the [Bootstrap 3](https://drupal.org/project/bootstrap) theme and unzip into **sites/all/themes**.
4. In the Drupal admin go to **Apperance** > then find the **Bootstrap 3** theme > enable it but **DO NOT** set it as default.
5. In the Drupal admin go to **Apperance** > then find the **RCL Theme** > activate it & set as default.





### File Paths
If you add images into the theme you must use the correct php based path and place your image into the **images** folder.
```
<img class="" src="<?php print $directory;?>/images/<filename>" />
```

### Known Issues
- Admin bar can be buggy on mobile


### Drupal Configuration Requirements
- After login trigger must be in place to take them to "/staff-login" or the page they were intending to be sent prior to login state. (*Looking into possible modules for this as well.*)

### Other
Temporary place for uncategorized items

- PHP code for printing page title:
```
<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">

```

- To map a custom content type to a PHP template file (tpl.php) us:
```
node--[content-type].tpl.php
page--[view-page-name].tpl.php

Make sure to use 2 dashes and use the machine readable name for the content types.
Place them in the templates-folder of your theme.
```

- **Navigation PHP**: Place this into the page.tpl.php file to generate menu. Currently working on a new elseif statment that allows the user to override the default menu with the dynamic drupal one. Will remove this when that is complete.
```
<?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
  <div class="navbar-collapse collapse navbar-right">
    <nav role="navigation">
      <?php if (!empty($primary_nav)): ?>
        <?php print render($primary_nav); ?>
      <?php endif; ?>
      <?php if (!empty($secondary_nav)): ?>
        <?php print render($secondary_nav); ?>
      <?php endif; ?>
      <?php if (!empty($page['navigation'])): ?>
        <?php print render($page['navigation']); ?>
      <?php endif; ?>
      <?php if (!empty($page['navigation'])): ?>
        <?php print render($page['navigation']); ?>
      <?php endif; ?>
    </nav>
  </div>
<?php endif; ?>
```
