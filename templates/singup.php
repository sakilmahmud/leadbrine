<?php
/**
 * Template Name: Signup Page
 */


get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php
        
        ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </header><!-- .entry-header -->

            <div class="entry-content">
                <?php the_content(); ?>

                <form method="post" action="<?php echo get_template_directory_uri()?>/sub.php">
                    <p>
                        <label for="name">Name:</label><br>
                        <input type="text" name="name" id="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>">
                    </p>
                    <p>
                        <label for="email">Email:</label><br>
                        <input type="email" name="email" id="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
                    </p>
                    <p>
                        <label for="password">Password:</label><br>
                        <input type="password" name="password" id="password">
                    </p>
                    <p>
                        <input type="hidden" name="signup" value="yes">
                        <input type="submit" value="Sign Up">
                    </p>
                </form>
            </div><!-- .entry-content -->
        </article><!-- #post-<?php the_ID(); ?> -->

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
