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

#### Helpful Modules

- [Module Filter](https://www.drupal.org/project/module_filter)
Helps you to filter and find you modules quickly.
- [Devel](https://www.drupal.org/project/devel)
Devel was used to prevent Drupal from caching theme. After installing go to "Administration » Configuration » Development » Devel settings" and check **Rebuild the theme registry on every page load**

### File Paths
If you add images into the theme you must use the correct php based path and place your image into the **images** folder.
```
<img class="" src="<?php print $directory;?>/images/<filename>" />
```
