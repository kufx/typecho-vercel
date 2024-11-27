<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>


<header class="header mobile-only"><div class="logo-wrap"><a class="avatar" href="/about/"><div class="bg" style="opacity:0;background-image:url(https://gcore.jsdelivr.net/gh/cdn-x/placeholder@1.0.12/avatar/round/rainbow64@3x.webp);"></div><img no-lazy="" class="avatar lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQIHWNgAAIAAAUAAY27m/MAAAAASUVORK5CYII=" data-src="https://bu.dusays.com/2024/06/19/6672f2c43c9b0.gif"></a><a class="title" href="/"><div class="main" ff="title"><?php $this->options->name(); ?></div><div class="sub normal cap"><?php $this->options->logotxt1(); ?></div><div class="sub hover cap" style="opacity:0"><?php $this->options->logotxt2(); ?></div></a></div></header>


<?php $this->need('sidebar.php'); ?>




<?php if ($this->have()): ?>

<center>
<h3 style="color:var(--text)" class="archive-title"><?php $this->archiveTitle([ 
            'category' => _t('分类 %s 下的文章'),
            'search'   => _t('包含关键字 %s 的文章'),
            'tag'      => _t('标签 %s 下的文章'),
            'author'   => _t('%s 发布的文章')
        ], '', ''); ?></h3></center>

<div class="post-list post">
<?php $this->need('article.php'); ?>
</div>
    
<?php else: ?>

<article class="md-text error-page">
  
  <p class="what">
    <strong>
      很抱歉，没找到相关内容
    </strong>
  </p>
  <a class="button" id="back" href="/">返回主页</a>
</article>

<?php endif; ?>


<?php $this->pageNav('👈', '👉', 1, '...', array('wrapTag' => 'div', 'wrapClass' => 'paginator-wrap dis-select', 'itemTag' => 'span', 'textTag' => 'span', 'currentClass' => 'page-number current', 'prevClass' => 'extend prev', 'nextClass' => 'extend next',)); ?>

 
     
<?php $this->need('footer.php'); ?>
