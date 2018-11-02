<?php get_header(); ?>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="entry">
<a href="<?php the_permalink() ?>" rel="bookmark" class="blog"><date><?php the_time('d.m.y') ?>&nbsp;
<time><?php the_time('@ h:iA') ?></time></date></a>

<a href="<?php the_permalink() ?>" rel="bookmark" class="blog"><h1><?php the_title(); ?></h1></a>
<dog>Filed under <b><?php the_category(', ') ?></b> with <?php comments_popup_link('no comments', '1 comment', '% comments');?> <?php edit_post_link('EDIT', ' &bull; '); ?>
<br /><?php the_tags('(#',' #', ')'); ?></dog>


<div id="post">
<?php the_content( ); ?> 
</div>

</div>

<?php comments_template(''); ?>

<?php endwhile; ?>

<?php endif; ?>


</div>

<?php get_footer() ?>