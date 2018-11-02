<?php get_header(); ?>

<?php if (have_posts()); ?>

<blockquote><p align="center"><font size="4">You are viewing all posts filed under: <b><?php single_cat_title(); ?></b></font></p></blockquote>

<?php $posts=query_posts($query_string .
'&posts_per_page=5'); ?>

<?php while (have_posts()) : the_post(); ?>
<div id="entry">
<a href="<?php the_permalink() ?>" rel="bookmark" class="blog"><date><?php the_time('d.m.y') ?>&nbsp;
<time><?php the_time('@ h:iA') ?></time></date></a>

<a href="<?php the_permalink() ?>" rel="bookmark" class="blog"><h1><?php the_title(); ?></h1></a>
<dog>Filed under <b><?php the_category(', ') ?></b> with <?php comments_popup_link('no comments', '1 comment', '% comments');?> <?php edit_post_link('EDIT', ' &bull; '); ?>
<br /><?php the_tags('(#',' #', ')'); ?></dog>

			<div id="post">

<?php the_excerpt(); ?>

<p class="respond"><?php comments_popup_link('0', '1', '%');?> & <a href="<?php the_permalink() ?>#respond">comment +</a></p>

</div>

</div>
<div style="clear:both"></div>


<?php endwhile; ?>

<?php get_footer(); ?>