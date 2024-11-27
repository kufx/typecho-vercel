<?php
/**
 * 归档模板
 *
 * @package custom
 *
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 


?>
<?php $this->need('header.php'); ?>

<header class="header mobile-only"><div class="logo-wrap"><a class="avatar" href="/about/"><div class="bg" style="opacity:0;background-image:url(https://gcore.jsdelivr.net/gh/cdn-x/placeholder@1.0.12/avatar/round/rainbow64@3x.webp);"></div><img no-lazy="" class="avatar lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQIHWNgAAIAAAUAAY27m/MAAAAASUVORK5CYII=" data-src="https://bu.dusays.com/2024/06/19/6672f2c43c9b0.gif"></a><a class="title" href="/"><div class="main" ff="title"><?php $this->options->name(); ?></div><div class="sub normal cap"><?php $this->options->logotxt1(); ?></div><div class="sub hover cap" style="opacity:0"><?php $this->options->logotxt2(); ?></div></a></div></header>


<?php $this->need('sidebar.php'); ?>


<div class="post-list archives">

<?php $this->content(); ?>

<article class="" id="archive">



<?php
    Typecho_Widget::widget('Widget_Contents_Post_Recent', 'pageSize='.
    Typecho_Widget::widget('Widget_Stat')->publishedPostsNum)->to($archives);
    $date_y=0;$date_m=0;$output = '';$huan=0;
    while($archives->next()){
      $date_t = explode(",", date('Y,m,d', $archives->created));
      if($date_y > $date_t[0]){
        $date_m  = 0;
        $article_nums[] = $article_num;
        $output .= '';
      }
      if($date_y != $date_t[0]){
        $date_y  = $date_t[0];$article_num=0;
        $article_flag[] = $tmp_flag = 'archives_'.$huan++;
        $output .= '<div class="archive-header h4">🍎'.$date_y.' <span style="font-size:10px">×'. $tmp_flag .'</span></div>';
      }
      $output .= '<div class="archive-list"><a class="post fs14" href="'.$archives->permalink.'"><time>'.$date_t[1].'.'.$date_t[2].'</time>'.$archives->title.'&nbsp<span style="font-size:8px">'.$archives->commentsNum.'</span></a></div>';
      $article_num++;
    }
    $article_nums[] = $article_num;
    $output .= '';
    echo str_replace($article_flag, $article_nums, $output);
  ?>




<div class="tag-plugin timeline ds-fcircle">
<?php while($archives->next()): ?>
 <div class="timenode"> 
 <div class="header"> 
 <div class="user-info">
 <img src="<?php $this->options->logoUrl(); ?>" onerror="javascript:this.src='https://gcore.jsdelivr.net/gh/cdn-x/placeholder@1.0.12/avatar/round/3442075.svg';"></img>

 <span style="font-weight:bold;"><?php $archives->date('Y-m-d'); ?></span>
 </div>
 <span><?php $archives->category(',', false); ?>
<?php Postviews($archives); ?></span>
 </div>
 <a style="color:var(--text)" class="body" href="<?php $archives->permalink() ?>" target="_blank" rel="external nofollow noopener noreferrer"><?php $archives->title() ?></a>
 </div>
 <?php endwhile; ?>
 
</div>








</article>
</div>



<?php $this->need('footer.php'); ?>
