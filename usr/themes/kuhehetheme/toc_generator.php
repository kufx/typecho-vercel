<?php
function generate_toc($content) {
    // 匹配标准 HTML 标题标签，忽略 <strong> 标签
    preg_match_all('/<h([1-6])>(<strong>)?(.*?)(<\/strong>)?<\/h[1-6]>/i', $content, $matches, PREG_SET_ORDER);

    $toc = '<ol class="toc">';
    $levelStack = [];
    $currentLevel = 0;

    foreach ($matches as $match) {
        $headingLevel = intval($match[1]);
        $headingText = htmlspecialchars($match[3]);
        $id = md5($headingText);

        while ($headingLevel <= $currentLevel) {
            array_pop($levelStack);
            $toc.= '</ol>';
            $currentLevel--;
        }

        if ($headingLevel > $currentLevel) {
            if ($currentLevel === 0) {
                $toc.= '<li class="toc-item toc-level-'. $headingLevel. '">';
                $toc.= '<a class="toc-link" href="#'. $id. '" onclick="handleClick(this)">';
                $toc.= '<span class="toc-text">'. $headingText. '</span>';
                $toc.= '</a>';
                $toc.= '<ol class="toc-child">';
                $levelStack[] = $headingLevel;
                $currentLevel = $headingLevel;
            } else {
                $toc.= '<li class="toc-item toc-level-'. $headingLevel. '">';
                $toc.= '<a class="toc-link" href="#'. $id. '" onclick="handleClick(this)">';
                $toc.= '<span class="toc-text">'. $headingText. '</span>';
                $toc.= '</a>';
                $toc.= '<ol class="toc-child">';
                $levelStack[] = $headingLevel;
                $currentLevel = $headingLevel;
            }
        } else {
            $toc.= '</ol>';
            array_pop($levelStack);
            $currentLevel--;

            $toc.= '<li class="toc-item toc-level-'. $headingLevel. '">';
            $toc.= '<a class="toc-link" href="#'. $id. '" onclick="handleClick(this)">';
            $toc.= '<span class="toc-text">'. $headingText. '</span>';
            $toc.= '</a>';
            $toc.= '<ol class="toc-child">';
            $levelStack[] = $headingLevel;
            $currentLevel = $headingLevel;
        }
    }

    while (!empty($levelStack)) {
        $toc.= '</ol>';
        array_pop($levelStack);
    }

    $toc.= '</ol>';

    // 添加 JavaScript 函数来处理点击事件
    $toc.= '<script>
        function handleClick(link) {
            var links = document.getElementsByClassName("toc-link");
            for (var i = 0; i < links.length; i++) {
                links[i].classList.remove("active");
            }
            link.classList.add("active");
        }
    </script>';

    return $toc;
}

// 检测全局变量中是否有文章内容，并生成目录
if (isset($GLOBALS['articleContent'])) {
    $toc = generate_toc($GLOBALS['articleContent']);
}
?>