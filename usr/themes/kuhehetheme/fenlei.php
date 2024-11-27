<?php
/**
 * 分类模板
 *
 * @package custom
 *
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<header class="header mobile-only"><div class="logo-wrap"><a class="avatar" href="/about/"><div class="bg" style="opacity:0;background-image:url(https://gcore.jsdelivr.net/gh/cdn-x/placeholder@1.0.12/avatar/round/rainbow64@3x.webp);"></div><img no-lazy="" class="avatar lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQIHWNgAAIAAAUAAY27m/MAAAAASUVORK5CYII=" data-src="https://bu.dusays.com/2024/06/19/6672f2c43c9b0.gif"></a><a class="title" href="/"><div class="main" ff="title"><?php $this->options->name(); ?></div><div class="sub normal cap"><?php $this->options->logotxt1(); ?></div><div class="sub hover cap" style="opacity:0"><?php $this->options->logotxt2(); ?></div></a></div></header>


<?php $this->need('sidebar.php'); ?>


<div class='post-list'>
    <article class='' id='cats'>

<?php \Widget\Metas\Category\Rows::alloc()->to($cates); ?>
<?php while ($cates->next()): ?>

<div>
<a class="cat" href="<?php $cates->permalink(); ?>" <?php if($this->is('category', $cates->slug)): ?>class="text-blue"<?php endif; ?>>
<span class='name'>
<svg style="margin-bottom:1px" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M2 6.95c0-.883 0-1.324.07-1.692A4 4 0 0 1 5.257 2.07C5.626 2 6.068 2 6.95 2c.386 0 .58 0 .766.017a4 4 0 0 1 2.18.904c.144.119.28.255.554.529L11 4c.816.816 1.224 1.224 1.712 1.495a4 4 0 0 0 .848.352C14.098 6 14.675 6 15.828 6h.374c2.632 0 3.949 0 4.804.77c.079.07.154.145.224.224c.77.855.77 2.172.77 4.804V14c0 3.771 0 5.657-1.172 6.828C19.657 22 17.771 22 14 22h-4c-3.771 0-5.657 0-6.828-1.172C2 19.657 2 17.771 2 14z" opacity=".5"/>
<path fill="currentColor" d="M20 6.238c0-.298-.005-.475-.025-.63a3 3 0 0 0-2.583-2.582C17.197 3 16.965 3 16.5 3H9.988c.116.104.247.234.462.45L11 4c.816.816 1.224 1.224 1.712 1.495a4 4 0 0 0 .849.352C14.098 6 14.675 6 15.829 6h.373c1.78 0 2.957 0 3.798.238"/><path fill="currentColor" fill-rule="evenodd" d="M12.25 10a.75.75 0 0 1 .75-.75h5a.75.75 0 0 1 0 1.5h-5a.75.75 0 0 1-.75-.75" clip-rule="evenodd"/>
</svg><?php $cates->name(); ?>
</span>
<span class='badge'>(<?php $cates->count(); ?>)
</span>
</a>
</div>
<?php endwhile; ?>


</div>
</article>


<?php $this->need('footer.php'); ?>
