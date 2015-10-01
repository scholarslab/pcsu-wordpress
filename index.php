<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php wp_title('·', true); ?></title>

        <!-- Feeds -->
        <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom feed" href="<?php bloginfo('atom_url'); ?>">
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS feed" href="<?php bloginfo('rss2_url'); ?>">

        <!-- Stylesheets -->
        <link href='http://fonts.googleapis.com/css?family=Meddon|Libre+Baskerville:400,700,400italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

        <!-- Modernizr and Friends -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/responsive-nav.js/1.0.32/responsive-nav.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/headroom/0.6.0/headroom.min.js"></script>

        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>

    <a href="#main" class="audible">Skip to main content</a>

    <header role="banner" id="banner">

    <a id="uva-link" href="<?php echo home_url(); ?>">
        <span id="rotunda"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/rotunda-white.png" alt="Rotunda
                icon"></span>
                <img id="uva-logotype" src="<?php bloginfo('stylesheet_directory'); ?>/images/uva-logotype-white.png"
            alt="University of Virginia logo">
        </a>
        <h1><a href="<?php echo home_url(); ?>">President’s Commission on <strong>Slavery and the
        University</strong></a></h1>
        <nav id="global-navigation" role="navigation">
        <?php
        // Our main navigation.
        wp_nav_menu(
            array(
                'theme_location' => 'header',
                'container' => ''
            )
        );
        ?>
        </nav>
        <?php // get_search_form(); ?>
    </header>

    <div role="main" id="main">
<?php if (is_home()) : ?>
        <ul id="posts">
<?php endif; ?>
<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
<?php if (is_singular()) : ?>
        <article>
<?php if (!is_front_page()) : ?>
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<?php endif; ?>
            <?php the_content(); ?>
        </article>
<?php else : ?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <time datetime="<?php the_date('Y-m-d'); ?>"><?php the_time('F j, Y'); ?></time></li>
<?php endif; endwhile; endif; ?>
<?php if (is_home()) : ?>
        </ul>
<?php endif; ?>

    </div>

    <footer role="contentinfo">
        <p id="copyright">Copyright &copy; 2013 Rector and Visitors of the
        University of Virginia.<br>Designed and maintained by the <a
            href="http://scholarslab.org">Scholars’ Lab</a> at the <a
            href="http://library.virginia.edu">University
            of Virginia Library</a></p>
        <a href="http://virgina.edu" id="uva-logo-link"><img
        src="<?php bloginfo('stylesheet_directory'); ?>/images/uva-logotype-black.png" alt="University of Virginia logo"></a>
        <a href="http://scholarslab.org" id="slab-logo-link"><img
            src="http://static.scholarslab.org/images/logos/slab/slab-logo-black-125px.png"
            alt="Scholars’ Lab logo"></a>
    </footer>
<?php wp_footer(); ?>
    </body>
</html>
