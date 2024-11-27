<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; 

require_once 'toc_generator.php';

?>

<footer class="page-footer footnote">
<div class="sitemap">
<div class="sitemap-group">
<span class="fs15">博客</span>
<a href="/">近期</a>

<?php \Widget\Contents\Page\Rows::alloc()->to($pages); ?>
<?php while ($pages->next()): ?>
<?php if ($pages->fields->headerDisplay3 == 1): ?>
<a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php if ($pages->fields->zdhxswz()): ?><?php $pages->fields->zdhxswz() ?><?php endif; ?></a>
<?php endif; ?>
<?php endwhile; ?>
</div>

<div class="sitemap-group">
<span class="fs15">项目</span>
<?php $this->options->项目(); ?>
</div>

<div class="sitemap-group"><span class="fs15">首页友链</span>
<?php $this->options->首页友链(); ?>
</div>


<div class="sitemap-group">
<span class="fs15">其他</span>

</div>

</div>

<div class="text">
<center>
<?php $this->options->footer内容(); ?>
<br>
&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('由 <a href="https://typecho.org">Typecho</a> 强力驱动'); ?>.
</center>
</div>


</footer>




<div class="main-mask" onclick="sidebar.dismiss()"></div></div><aside class="l_right">
<div class="widgets">

<widget class="widget-wrapper toc" id="data-toc" collapse="false">
<div class="widget-header dis-select">
<span class="name">本文目录</span>
<a class="cap-action" onclick="sidebar.toggleTOC()" >
<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6h11m-11 6h11m-11 6h11M4 6h1v4m-1 0h2m0 8H4c0-1 2-2 2-3s-1-1.5-2-1"/></svg></a></div>

<div class="widget-body">


<?php if (isset($toc)) { echo $toc; }?>



</div>



<div class="widget-footer">

<a class="top" onclick="util.scrollTop()"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 12c0-4.714 0-7.071 1.464-8.536C4.93 2 7.286 2 12 2c4.714 0 7.071 0 8.535 1.464C22 4.93 22 7.286 22 12c0 4.714 0 7.071-1.465 8.535C19.072 22 16.714 22 12 22s-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12Z"/><path stroke-linecap="round" stroke-linejoin="round" d="m9 15.5l3-3l3 3m-6-4l3-3l3 3"/></g></svg><span>回到顶部</span></a>

<a class="top" onclick="javascript:window.history.back();"><span>返回上一页</span></a>


<?php if($this->user->hasLogin()):?>
<?php if ($this->is('post') or $this->is('page')): ?>
<a target="_blank" href="<?php if ($this->is('post')): ?><?php $this->options->adminUrl(); ?>write-post.php?cid=<?php echo $this->cid;?><?php elseif ($this->is('page')): ?><?php $this->options->adminUrl(); ?>write-page.php?cid=<?php echo $this->cid;?><?php endif;?>" style="font-weight:bold"><?php _e('编辑'); ?></a>
<?php endif; ?>
<?php endif;?>
</div></widget>


<?php if ($this->fields->rightnotice): ?>
<widget class="widget-wrapper markdown"><div class="widget-header dis-select"><span class="name">⏰️本文提示</span></div><div class="widget-body fs14">
<?php $this->fields->rightnotice(); ?>
</div></widget>
<?php endif; ?>


<?php if (is_array($this->options->sidebarBlock) && in_array('Showhuanying2', $this->options->sidebarBlock)): ?>

<widget class="widget-wrapper markdown"><div class="widget-header dis-select"><span class="name">🐾 欢迎光临</span></div><div class="widget-body fs14">
<?php $this->options->右侧欢迎语(); ?>
</div></widget>
<?php endif; ?>

<?php if (is_array($this->options->sidebarBlock) && in_array('Showrightbutton', $this->options->sidebarBlock)): ?>
<widget class="widget-wrapper linklist"><div class="widget-body fs14">
<div class="linklist center" style="grid-template-columns:repeat(2,1fr);">
<?php $this->options->右侧按钮(); ?>
</div></div></widget>
<?php endif; ?>







</div></aside>


<div class="float-panel blur">
  <button type="button" style="display:none" class="laptop-only rightbar-toggle mobile" onclick="sidebar.rightbar()">
<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6h11m-11 6h11m-11 6h11M4 6h1v4m-1 0h2m0 8H4c0-1 2-2 2-3s-1-1.5-2-1"></path></svg>
  </button>
  <button type="button" style="display:none" class="mobile-only leftbar-toggle mobile" onclick="sidebar.leftbar()">
<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 11c0-3.771 0-5.657 1.172-6.828C4.343 3 6.229 3 10 3h4c3.771 0 5.657 0 6.828 1.172C22 5.343 22 7.229 22 11v2c0 3.771 0 5.657-1.172 6.828C19.657 21 17.771 21 14 21h-4c-3.771 0-5.657 0-6.828-1.172C2 18.657 2 16.771 2 13z"></path><path id="sep" stroke-linecap="round" d="M5.5 10h6m-5 4h4m4.5 7V3"></path></g></svg>
  </button>
</div>
</div>


<!-- end .row -->
    </div>
</div><!-- end #body -->

<div class="scripts">
​
      
<script>
<?php if ($this->options->footjs()): ?>
<?php $this->options->footjs(); ?>
<?php endif; ?>
</script>


<script src="<?php $this->options->themeUrl(); ?>js/codecopy.js"></script>



<script type="text/javascript">
  const ctx = {
    date_suffix: {
      just: `刚刚`,
      min: `分钟前`,
      hour: `小时前`,
      day: `天前`,
    },
    root : `/`,
  };

  // required plugins (only load if needs)
  if (`local_search`) {
    ctx.search = {};
    ctx.search.service = `local_search`;
    if (ctx.search.service == 'local_search') {
      let service_obj = Object.assign({}, `{"field":"all","path":"/search.json","content":true,"sort":"-date"}`);
      ctx.search[ctx.search.service] = service_obj;
    }
  }
  const def = {
    avatar: `https://gcore.jsdelivr.net/gh/cdn-x/placeholder@1.0.12/avatar/round/3442075.svg`,
    cover: `https://gcore.jsdelivr.net/gh/cdn-x/placeholder@1.0.12/cover/76b86c0226ffd.svg`,
  };
  const deps = {
    jquery: `https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js`,
    marked: `https://cdn.jsdelivr.net/npm/marked@13.0.1/lib/marked.umd.min.js`
  }
  

</script>

<script>
  const sidebar = {
    leftbar: () => {
      if (l_body) {
        l_body.toggleAttribute('leftbar');
        l_body.removeAttribute('rightbar');
      }
    },
    rightbar: () => {
      if (l_body) {
        l_body.toggleAttribute('rightbar');
        l_body.removeAttribute('leftbar');
      }
    },
    dismiss: () => {
      if (l_body) {
        l_body.removeAttribute('leftbar');
        l_body.removeAttribute('rightbar');
      }
    },
    toggleTOC: () => {
      document.querySelector('#data-toc').classList.toggle('collapse');
    }
  }
</script>

<script src="<?php $this->options->themeUrl('js/main.js'); ?>" defer=""></script>





<script type="text/javascript">
  const applyTheme = (theme) => {
    if (theme === 'auto') {
      document.documentElement.removeAttribute('data-theme')
    } else {
      document.documentElement.setAttribute('data-theme', theme)
    }

    applyThemeToGiscus(theme)
  }

  const applyThemeToGiscus = (theme) => {
    theme = theme === 'auto' ? 'preferred_color_scheme' : theme

    const cmt = document.getElementById('giscus')
    if (cmt) {
      // This works before giscus load.
      cmt.setAttribute('data-theme', theme)
    }

    const iframe = document.querySelector('#comments > section.giscus > iframe')
    if (iframe) {
      // This works after giscus loaded.
      const src = iframe.src
      const newSrc = src.replace(/theme=[\w]+/, `theme=${theme}`)
      iframe.src = newSrc
    }
  }

  const switchTheme = () => {
    // light -> dark -> auto -> light -> ...
    const currentTheme = document.documentElement.getAttribute('data-theme')
    let newTheme;
    switch (currentTheme) {
      case 'light':
        newTheme = 'dark'
        break
      case 'dark':
        newTheme = 'auto'
        break
      default:
        newTheme = 'light'
    }
    applyTheme(newTheme)
    window.localStorage.setItem('Stellar.theme', newTheme)

    const messages = {
      light: `切换到浅色模式`,
      dark: `切换到深色模式`,
      auto: `切换到跟随系统配色`,
    }
    hud?.toast?.(messages[newTheme])
  }

  (() => {
    // Apply user's preferred theme, if any.
    const theme = window.localStorage.getItem('Stellar.theme')
    if (theme !== null) {
      applyTheme(theme)
    }
  })()
</script>

<script>
  // https://www.npmjs.com/package/vanilla-lazyload
  // Set the options globally
  // to make LazyLoad self-initialize
  window.lazyLoadOptions = {
    elements_selector: ".lazy",
  };
  // Listen to the initialization event
  // and get the instance of LazyLoad
  window.addEventListener(
    "LazyLoad::Initialized",
    function (event) {
      window.lazyLoadInstance = event.detail.instance;
    },
    false
  );
  document.addEventListener('DOMContentLoaded', function () {
    window.lazyLoadInstance?.update();
  });
</script>


<script defer>
window.addEventListener('DOMContentLoaded', (event) => {
ctx.services = Object.assign({}, JSON.parse(`{"mdrender":{"js":"https://www.kuhehe.top/js/services/mdrender.js"},"siteinfo":{"js":"/js/services/siteinfo.js","api":"https://site.kuhehe.top/api/v1?url={href}"},"ghinfo":{"js":"/js/services/ghinfo.js"},"sites":{"js":"/js/services/sites.js"},"friends":{"js":"/js/services/friends.js"},"timeline":{"js":"https://www.kuhehe.top/js/services/timeline.js"},"fcircle":{"js":"https://www.kuhehe.top/js/services/fcircle.js"},"weibo":{"js":"/js/services/weibo.js"},"memos":{"js":"https://www.kuhehe.top/js/services/memos.js"}}`));
for (let id of Object.keys(ctx.services)) {
const js = ctx.services[id].js;
if (id == 'siteinfo') {
ctx.cardlinks = document.querySelectorAll('a.link-card[cardlink]');
if (ctx.cardlinks?.length > 0) {
utils.js(js, { defer: true }).then(function () {
setCardLink(ctx.cardlinks);
});
}
} else {
const els = document.getElementsByClassName(`ds-${id}`);
if (els?.length > 0) {
utils.jq(() => {
if (id == 'timeline' || 'memos' || 'marked') {
utils.js(deps.marked).then(function () {
utils.js(js, { defer: true });
});
} else {
utils.js(js, { defer: true });
}
});
}
}
}
});
</script>

<script>
window.addEventListener('DOMContentLoaded', (event) => {
ctx.search = {
path: `/search.json`,
}
utils.js('https://www.kuhehe.top//js/search/local-search.js', { defer: true });
});
</script><script>
window.FPConfig = {
delay: 0,
ignoreKeywords: [],
maxRPS: 5,
hoverDelay: 25
};
</script>
<script defer src="https://cdn.bootcdn.net/ajax/libs/flying-pages/2.1.2/flying-pages.min.js"></script><script defer src="https://cdn.bootcdn.net/ajax/libs/vanilla-lazyload/17.8.4/lazyload.min.js"></script>
<script>
// https://www.npmjs.com/package/vanilla-lazyload
// Set the options globally
// to make LazyLoad self-initialize
window.lazyLoadOptions = {
elements_selector: ".lazy",
};
// Listen to the initialization event
// and get the instance of LazyLoad
window.addEventListener(
"LazyLoad::Initialized",
function (event) {
window.lazyLoadInstance = event.detail.instance;
},
false
);
document.addEventListener('DOMContentLoaded', function () {
window.lazyLoadInstance?.update();
});
</script><script>
ctx.fancybox = {
selector: `.timenode p>img`,
css: `https://cdn.bootcdn.net/ajax/libs/fancyapps-ui/5.0.22/fancybox/fancybox.min.css`,
js: `https://cdn.bootcdn.net/ajax/libs/fancyapps-ui/5.0.22/fancybox/fancybox.umd.min.js`
};
var selector = '[data-fancybox]:not(.error)';
if (ctx.fancybox.selector) {
selector += `, ${ctx.fancybox.selector}`
}
var needFancybox = document.querySelectorAll(selector).length !== 0;
if (!needFancybox) {
const els = document.getElementsByClassName('ds-memos');
if (els != undefined && els.length > 0) {
needFancybox = true;
}
}
if (needFancybox) {
utils.css(ctx.fancybox.css);
utils.js(ctx.fancybox.js, { defer: true }).then(function () {
Fancybox.bind(selector, {
hideScrollbar: false,
Thumbs: {
autoStart: false,
},
caption: (fancybox, slide) => {
return slide.triggerEl.alt || slide.triggerEl.dataset.caption || null
}
});
})
}
</script>
<script>
window.addEventListener('DOMContentLoaded', (event) => {
const swiper_api = document.getElementById('swiper-api');
if (swiper_api != undefined) {
utils.css(`https://unpkg.com/swiper@10.3.1/swiper-bundle.min.css`);
utils.js(`https://unpkg.com/swiper@10.3.1/swiper-bundle.min.js`, { defer: true }).then(function () {
const effect = swiper_api.getAttribute('effect') || '';
var swiper = new Swiper('.swiper#swiper-api', {
slidesPerView: 'auto',
spaceBetween: 8,
centeredSlides: true,
effect: effect,
rewind: true,
pagination: {
el: '.swiper-pagination',
clickable: true,
},
navigation: {
nextEl: '.swiper-button-next',
prevEl: '.swiper-button-prev',
},
});
})
}
});
</script>
<link rel="stylesheet" href="https://gcore.jsdelivr.net/npm/katex@0.16.4/dist/katex.min.css" integrity="sha384-vKruj+a13U8yHIkAyGgK1J3ArTLzrFGBbBc0tDp4ad/EyewESeXE/Iv67Aj8gKZ0" crossorigin="anonymous">
<script defer src="https://gcore.jsdelivr.net/npm/katex@0.16.4/dist/katex.min.js" integrity="sha384-PwRUT/YqbnEjkZO0zZxNqcxACrXe+j766U2amXcgMg5457rve2Y7I6ZJSm2A0mS4" crossorigin="anonymous"></script>
<script defer src="https://gcore.jsdelivr.net/npm/katex@0.16.4/dist/contrib/auto-render.min.js" integrity="sha384-+VBxd3r6XgURycqtZ117nYw44OOcIax56Z4dCRWbxyPt0Koah1uHoK0o4+/RRE05" crossorigin="anonymous"onload="renderMathInElement(document.body);"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
window.codeElements = document.querySelectorAll('.code');
if (window.codeElements.length > 0) {
ctx.copycode = {
default_text: `Copy`,
success_text: `Copied`,
toast: `复制成功`,
};
utils.js('/js/plugins/copycode.js');
}
});
</script>


<script>
document.addEventListener("DOMContentLoaded", function() {
    var links = document.querySelectorAll('.tp-ad-text1 a');
    for (var i = 0; i < links.length; i++) {
        links[i].style.textDecoration = 'none';
    }
});
</script>


</body>
</html>
