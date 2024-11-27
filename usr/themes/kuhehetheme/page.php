<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; 

global $articleContent;
if ($this->is('single')) {
    $articleContent = $this->content;
}

?>

<?php $this->need('header.php'); ?>

      

<div class="article banner top">
<?php if ($this->fields->banner === "show") : ?>
<img class="bg lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQIHWNgAAIAAAUAAY27m/MAAAAASUVORK5CYII=" data-src="<?php $this->fields->image(); ?>">
<?php endif; ?>

<div class="content">

<div class="top bread-nav footnote">

<div class="left">

<div class="flex-row" id="breadcrumb">

<a class="cap breadcrumb" href="/">主页</a>

<span class="sep"></span>

<a class="cap breadcrumb" href="<?php $this->permalink() ?>">
<?php $this->title() ?>
</a>

</div>

<div class="flex-row" id="post-meta">

<a class="author" href="/author/<?php $this->authorId(); ?>">

<?php $this->author() ?>
</a>

<span class="sep"></span>

<span class="text created">
<time datetime="2024-02-27T14:16:18.000Z">
<?php $this->date('Y-m-d'); ?>
</time>
</span>

<span class="sep updated"></span>

<span class="text updated">
更新于：<time datetime="">
<?php echo date('Y-m-d' , $this->modified); ?>
</time>
</span>
</div>


<div class="flex-row" id="breadcrumb">
<span class="text"><?php Postviews($this); ?></span>
</div>

</div></div>
   
 
    <div class="bottom only-title">
      
<div class="text-area">
<h1 class="text title">
<span>
<?php $this->title() ?>
</span>
</h1>
<div class="text subtitle">
<?php if ($this->fields->subtitle()): ?>
<?php $this->fields->subtitle(); ?>
<?php endif; ?>
</div> 
      </div>
    </div>
    
  </div>
  </div>

<article class="md-text content">

<?php $this->content(); ?>

</article>

<?php $this->need('footer.php'); ?>
