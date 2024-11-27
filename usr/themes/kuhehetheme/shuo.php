<?php
/**
 * 说说模板
 *
 * @package custom
 *
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>


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
        <h1 class="text title"><span><?php $this->title() ?></span></h1>

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





<div class="tag-plugin timeline ds-fcircle">
<?php \Widget\Contents\Post\Recent::alloc('pageSize=10000')->to($news); ?>
<?php while($news->next()): ?>
<?php if ($news->fields->showsay == 1): ?>
 <div class="timenode" index="0"> 
 <div class="header"> 
 <div class="user-info"> 
 <img src="<?php $this->options->logoUrl(); ?>" onerror="javascript:this.src='https://gcore.jsdelivr.net/gh/cdn-x/placeholder@1.0.12/avatar/round/3442075.svg';"></img>
 <span><a class="user-info" href="/" target="_blank" rel="external nofollow noopener noreferrer"><?php $news->author() ?></a></span>
 </div>
 <span><?php $news->date('Y-m-d'); ?>&nbsp
·&nbsp<?php $news->category(',', false); ?>&nbsp·<?php Postviews($news); ?><?php if($this->user->hasLogin()):?>&nbsp·&nbsp
 <a target="_blank" href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php echo $news->cid;?>" style="font-weight:bold"><?php _e('编辑'); ?></a>
<?php endif;?>
 </span>
 </div>
 <div class="body fs14">
 <span style="font-weight:bold;color:#15B69C;font-size:20px">
 <?php $news->title() ?>
 </span>
 <?php $news->content(); ?>
 <hr>
 <span style="font-weight:bold;float:left;font-size:10px">
 最后更新：<br><?php echo date('m-d H:i:s', $news->modified);?>
 </span>
 <a style="font-weight:bold;float:right" href="<?php $news->permalink() ?>" target="_blank">阅读原文</a>
 </div>

 </div>
<?php endif; ?>
 <?php endwhile; ?>

</div>








</article>

<?php $this->need('footer.php'); ?>
