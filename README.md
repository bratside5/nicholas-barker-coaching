#### Read: [Official Docs Page](https://understrap.github.io/)

# Nicholas Barker Coaching

Wordpress Theme Using Bootstrap 4

## Production Folder
The folder intended for the server is located in the /dist directory. Any files outside of that directory are the uncompiled development files, if you intend to work on any of the themes core files then clone the repository to your machine and run the instructions below. Then once you have completed local development run the ```gulp compile ``` command and push your changes back to github.

## Dev Installation

If loading the development version for the first time then ensure you have installed Node/NPM and run in the root of the theme:

```bash
npm install
```

## Usage

### Development Commands using Gulp.js

#### Firstly run this command to copy all src assets:

This is required before running anything else

```javascript
gulp copy-assets
```

#### To watch all your sass files and compile:

```javascript
gulp watch
```

#### When you finished making changes to the development site you can compile and minify your code:

This will build a production bundle in the /dist folder

```javascript
gulp compile
```

## General Information on the Theme

This theme has been built using Understrap as a baseline, I would advise against updating the theme code itself as this may overwrite the changes made...

#### Just stick to updating WP core and your plugins

## CSS and Sass Files Information

- Your design goes into: `/sass/theme`.
  - Add your styles to the `/sass/theme/_theme.scss` file
  - And your variables to the `/sass/theme/_theme_variables.scss`
  - Or add other .scss files into it and `@import` it into `/sass/theme/_theme.scss`.

## General Code Footprint

This theme is generally powered by ACF and CPT providing the fields and post-types. You can find the archive files and the single page files at the root of the theme and the content loops are in
the /loop-templates directory. Any new post types should follow this directory hierarchy.

## Page Templates

There are several different page template files: (1) blank template, (2) empty template, and (3) full width template.

### Blank Template

The `blank.php` template is useful when working with various page builders and can be used as a starting blank canvas.

### Empty Template

The `empty.php` template displays a header and a footer only. A good starting point for landing pages.

### Full Width Template

The `fullwidthpage.php` template has full width layout without a sidebar.

#### Helpful Snippets
You can also easily add a WP Query directly into the code to query your chosen post type if need be: The below snippet will query for a post type and return a boostrap grid of images with two responsive breakpoints

```php
<div class="row">
            <?php $the_query=new WP_Query( array( 'post_type'=> 'qualifications' ) ); ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <?php $featured_img_url=get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
            <div class="col-xs-6 col-md-4 my-3">
                <div class="container">
                    <img class="img-responsive qualification-img" src="<?php echo $featured_img_url ?>" alt="">
                </div>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
            <p>
                <?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
            </p>
            <?php endif; ?>
        </div>

```

# Licenses & Credits

- Font Awesome: http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
- Bootstrap: http://getbootstrap.com | https://github.com/twbs/bootstrap/blob/master/LICENSE (Code licensed under MIT documentation under CC BY 3.0.)
  and of course
- jQuery: https://jquery.org | (Code licensed under MIT)
- WP Bootstrap Navwalker by Edward McIntyre: https://github.com/twittem/wp-bootstrap-navwalker | GNU GPL
