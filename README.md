> This project is currently under development.

# RCL Drupal Theme
A custom drupal theme created for the River Campus libraries web site.

## Requirements
Before you install please make sure your Drupal instance meets the following requirements.

- [Bootstrap](https://drupal.org/project/bootstrap) 7.x-2.0 or 7.x-3.0 (base-theme must be enabled).

- [jQuery Update](https://drupal.org/project/jquery_update) jQuery Update - 7.x-2.4 or higher. Bootstrap 2 requires a minimum jQuery version of 1.7 or higher, while Bootstrap 3 requires jQuery 1.9+

### Installation
Install this theme as you would any other Drupal theme.
```
1. Move folder into sites/all/themes
2. In the Drupal admin go to **Apperance**
3. Find the **RCL Theme** then activate & set as default.
```

### Modules

- [Views](https://www.drupal.org/project/views)
Allows you to display dynamic content via the database.

### Editors and Media Management Modules

- [CKEditor](http://ckeditor.com/download)
WYSIWYG text editor. **Installation:**
  1. First [download the module](https://www.drupal.org/project/ckeditor) and Install
  2. Then [download the **Full Package** package](http://ckeditor.com/download)
    - Plugins
      - [Auto Embed](http://ckeditor.com/addon/autoembed)
      - [Media Embed](http://ckeditor.com/addon/embed)
      - [Enhanced Image](http://ckeditor.com/addon/image2)
      - [Semantic Media Embed](http://ckeditor.com/addon/embedsemantic)
    - Skin
      - [BootstrapCK4](http://ckeditor.com/addon/bootstrapck)
  3. Move unziped **ckeditor** folder into: **sites » all » libraries** folder. Note: If there is no **libraries** folder then create one.
  4. Go to **Administration » Modules** and enable.


#### Other Modules

- [Adminimal - Responsive Administration Theme](https://www.drupal.org/project/adminimal_admin_menu)
A better drupal admin theme.
  - **Installing:** Install like just like a normal Drupal theme.
    1. Go to **admin » appearance**, scroll to the bottom of page
    2. Select **Adminimal** from the dropdown, and click **Save Configuration**.
    3. After you have set the theme it is suggested that you use the **Material** skin.
    4. To change the skin go to **Administration » Appearance » Settings** select **Material (BETA version)** from the dropdown and click **Save Configuration** at the bottom of the page.

- [Adminimal Administration Menu](https://www.drupal.org/project/adminimal_admin_menu)
Minimalist admin menu.

- [Module Filter](https://www.drupal.org/project/module_filter)
Helps you to filter and find you modules quickly.

- [Devel](https://www.drupal.org/project/devel)
Devel was used to prevent Drupal from caching theme. After installing go to "Administration » Configuration » Development » Devel settings" and check **Rebuild the theme registry on every page load**



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
