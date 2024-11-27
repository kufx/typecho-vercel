<?php
/**
 * 酷小呵亲自移植Hexo的Stellar主题
 *
 * @package kuheheStellar
 * @author 酷小呵
 * @version 1.0
 * @link https://kuhehe.vip
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>  



<?php $this->need('header.php'); 


?>










<?php if ($this->is('index')): ?>
<header class="header mobile-only"><div class="logo-wrap"><a class="avatar" href="/about/"><div class="bg" style="opacity:0;background-image:url(https://gcore.jsdelivr.net/gh/cdn-x/placeholder@1.0.12/avatar/round/rainbow64@3x.webp);"></div><img no-lazy="" class="avatar lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQIHWNgAAIAAAUAAY27m/MAAAAASUVORK5CYII=" data-src="<?php $this->options->logo(); ?>"></a><a class="title" href="/"><div class="main" ff="title"><?php $this->options->name(); ?></div><div class="sub normal cap"><?php $this->options->logotxt1(); ?></div><div class="sub hover cap" style="opacity:0"><?php $this->options->logotxt2(); ?></div></a></div></header>


<?php $this->need('sidebar.php'); ?>


<?php endif; ?>

<div class="post-list post">
<?php $this->need('article.php'); ?>
</div>



<?php $this->pageNav('👈', '👉', 1, '...', array('wrapTag' => 'div', 'wrapClass' => 'paginator-wrap dis-select', 'itemTag' => 'span', 'textTag' => 'span', 'currentClass' => 'page-number current', 'prevClass' => 'extend prev', 'nextClass' => 'extend next',)); ?>




<?php $this->need('footer.php'); ?>

