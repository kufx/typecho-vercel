<?php
/**
 * 标签模板
 *
 * @package custom
 *
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<header class="header mobile-only"><div class="logo-wrap"><a class="avatar" href="/about/"><div class="bg" style="opacity:0;background-image:url(https://gcore.jsdelivr.net/gh/cdn-x/placeholder@1.0.12/avatar/round/rainbow64@3x.webp);"></div><img no-lazy="" class="avatar lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQIHWNgAAIAAAUAAY27m/MAAAAASUVORK5CYII=" data-src="https://bu.dusays.com/2024/06/19/6672f2c43c9b0.gif"></a><a class="title" href="/"><div class="main" ff="title"><?php $this->options->name(); ?></div><div class="sub normal cap"><?php $this->options->logotxt1(); ?></div><div class="sub hover cap" style="opacity:0"><?php $this->options->logotxt2(); ?></div></a></div></header>


<?php $this->need('sidebar.php'); ?>

<?php $this->content(); ?>

<div class='post-list'>

<?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=mid&ignoreZeroCount=1&desc=0&limit=1000')->to($tags); ?>

<article class='' id='tags'>


<?php if($tags->have()): ?>
<?php while ($tags->next()): ?>

<a class='tag' href="<?php $tags->permalink(); ?>" rel="tag" class="size-<?php $tags->split(5, 10, 20, 30); ?>" title="<?php $tags->count(); ?> 个话题">
<span class='name'><?php $tags->name(); ?>·<?php $tags->count(); ?>
</span>
</a>

<?php endwhile; ?>
<?php else: ?>
    <li><?php _e('没有任何标签'); ?></li>
<?php endif; ?>
      



</article>
  </div>


<?php $this->need('footer.php'); ?>
