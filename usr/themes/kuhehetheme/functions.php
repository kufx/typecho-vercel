<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

















function themeConfig($form)
{

$str1 = explode('/themes/', Helper::options()->themeUrl);
$str2 = explode('/', $str1[1]);
$name=$str2[0];
$db = Typecho_Db::get();
$sjdq=$db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:'.$name));
$ysj = $sjdq['value'];
if(isset($_POST['type']))
{ 
if($_POST["type"]=="备份模板设置数据"){
if($db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:'.$name.'bf'))){
$update = $db->update('table.options')->rows(array('value'=>$ysj))->where('name = ?', 'theme:'.$name.'bf');
$updateRows= $db->query($update);
echo '<div class="tongzhi col-mb-12 home">备份已更新，请等待自动刷新！如果等不到请点击';
?>    
<a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a></div>
<script language="JavaScript">window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2500);</script>
<?php
}else{
if($ysj){
     $insert = $db->insert('table.options')
    ->rows(array('name' => 'theme:'.$name.'bf','user' => '0','value' => $ysj));
     $insertId = $db->query($insert);
echo '<div class="tongzhi col-mb-12 home">备份完成，请等待自动刷新！如果等不到请点击';
?>    
<a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a></div>
<script language="JavaScript">window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2500);</script>
<?php
}
}
        }
if($_POST["type"]=="还原模板设置数据"){
if($db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:'.$name.'bf'))){
$sjdub=$db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:'.$name.'bf'));
$bsj = $sjdub['value'];
$update = $db->update('table.options')->rows(array('value'=>$bsj))->where('name = ?', 'theme:'.$name);
$updateRows= $db->query($update);
echo '<div class="tongzhi col-mb-12 home">检测到模板备份数据，恢复完成，请等待自动刷新！如果等不到请点击';
?>    
<a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a></div>
<script language="JavaScript">window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2000);</script>
<?php
}else{
echo '<div class="tongzhi col-mb-12 home">没有模板备份数据，恢复不了哦！</div>';
}
}
if($_POST["type"]=="删除备份数据"){
if($db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:'.$name.'bf'))){
$delete = $db->delete('table.options')->where ('name = ?', 'theme:'.$name.'bf');
$deletedRows = $db->query($delete);
echo '<div class="tongzhi col-mb-12 home">删除成功，请等待自动刷新，如果等不到请点击';
?>    
<a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a></div>
<script language="JavaScript">window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2500);</script>
<?php
}else{
echo '<div class="tongzhi col-mb-12 home">不用删了！备份不存在！！！</div>';
}
}
    }
echo '<form class="protected home col-mb-12" action="?'.$name.'bf" method="post">
<input type="submit" name="type" class="btn btn-s" value="备份模板设置数据" />  <input type="submit" name="type" class="btn btn-s" value="还原模板设置数据" />  <input type="submit" name="type" class="btn btn-s" value="删除备份数据" /></form>';








    $logoUrl = new \Typecho\Widget\Helper\Form\Element\Text(
        'logoUrl',
        null,
        null,
        _t('侧边栏头像'),
        _t('会显示在左侧边栏的头像')
    );
    $form->addInput($logoUrl);


$logo = new Typecho_Widget_Helper_Form_Element_Text('logo', null, null, _t('首页头像'), _t('显示在文章主页的头像'));
    $form->addInput($logo);

$name = new Typecho_Widget_Helper_Form_Element_Text('name', null, null, _t('主页昵称'), _t('显示在文章主页头像右边的文字，跟左侧边显示文字不同'));
    $form->addInput($name);


$logotxt1 = new \Typecho\Widget\Helper\Form\Element\Text(
        'logotxt1',
        null,
        null,
        _t('副标题1'),
        _t('在这里填入标题下方文字')
    );

    $form->addInput($logotxt1);

$logotxt2 = new \Typecho\Widget\Helper\Form\Element\Text(
        'logotxt2',
        null,
        null,
        _t('副标题2'),
        _t('鼠标移到网站标题，这里副标题会变成这个')
    );

    $form->addInput($logotxt2);


$description = new Typecho_Widget_Helper_Form_Element_Text('description', null, null, _t('网站描述'), _t('网站的描述信息'));
    $form->addInput($description);

    $sidebarBlock = new \Typecho\Widget\Helper\Form\Element\Checkbox(
        'sidebarBlock',
        [
            'ShowRecentPosts'    => _t('左侧栏显示最近更新'),
            'Showxdhbt' => _t('显示左侧欢迎下方按钮'),
            'ShowCategory'       => _t('显示分类'),
'Showhuanying1'       => _t('显示左欢迎语'),
'Showhuanying2'       => _t('显示右欢迎语'),
'Showhuanying3'       => _t('显示文章顶部广告'),
'Showrightbutton'       => _t('显示右侧按钮'),
            'ShowArchive'        => _t('显示归档，没用'),
            'ShowOther'          => _t('显示其它杂项，没用')
        ],
        ['ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'],
        _t('侧边栏显示')
    );

    $form->addInput($sidebarBlock->multiMode());







$搜索框提示 = new \Typecho\Widget\Helper\Form\Element\Text(
        '搜索框提示',
        null,
        null,
        _t('搜索框提示文字'),
        _t('在这里填入标题下方的下方文字')
    );
    $form->addInput($搜索框提示);


$侧边栏欢迎语 = new Typecho_Widget_Helper_Form_Element_Textarea('侧边栏欢迎语', null, null, _t('侧边栏欢迎'), _t('如果你不知道这个是啥，留着就好'));
    $form->addInput($侧边栏欢迎语);



$小导航列数 = new Typecho_Widget_Helper_Form_Element_Text('小导航列数', null, 3, _t('左侧小导航列数'), _t('一行显示几个，写1或2或3'));
    $form->addInput($小导航列数);


$小导航内容 = new Typecho_Widget_Helper_Form_Element_Textarea('小导航内容', null, 3, _t('左侧小导航内容'), _t('小导航内容可以填在这里，比如'));
    $form->addInput($小导航内容);


$xdhbt = new Typecho_Widget_Helper_Form_Element_Textarea('xdhbt', null, 3, _t('左侧小导航内容下按钮'), _t('小导航内容下按钮可以填在这里，比如'));
    $form->addInput($xdhbt);

$右侧欢迎语 = new Typecho_Widget_Helper_Form_Element_Textarea('右侧欢迎语', null, null, _t('右侧欢迎语'), _t('如果你不知道这个是啥，留着就好'));
    $form->addInput($右侧欢迎语);


$right = new Typecho_Widget_Helper_Form_Element_Select('right', array(
        'show' => '显示',
        'hide' => '不显示'
    ), 'show', _t('是否显示右边按钮'), _t('开启后会在右侧边栏显示下方填写的按钮'));
    $form->addItem($right);


$右侧按钮 = new Typecho_Widget_Helper_Form_Element_Textarea('右侧按钮', null, null, _t('右侧按钮'), _t('这里是显示在右侧边栏的🍎按钮'));
    $form->addInput($右侧按钮);


$项目 = new \Typecho\Widget\Helper\Form\Element\Textarea(
        '项目',
        null,
        null,
        _t('底部项目列表'),
        _t('这里填写项目代码')
    );
    $form->addInput($项目);

$首页友链 = new \Typecho\Widget\Helper\Form\Element\Textarea(
        '首页友链',
        null,
        null,
        _t('首页底部友链'),
        _t('在这里填写链接')
    );
    $form->addInput($首页友链);


$footer内容 = new Typecho_Widget_Helper_Form_Element_Textarea('footer内容', null, null, _t('底部内容'), _t('网站底部显示的文字内容，填写html标签'));
    $form->addInput($footer内容);




$recentn = new Typecho_Widget_Helper_Form_Element_Text('recentn', null, 5, _t('待定'), _t('待定'));
    $form->addInput($recentn);


$articleCopyright = new Typecho_Widget_Helper_Form_Element_Select('articleCopyright', array(
        'show' => '显示',
        'hide' => '不显示'
    ), 'show', _t('显示原创声明'), _t('开启后会在本篇文章底部显示版权声明。'));
    $form->addItem($articleCopyright);

$文章广告 = new Typecho_Widget_Helper_Form_Element_Textarea('文章广告', null, null, _t('文章广告内容'), _t('这里写的文章广告，会显示在每篇文章顶部'));
    $form->addInput($文章广告);



$footjs = new Typecho_Widget_Helper_Form_Element_Textarea('footjs', null, null, _t('自定义底部js内容'), _t('这里请直接填写js内容，不需要包裹'));
    $form->addInput($footjs);


$headcs = new Typecho_Widget_Helper_Form_Element_Textarea('headcs', null, null, _t('自定义头部css内容'), _t('这里请直接填写css内容，不需要包裹'));
    $form->addInput($headcs);




}






function themeFields($layout)
{


        
        
   



$headerDisplay = new Typecho_Widget_Helper_Form_Element_Radio('headerDisplay', array(
        '1' => _t('显示'),
        '0' => _t('不显示')
    ), '0', _t('🍁是否显示在头部导航栏'), _t('默认不显示'));
    $layout->addItem($headerDisplay);


$headerDisplay2 = new Typecho_Widget_Helper_Form_Element_Radio('headerDisplay2', array(
        '1' => _t('显示'),
        '0' => _t('不显示')
    ), '0', _t('🍁是否显示在左侧导航栏'), _t('默认不显示'));
    $layout->addItem($headerDisplay2);


$headerDisplay3 = new Typecho_Widget_Helper_Form_Element_Radio('headerDisplay3', array(
        '1' => _t('显示'),
        '0' => _t('不显示')
    ), '0', _t('🍁是否显示在底部'), _t('默认不显示'));
    $layout->addItem($headerDisplay3);



$zdhxswz = new Typecho_Widget_Helper_Form_Element_Text('zdhxswz', null, null, _t('🍁页面左侧及顶部导航栏显示文字'), _t('页面显示在左侧导航栏时，显示的文字，防止页面标题字数太多而不好看，若想显示出某页面，此项必填'));
    $layout->addItem($zdhxswz);


$subtitle = new Typecho_Widget_Helper_Form_Element_Textarea('subtitle', null, null, _t('🍁✍️页面副标题'), _t('独立页面or文章副标题（一般用不到）'));
    $layout->addItem($subtitle);



$showsay = new Typecho_Widget_Helper_Form_Element_Radio('showsay', array(
        '1' => _t('显示'),
        '0' => _t('不显示')
    ), '0', _t('✍️文章内容是否在说说页面输出'), _t('默认不显示'));
    $layout->addItem($showsay);





$showzy = new Typecho_Widget_Helper_Form_Element_Radio('showzy', array(
        '1' => _t('显示'),
        '0' => _t('不显示')
    ), '1', _t('✍️文章是否显示在主页'), _t('如果只想要文章作为说说，而不想它显示在首页，可以选择不显示'));
    $layout->addItem($showzy);


$banner = new Typecho_Widget_Helper_Form_Element_Select('banner', array(
        'show' => '显示',
        'hide' => '不显示'
    ), 'show', _t('🍁✍️显示文章or页面banner头图'), _t('开启后显示文章顶部图片，若开启，请填写下方头图链接'));
    $layout->addItem($banner);

    $image = new Typecho_Widget_Helper_Form_Element_Text('image', null, null, ('🍁✍️文章头图'), _t('文章头图会显示在文章的顶部，若选择显示头图，请填写'));
    $layout->addItem($image);  //  注册

$mode = new Typecho_Widget_Helper_Form_Element_Select(
        'mode',
        array(
            '无图' => '无图模式',
            '大图' => '大图模式',
            '半图' => '半图模式'
        ),
        '无图',
        '✍️文章显示方式',
        '介绍：用于设置当前文章在首页和搜索页的显示方式'
    );
    $layout->addItem($mode);


$imghight = new Typecho_Widget_Helper_Form_Element_Text('imghight', null, null, _t('✍️封面大图高度'), _t('手机端文章封面图高度🍎单位px，不填则为默认高度'));
    $layout->addItem($imghight);


$datu = new Typecho_Widget_Helper_Form_Element_Text('datu', null, null, _t('✍️文章封面大图链接'), _t('文章封面图半图和大图模式均使用此作为封面'));
    $layout->addItem($datu);  


$datutmetashow = new Typecho_Widget_Helper_Form_Element_Radio('datutmetashow', array(
        '1' => _t('显示'),
        '0' => _t('不显示')
    ), '1', _t('✍️大图模式，是否显示文字'), _t('默认显示，如果选择不显示，你将不会看到封面上的任何文字'));
    $layout->addItem($datutmetashow);


$datutitleshow = new Typecho_Widget_Helper_Form_Element_Radio('datutitleshow', array(
        '1' => _t('显示'),
        '0' => _t('不显示')
    ), '1', _t('✍️大图模式，是否显示大标题'), _t('默认显示'));
    $layout->addItem($datutitleshow);


$datutitle = new Typecho_Widget_Helper_Form_Element_Text('datutitle', null, null, _t('✍️大图显示大标题'), _t('文章封面图大标题🍎大图模式可用'));
    $layout->addItem($datutitle); 


$datuposition = new Typecho_Widget_Helper_Form_Element_Radio('datuposition', array(
        '1' => _t('顶部'),
        '0' => _t('底部')
    ), '0', _t('✍️大图模式，文字上下位置'), _t('默认底部'));
    $layout->addItem($datuposition);



$datu1 = new Typecho_Widget_Helper_Form_Element_Text('datu1', null, null, _t('✍️大图上文字'), _t('文章封面图上文字🍎大图模式可用'));
    $layout->addItem($datu1); 

$datu2 = new Typecho_Widget_Helper_Form_Element_Text('datu2', null, null, _t('✍️大图下文字'), _t('文章封面图🍎大图模式可用'));
    $layout->addItem($datu2);


$tagcolor = new Typecho_Widget_Helper_Form_Element_Text('tagcolor', null, null, _t('✍️文章底部标签颜色'), _t('请写：green、red等等类似颜色，不填则为默认无色'));
    $layout->addItem($tagcolor);


$rightnotice = new Typecho_Widget_Helper_Form_Element_Textarea('rightnotice', null, null, _t('✍️文章右侧栏提示文字'), _t('这里请填写html标签，markdown不可用，所以想换行请用换行的br标签'));
    $layout->addItem($rightnotice);


$mdbimg = new Typecho_Widget_Helper_Form_Element_Text('mdbimg', null, null, _t('🍎🍁针对没顶部页面的顶部图片'), _t('仅针对应用没顶部页面模板，普通文章不要动这里'));
    $layout->addItem($mdbimg);


$mdbtitle = new Typecho_Widget_Helper_Form_Element_Text('mdbtitle', null, null, _t('🍎🍁没顶部页面的显示标题'), _t('🍎仅针对应用没顶部页面模板，普通文章不要动这里'));
    $layout->addItem($mdbtitle);


$mdbbt = new Typecho_Widget_Helper_Form_Element_Textarea('mdbbt', null, null, _t('🍎🍁针对没顶部页面跳转按钮'), _t('仅针对没顶部页面🍎这里是显示右上角跳转按钮'));
    $layout->addItem($mdbbt);


$jiami = new Typecho_Widget_Helper_Form_Element_Textarea('jiami', null, null, _t('✍加密文章提示文字'), _t('可随意写，文章设置密码时填写'));
    $layout->addItem($jiami);

$jiamimg = new Typecho_Widget_Helper_Form_Element_Textarea('jiamimg', null, null, _t('✍加密文章提示右侧图片·方形'), _t('需要设置二维码时填写，否则不显示图片'));
    $layout->addItem($jiamimg);
  
}




function Postviews($archive) {
    $db = Typecho_Db::get();
    $cid = $archive->cid;
    if (!array_key_exists('views', $db->fetchRow($db->select()->from('table.contents')))) {
        $db->query('ALTER TABLE `'.$db->getPrefix().'contents` ADD `views` INT(10) DEFAULT 0;');
    }
    $exist = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid))['views'];
    if ($archive->is('single')) {
        $cookie = Typecho_Cookie::get('contents_views');
        $cookie = $cookie ? explode(',', $cookie) : array();
        if (!in_array($cid, $cookie)) {
            $db->query($db->update('table.contents')
                ->rows(array('views' => (int)$exist+1))
                ->where('cid = ?', $cid));
            $exist = (int)$exist+1;
            array_push($cookie, $cid);
            $cookie = implode(',', $cookie);
            Typecho_Cookie::set('contents_views', $cookie);
        }
    }
    echo $exist == 0 ? '   暂无阅读' :'   阅读：' .$exist;
}




    function get_comment_at($coid){
    $db   = Typecho_Db::get();
    $prow = $db->fetchRow($db->select('parent,status')->from('table.comments')
        ->where('coid = ?', $coid));//当前评论
    $mail = "";
    $parent = @$prow['parent'];
    if ($parent != "0") {//子评论
        $arow = $db->fetchRow($db->select('author,status,mail')->from('table.comments')
            ->where('coid = ?', $parent));//查询该条评论的父评论的信息
        @$author = @$arow['author'];//作者名称
        $mail = @$arow['mail'];
        if(@$author && $arow['status'] == "approved"){//父评论作者存在且父评论已经审核通过
            if (@$prow['status'] == "waiting"){
                echo '<p class="commentReview">（评论正在审核中）</p>';
            }
            echo '<a href="#comment-' . $parent . '">@' . $author . '</a>';
        }else{//父评论作者不存在或者父评论没有审核通过
            if (@$prow['status'] == "waiting"){
                echo '<p class="commentReview">（评论正在审核中）</p>';
            }else{
                echo '';
            }
        }

    } else {//母评论，无需输出锚点链接
        if (@$prow['status'] == "waiting"){
            echo '<p class="commentReview">（评论正在审核中）</p>';
        }else{
            echo '';
        }
    }
    }







function getContentTest($content) {
    $pattern = '/\[mark color:(.*?)\](.*?)\[\/mark\]/';
    $replacement = '<mark class="tag-plugin colorful mark" color="$1">$2</mark>';
    $content = preg_replace($pattern, $replacement, $content);


   $pattern = '/\[hashtag color:(.*?)\](.*?)\[\/hashtag\]/';
    $replacement = '<a class="tag-plugin colorful hashtag" color="$1">$2</a>';
    $content = preg_replace($pattern, $replacement, $content);


$pattern = '/\[radio\](.*?)\[\/radio\]/';
    $replacement = '<div class="tag-plugin colorful checkbox"> <input type="radio"></input><span>$1</span> </div>';
    $content = preg_replace($pattern, $replacement, $content);


$pattern = '/\[radio check\](.*?)\[\/radio\]/';
    $replacement = '<div class="tag-plugin colorful checkbox"> <input type="radio" checked=""></input><span>$1</span> </div>';
    $content = preg_replace($pattern, $replacement, $content);


$pattern = '/\[radio (.*?) check\](.*?)\[\/radio\]/';
    $replacement = '<div class="tag-plugin colorful checkbox" color="red" symbol="$1"> <input type="checkbox" checked=""></input><span>$2</span> </div>';
    $content = preg_replace($pattern, $replacement, $content);



    return $content;
    
}











