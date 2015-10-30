
# Install Files
These files a custom configurations for modules, libraries, and features.

###ckeditor
**ckeditor.zip** - This file contains the *ckeditor* module and editor. To Install simply drag the *ckeditor* file into the module directory on your drupal instance and enable.

**How to upgrade or add plugins ckeditor**
The ckeditor consists of a drupal module and the editor itself.

If you plan on adding plugins. it's recommended that you start with a clean ckeditor configuration from [ckeditor.com](http://ckeditor.com/download).

1. [download the module](https://www.drupal.org/project/ckeditor) and Install
2. Then [download the **Full Package** package](http://ckeditor.com/download). Strongly advise the following plugins.
- Embedding Plugins
- [Auto Embed](http://ckeditor.com/addon/autoembed)
- [Media Embed](http://ckeditor.com/addon/embed)
- [Enhanced Image](http://ckeditor.com/addon/image2)
- [Semantic Media Embed](http://ckeditor.com/addon/embedsemantic)
- Skin
- [BootstrapCK4](http://ckeditor.com/addon/bootstrapck)


###Theme Feature Set
A packed up set of features including custom content types, user roles,
rcl_drupal_theme_feature_set_v1



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
