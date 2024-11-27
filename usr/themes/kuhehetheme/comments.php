<?php function threadedComments($comments, $options) {
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';  //如果是文章作者的评论添加 .comment-by-author 样式
        } else {
            $commentClass .= ' comment-by-user';  //如果是评论作者的添加 .comment-by-user 样式
        }
    } 
    $commentLevelClass = $comments->_levels > 0 ? ' comment-child' : ' comment-parent';  //评论层数大于0为子级，否则是父级

?>





<li class="timenode" id="<?php $comments->theId(); ?>"> 
<div class="header">
<div class="user-info"> 
<?php $number=$comments->mail;
if(preg_match('|^[1-9]\d{4,11}@qq\.com$|i',$number)){
echo '<img src="https://q2.qlogo.cn/headimg_dl? bs='.$number.'&dst_uin='.$number.'&dst_uin='.$number.'&;dst_uin='.$number.'&spec=100&url_enc=0&referer=bu_interface&term_type=PC">'; 
}else{
echo '<img src="https://gcore.jsdelivr.net/gh/cdn-x/placeholder@1.0.12/avatar/round/3442075.svg">';
}
?>
<span style="font-weight:bold">


<?php if ($comments->url): ?>
<a href="<?php echo $comments->url ?>" target="_blank" rel="external nofollow">
<?php echo $comments->author ?>
</a>
<?php else: ?>
<a href="<?php $comments->permalink();?>">
<?php $comments->author(); ?></a>
<?php endif; ?>
</span>

</div> 
<span>
<?php $comments->date('Y/n/j H:i:s'); ?>
&nbsp<b><?php $comments->reply('回复'); ?></b>
</span>
</div>
<span style="color:var(--text)" class="body">

<?php $parentMail = get_comment_at($comments->coid)?><?php echo $parentMail;?>

<?php $comments->content(); ?>
<?php if ('waiting' == $comments->status): ?>
<span style="color:#ff0000;font-weight:bold;float:right">💔评论审核中</span>
<?php endif;?>
</span>
</li>



<?php if ($comments->children) { ?>
      <?php $comments->threadedComments($options); ?>
    <?php } ?>
 
<?php } ?> 






<?php $this->comments()->to($comments); ?>

<article class="md-text content">

<div class="related-wrap md-text" id="comments">
 <section class="header cmt-title cap theme"> 
 <p>快来参与讨论吧~</p>
 </section></div>

<div id="<?php $this->respondId(); ?>">
<!-- 取消回复哈 -->
<span>
<?php $comments->cancelReply(); ?>
</span>

<form method="post" action="<?php $this->commentUrl() ?>" id="comment_form"> 
<!-- 如果当前用户已经登录 -->
<?php if($this->user->hasLogin()): ?>
<!-- 显示当前登录用户的用户名以及登出连接 -->
            <p>已登录<a href="<?php $this->options->adminUrl(); ?>"><?php $this->user->screenName(); ?></a>. 
            <a href="<?php $this->options->index('Logout.do'); ?>" title="Logout">退出登录 &raquo;</a></p>
 
<!-- 若当前用户未登录 -->
<?php else: ?>
            <!-- 要求输入名字、邮箱、网址 -->
	    <label style="color:var(--text)">昵称</label><input style="background:var(--block);color:var(--text)" type="text" name="author" class="text" size="35" value="<?php $this->remember('author'); ?>" placeholder="想一个名字吧！(必填)" />
	    <label style="color:var(--text)">邮箱📮（填写可收到回复通知）</label><input style="background:var(--block);color:var(--text)" type="text" name="mail" class="text" size="35" value="<?php $this->remember('mail'); ?>" placeholder="输入QQ邮箱可显示QQ头像-选填" />
	    <label style="color:var(--text);color:var(--text)">地址</label><input style="background:var(--block);color:var(--text)" type="text" name="url" class="text" size="35" value="<?php $this->remember('url'); ?>" placeholder="得带http://或https://等-选填" />
        <?php endif; ?>
 
        <!-- 输入要回复的内容 -->
	 <textarea style="background:var(--block);color:var(--text)" placeholder="注意文明发言哦！🍎 不能发html标签，会看不到🍎发的链接不能点击打开🍎如果是回复可见的内容，则必填【邮箱】不然是看不到的" rows="10" cols="50" name="text"><?php $this->remember('text'); ?></textarea>
	 <center><input type="submit" value="提交评论" class="submit" /></center>
    </form>



</div>


<?php if ($comments->have()) : ?>
        <!-- 评论头部提示信息 -->

        <center><h4 style="color:var(--text)"><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h4></center>
        <!-- 评论的内容 -->
<div class="tag-plugin timeline ds-fcircle">
<?php $comments->listComments(); ?>
</div>
      
 <!-- 评论page -->
        <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</article>      
    
  <?php endif; ?>

