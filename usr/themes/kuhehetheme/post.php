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
<a class="cap breadcrumb" href="/">文章</a><span class="sep"></span>
<?php $this->category(','); ?>
</div>

<div class="flex-row" id="post-meta">
<a class="author" href="/author/<?php $this->authorId(); ?>">
<?php $this->author(); ?>
</a>

<span class="sep"></span>
<span class="text created">
<time datetime="2024-02-09T09:02:44.000Z"><?php $this->date('Y-m-d'); ?></time></span>
<span class="sep updated"></span>
<span class="text updated">更新于：<time datetime="2024-04-25T01:18:14.747Z"><?php echo date('Y-m-d H:i:s' , $this->modified); ?></time></span></div>


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


<?php if (is_array($this->options->sidebarBlock) && in_array('Showhuanying3', $this->options->sidebarBlock)): ?>
<div class="tp-ad-text1">
<?php $this->options->文章广告(); ?>
</div>
<?php endif; ?>







<?php if($this->hidden||$this->titleshow): ?>
<style>
    input[type="password"] {
      width: 80%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 2px solid #555;
      border-radius: 4px;
      color: var(--text);
      background-color: var(--block)
    }
.word {
  font-weight: bold;
  margin-bottom: 5px;
  display: flex;
}

.word:hover {
  color: red;
  font-size: 1.5em;
}

  
 .container {
      display: flex;
      justify-content: space-around;  /* 整体居中 */
  }

 .left-column {
      width: 50%;
      padding: 0 2px 0 0;  /* 右侧间隔 3px */
      display: flex;
      
      flex-direction: column;
  }

 .right-column {
      width: 50%;
      padding: 0 0 0 2px;  /* 左侧间隔 3px */
      display: flex;
      align-items: flex-end;
      flex-direction: column;  /* 使文字垂直排列 */
  }

 .left-column img {
      width: 50%;
      height: auto;  /* 自动调整图片高度以保持比例 */
  }

 .right-column p {
      flex: 1;  /* 让文字段落占据剩余空间，从而自动调整大小 */
      margin: 0;  /* 去除默认的段落外边距 */
      line-height: 0.5;  /* 减小段落之间的上下间隔 */
  }



</style>
<div class="tag-plugin colorful note" color="red">
<div style="font-weight:bold" class="title">
<cenyer>
<div class="container">
<div class="left-column">
<?php $this->fields->jiami(); ?>
</div>
<div class="right-column">



<img src="<?php if ($this->fields->jiamimg()): ?><?php $this->fields->jiamimg(); ?><?php endif; ?>"></img>




    


</div>
</div>
</center>

</div></div>
<?php endif; ?>




<?php $this->content(); ?>

<?php 
foreach($this->tags as $val){
    ?>
<a href="<?php echo $val['url']; ?>" itemprop="url" color="<?php if ($this->fields->tagcolor()): ?>
<?php $this->fields->tagcolor(); ?><?php endif; ?>" class="tag-plugin colorful hashtag"><?php echo $val['name']; ?></a>
<?php } ?>

<div class="article-footer fs14">
    <section id="license">
      <div class="header"><span>许可协议</span></div>
      <div class="body"><p>本文采用 <a target="_blank" rel="noopener external nofollow noreferrer" href="https://creativecommons.org/licenses/by-nc-sa/4.0/">署名-非商业性使用-相同方式共享 4.0 国际</a> 许可协议，转载请注明出处。</p>
</div>
    </section>
    </div>
</article>



<div class="related-wrap" id="read-next"><section class="body"><div class="item" id="prev"><div class="note">较新文章</div><?php $this->theNext(); ?></div><div class="item" id="next"><div class="note">较早文章</div><?php $this->thePrev(); ?></div></section></div>



<?php $this->need('comments.php'); ?>

<?php $this->need('footer.php'); ?>
