<?php
//for each category, show all posts
$cat_args=array(
  'orderby' => 'name',
  'order' => 'ASC'
   );
$categories=get_categories($cat_args);
  foreach($categories as $category) {
    $args=array(
      'showposts' => -1,
      'category__in' => array($category->term_id),
      'caller_get_posts'=>1
    );
    $posts=get_posts($args);
    	
		if ($posts) {
	      echo '<article class="callout large-12" role="article">';
        echo '<h4 class="cat-title"> <a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </h4> ';
        echo '<hr />';
        foreach($posts as $post) {
          setup_postdata($post); ?>
	<div class="row column <?php echo (++$j % 2 == 0) ? 'odd' : 'even'; ?>">			
	<header class="article-header">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		
	</header> <!-- end article header -->
					
	<section class="entry-content" itemprop="articleBody">
		<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a>
		<?php the_content('<button class="tiny">' . __( 'Read more...', 'jointswp' ) . '</button>'); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
    	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
	</footer> <!-- end article footer -->				    						
	</div>

          <?php
        } // foreach($posts
        echo '</article> <!-- end article -->';
      } // if ($posts
    } // foreach($categories
?>