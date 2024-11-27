<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-dns-prefetch-control" content="on">
  
  <meta name="renderer" content="webkit">
  <meta name="force-rendering" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <meta name="HandheldFriendly" content="True">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#000">
  <meta name="theme-color" content="#f9fafb">
  
<title>
<?php if($this->is('index')): ?>
<?php $this->options->title(); ?>
<?php else :?>
<?php $this->archiveTitle('','',''); ?>
<?php endif; ?>
</title>
 

  
<meta name="description" content="<?php $this->options->description(); ?>">

<meta name="keywords" content="小呵爱分享">

  <!-- feed -->
  
<link rel="alternate" href="/atom.xml" title="酷小呵" type="application/atom+xml">

<link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">

<!-- <link rel="stylesheet" href="<?php $this->options->themeUrl('style2.css'); ?>"> -->

<link rel="stylesheet" href="<?php $this->options->themeUrl('css/main.css'); ?>">

<link rel="stylesheet" href="<?php $this->options->themeUrl('css/custom.css'); ?>">

<link rel="stylesheet" href="<?php $this->options->themeUrl('css/ys.css'); ?>">







<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/css/iziToast.min.css">

 <link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/lxgw-wenkai-screen-webfont/1.7.0/style.min.css" media="all"> 

<!-- <link rel="stylesheet" href="https://npm.elemecdn.com/lxgw-wenkai-webfont@1.1.0/lxgwwenkai-regular.css" media="all"> -->




<script src="<?php $this->options->themeUrl('js/ssbg.js'); ?>"></script>



<style>
<?php if ($this->options->headcs()): ?>
<?php $this->options->headcs(); ?>
<?php endif; ?>
</style>



</head>

<script src="//instant.page/5.2.0" type="module" integrity="sha384-jnZyxPjiipYXnSU0ygqeac2q7CVYMbh84q0uHVRRxEtvFPiQYbXWUorga2aqZJ0z"></script>


<body>

<div class="l_body s:aa index tech" id="start"><aside class="l_left"><div class="leftbar-container">

<header class="header">
<div class="logo-wrap">
<a class="avatar" href="/about/">
<div class="bg" style="opacity:0;background-image:url(https://gcore.jsdelivr.net/gh/cdn-x/placeholder@1.0.12/avatar/round/rainbow64@3x.webp);">
</div>
<img no-lazy="" class="avatar lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQIHWNgAAIAAAUAAY27m/MAAAAASUVORK5CYII=" data-src="<?php $this->options->logoUrl(); ?>">
</a>

<a class="title" href="/">
<div class="main" ff="title">
<?php $this->options->title(); ?>
</div>

<div class="sub normal cap">
<?php $this->options->logotxt1(); ?>
</div>

<div class="sub hover cap" style="opacity:0">
<?php $this->options->logotxt2(); ?>
</div>
</a>

</div>




<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?fcaa976af98007d45a3f2d0769b0034b";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>



</header>


<div class="nav-area">

<div class="search-wrapper" id="search-wrapper">
<form class="search-form">
<a type="submit" class="search-button" onclick="document.getElementById(&quot;search-input&quot;).focus();">
<svg t="1705074644177" viewBox="0 0 1025 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1560" width="200" height="200">
<path d="M1008.839137 935.96571L792.364903 719.491476a56.783488 56.783488 0 0 0-80.152866 0 358.53545 358.53545 0 1 1 100.857314-335.166073 362.840335 362.840335 0 0 1-3.689902 170.145468 51.248635 51.248635 0 1 0 99.217358 26.444296 462.057693 462.057693 0 1 0-158.255785 242.303546l185.930047 185.725053a51.248635 51.248635 0 0 0 72.568068 0 51.248635 51.248635 0 0 0 0-72.978056z" p-id="1561"></path>
<path d="M616.479587 615.969233a50.428657 50.428657 0 0 0-61.498362-5.534852 174.655348 174.655348 0 0 1-177.525271 3.484907 49.403684 49.403684 0 0 0-58.833433 6.76482l-3.074918 2.869923a49.403684 49.403684 0 0 0 8.609771 78.10292 277.767601 277.767601 0 0 0 286.992355-5.739847 49.403684 49.403684 0 0 0 8.404776-76.667958z" p-id="1562">
</path>
</svg>
</a>
<input type="text" class="search-input" class="text" name="s" id="search-input" placeholder="<?php $this->options->搜索框提示(); ?>">
</form>
<div id="search-result">
</div>
<div class="search-no-result">没有找到内容！</div>
</div>


<nav class="menu dis-select">


<a <?php if ($this->is('index')): ?> class="nav-item active";<?php else: ?>class="nav-item";<?php endif; ?> title="首页" href="<?php $this->options ->siteUrl(); ?>" style="color:#1BCDFC">
<span>首页</span>
</a>
<?php \Widget\Contents\Page\Rows::alloc()->to($pages); ?>
<?php while ($pages->next()): ?>
<?php if ($pages->fields->headerDisplay2 == 1): ?>
<a class="nav-item <?php echo $this->is('page', $pages->slug)?'active':''; ?>"; style="color:#1BCDFC" href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>">
<span>
<?php if ($pages->fields->zdhxswz()): ?>
<?php $pages->fields->zdhxswz(); ?>
<?php endif; ?>
</span></a>
<?php endif; ?>
<?php endwhile; ?>
<a class="nav-item" title="登录" href="<?php $this->options ->siteUrl(); ?>/admin" style="color:#E4080A"><span>登录</span>
</a>
</nav>
</div>

<div class="widgets">

<?php if (is_array($this->options->sidebarBlock) && in_array('Showhuanying1', $this->options->sidebarBlock)): ?>

<widget class="widget-wrapper markdown"><div class="widget-header dis-select"><span class="name">⏰️ 欢迎光临</span></div><div class="widget-body fs14">
<?php $this->options->侧边栏欢迎语(); ?>

<?php if (is_array($this->options->sidebarBlock) && in_array('Showxdhbt', $this->options->sidebarBlock)): ?>
<div class="linklist center" style="grid-template-columns:repeat(<1,1fr);">
<?php $this->options->xdhbt(); ?>
</div>
<?php endif; ?>
</div></widget>
<?php endif; ?>



<widget class="widget-wrapper markdown">
<div class="widget-header dis-select"><span class="name">🍎 小导航</span></div>
<div class="widget-body fs14">

<div class="linklist center" style="grid-template-columns:repeat(<?php $this->options->小导航列数(); ?>,1fr);">

<a class="link" title="夜间模式" href="javascript:switchTheme()" rel="external nofollow noreferrer">
<div class="flex">
<span>夜间模式</span>
</div>
</a>

<?php $this->options->小导航内容(); ?>

</div>
</div>
</widget>



<?php if (is_array($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>

<widget class="widget-wrapper post-list"><div class="widget-header dis-select">
<span class="name">最新文章</span>


<a class="cap-action" id="rss" title="Subscribe" href="/"> 
 <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 24 24"> 
  <path fill="currentColor" d="M5 21q-.825 0-1.412-.587T3 19q0-.825.588-1.412T5 17q.825 0 1.413.588T7 19q0 .825-.587 1.413T5 21m13.5 0q-.65 0-1.088-.475T16.9 19.4q-.275-2.425-1.312-4.537T12.9 11.1q-1.65-1.65-3.762-2.687T4.6 7.1q-.65-.075-1.125-.512T3 5.5q0-.65.45-1.062t1.075-.363q3.075.275 5.763 1.563t4.737 3.337q2.05 2.05 3.338 4.738t1.562 5.762q.05.625-.363 1.075T18.5 21m-6 0q-.625 0-1.075-.437T10.85 19.5q-.225-1.225-.787-2.262T8.65 15.35q-.85-.85-1.888-1.412T4.5 13.15q-.625-.125-1.062-.575T3 11.5q0-.65.45-1.075t1.075-.325q1.825.25 3.413 1.063t2.837 2.062q1.25 1.25 2.063 2.838t1.062 3.412q.1.625-.325 1.075T12.5 21"></path>
 </svg>
 </a>


</div>
<div class="widget-body fs14">

<?php $this->widget('Widget_Contents_Post_Recent','pageSize=5')->to($news);?>
  <?php if($news->have()):?>
    <?php while($news->next()): ?>   
        <a class="item title" href="<?php $news->permalink();?>">
        <span class="title"><?php $news->title(); ?></span>
          </a>
    <?php endwhile; ?>
  <?php endif; ?>

</div></widget>
<?php endif; ?>



</div></aside><div class="l_main" id="main">





    
