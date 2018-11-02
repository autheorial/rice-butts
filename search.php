<?php get_header(); ?>


<h1>Search results</h1>

<blockquote><p>There are <b><?php 
$search_count = 0; $search = new WP_Query("s=$s & showposts=-1"); if($search->have_posts()) : while($search->have_posts()) : $search->the_post(); $search_count++; endwhile; endif; echo $search_count;?></b> total search results. They include both posts and pages. I hope you found what you were looking for!</blockquote>

<hr />

<?php $posts=query_posts($query_string .
'&posts_per_page=5'); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<a href="<?php the_permalink() ?>" rel="bookmark" class="blog"><date><?php the_time('d.m.y') ?>&nbsp;
<time><?php the_time('@ h:iA') ?></time></date></a>

<a href="<?php the_permalink() ?>" rel="bookmark" class="blog"><h1><?php the_title(); ?></h1></a>
<dog>Filed under <b><?php the_category(', ') ?></b> with <?php comments_popup_link('no comments', '1 comment', '% comments');?> <?php edit_post_link('EDIT', ' &bull; '); ?>
<br /><?php the_tags('(#',' #', ')'); ?></dog>

<div id="post">
<?php the_excerpt(); ?> <br />
</div>
<div style="clear:both"></div>
<br />

<?php endwhile; ?>

<?php next_posts_link('<span class="drr">&laquo; Go Back</span>') ?>
<?php previous_posts_link('<span class="dr">Go Forward &raquo;</span>') ?>

<?php else : ?>
<br />
<h1>Not found</h1>
<div id="entry">
<p>No search results have been found.</p>
<p>You may <a href="http://dumb.ricetard.nu" target="_blank">contact me</a> if you are looking for something, or think that this is an error. <a href="http://love.ricetard.nu/" target="_blank">My network</a> also branches out to my various subdomains, which are separated into web/content, fanlistings, and portfolio.</p>
<p><?php get_search_form(); ?></p>
</div>
<?php endif; ?>
</div>
<?php get_footer(); ?>