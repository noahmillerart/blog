<?php get_header(); ?>

<div class="container-md">

    <div class="row">
        <div class="col-md-7 pt-4">

            <?php
            global $post;
            $page_slug = $post->post_name;

            switch ($page_slug) {

                case 'illustrations': ?>

                    <div class="container-sm">

                        <h1 class="display-6">Illustrations</h1>

                        <?php the_content(); ?>

                        <hr>

                        <div class="text-center">

                            <?php
                            $category_id = 'illustrations';

                            $args = array(
                                'category_name' => $category_id,
                                'posts_per_page' => -1
                            );
                            $query = new WP_Query($args);

                            if ($query->have_posts()) {
                                echo '<ul class="gallery p-0">';

                                while ($query->have_posts()) {
                                    $query->the_post();

                                    $thumbnail_html = get_the_post_thumbnail(get_the_ID(), 'thumbnail', array('class' => 'img-fluid'));

                                    if ($thumbnail_html) {
                                        echo '<li>';
                                        echo '<a href="' . get_permalink() . '">';
                                        echo $thumbnail_html;
                                        echo '</a>';
                                        echo '</li>';
                                    }
                                }

                                echo '</ul>';

                                wp_reset_postdata();
                            }
                            ?>

                        </div>

                    </div>

                    <?php break;

                case 'thoughts': ?>

                    <div class="container-sm pb-5">

                        <h1 class="display-6">Thoughts</h1>

                        <?php the_content(); ?>

                        <hr>

                        <div class="py-4">

                            <?php
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $posts_per_page = 10;
                            $category_slug = 'thoughts';

                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => -1,
                                'category_name' => $category_slug,
                            );

                            $all_posts_query = new WP_Query($args);
                            $total_posts = $all_posts_query->found_posts;

                            $offset = ($paged - 1) * $posts_per_page;

                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => $posts_per_page,
                                'offset' => $offset,
                                'category_name' => $category_slug,
                            );

                            $archive_query = new WP_Query($args);

                            if ($archive_query->have_posts()) {
                                while ($archive_query->have_posts()) {
                                    $archive_query->the_post();
                            ?>

                                    <article>
                                        <div class="pb-5" id="archived">
                                            <div class="row">
                                                <div class="col-2 text-center pb-4">
                                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                                                </div>
                                                <div class="col px-2">
                                                    <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                                    <p><?php echo get_the_date('F j, Y'); ?></p>
                                                    <div id="excerpt_arch">
                                                        <?php the_excerpt(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>

                            <?php
                                }

                                $total_pages = ceil($total_posts / $posts_per_page);

                                if ($total_pages < 10) {
                                    echo '<hr>';
                                    echo '<div class="container-fluid text-center p-2" id="pagination">';
                                    echo paginate_links(array(
                                        'total' => $total_pages,
                                        'current' => $paged,
                                        'prev_text' => '&laquo; Previous',
                                        'next_text' => 'Next &raquo;',
                                    ));
                                    echo '</div>';
                                }
                            } else {
                            ?>
                                <p>No posts found.</p>
                            <?php
                            }

                            wp_reset_postdata();
                            ?>
                        </div>

                    </div>

                    <?php break;

                case 'about-me': ?> <!-- About me -->

                    <div class="container-md">
                        <?php the_content(); ?>
                    </div>

                    <?php break;

                default: ?>
                    <!-- Default Content if necessary -->
                    <?php break;
            }
            ?>

        </div>

        <div class="col-md-5">
            <?php get_sidebar(); ?>
        </div>
    </div>

</div>

<?php get_footer(); ?>