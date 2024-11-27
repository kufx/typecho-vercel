<?php
/**
 * 无顶部页面模板
 *
 * @package custom
 *
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 


global $articleContent;
if ($this->is('single')) {
    $articleContent = $this->content;
}

?>

<?php $this->need('header.php'); ?>

<script>
document.querySelector('.banner.top').style.display = 'none'
</script>

<article class="md-text content">

<div class="tag-plugin banner">
<img class="bg lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQIHWNgAAIAAAUAAY27m/MAAAAASUVORK5CYII=" data-src="<?php $this->fields->mdbimg(); ?>">

<div class="content">
<div class="top">

<button class="back cap" onclick="window.history.back()">
<svg aria-hidden="true" viewBox="0 0 16 16" fill="currentColor"><path fill-rule="evenodd" d="M7.78 12.53a.75.75 0 01-1.06 0L2.47 8.28a.75.75 0 010-1.06l4.25-4.25a.75.75 0 011.06 1.06L4.81 7h7.44a.75.75 0 010 1.5H4.81l2.97 2.97a.75.75 0 010 1.06z"></path></svg>
</button>

<div class="tag-plugin navbar">
<nav>
<?php if ($this->fields->mdbbt()): ?>
<?php $this->fields->mdbbt(); ?>
<?php endif; ?>
</nav>
</div></div>
<div class="bottom">
<div class="text-area">
<div class="text title">
<?php $this->fields->mdbtitle(); ?>
</div>
</div></div>
</div></div>



<?php echo getContentTest($this->content); ?>




</article>
<?php $this->need('comments.php'); ?>




<?php $this->need('footer.php'); ?>
