<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="entry">
<a href="<?php the_permalink() ?>" rel="bookmark" class="blog"><date><?php the_time('d.m.y') ?>&nbsp;
<time><?php the_time('@ h:iA') ?></time></date></a>

<a href="<?php the_permalink() ?>" rel="bookmark" class="blog"><h1><?php the_title(); ?></h1></a>
<dog>Filed under <b><?php the_category(', ') ?></b> with <?php comments_popup_link('no comments', '1 comment', '% comments');?> <?php edit_post_link('EDIT', ' &bull; '); ?>
<br /><?php the_tags('(#',' #', ')'); ?></dog>


<div id="post">

<?php the_content( '[READ MORE...]' , TRUE, ''); ?> 

<p class="respond"><?php comments_popup_link('0', '1', '%');?> & <a href="<?php the_permalink() ?>#respond">comment +</a></p>

</div>
</div>
<div style="clear:both"></div>


<?php endwhile; ?>




<?php else : ?>

<h1>Error</h1>

<div id="entry">
<p>This page does not exist! If you've clicked on a broken link, feel free to <a href="http://dumb.ricetard.nu">contact me</a> :)</p>

<p>You can try looking in the <a href="/archives">archives or searching</a> if you are looking for a particular post. <a href="http://love.ricetard.nu/" target="_blank">My network</a> also branches out to my various subdomains, which are separated into web/content, fanlistings, and portfolio.</p>

</div>



<?php endif; ?>
</div>


<?php get_footer() ?>