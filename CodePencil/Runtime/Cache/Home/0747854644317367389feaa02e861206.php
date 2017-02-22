<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
    <title>SIPC Codepencil</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="icon" href="/codepencil/Public/images/logo-16.png" sizes="16x16">
    <link rel="stylesheet" href="/codepencil/Public/css/reset.css">
    <link rel="stylesheet" href="/codepencil/Public/css/base.css">
    <link rel="stylesheet" href="/codepencil/Public/css/index.css">
</head>
<body>
    <header class="main-header index-header">
        <div class="title-area">
            <h1 class="long-logo">
                <a href="/codepencil/index.php/Index/index" class="logo">
                    <img src="/codepencil/Public/images/logo.png" alt="">
                </a>
                <span>SIPC CODE PENCIL</span>
            </h1>
            <nav class="header-nav">
                <ul class="normal-nav">
                    <li class="activeBlue">
                        <a href="/codepencil/index.php/Code/readcode/readc/3">代码</a>
                    </li>
                    <li class="activeGreen">
                        <a href="">分享</a>
                    </li>
                    <li class="activeOrange">
                        <a href="">笔记</a>                
                    </li>
                </ul>
                <ul class="mobile-nav">
                   <li class="activeBlue">
                       Menu
                   </li>
                </ul>
            </nav>
        </div>
        <div class="header-chunk">
            <button class="btn buttonA" id="code-setting">
                <!-- <a href="/codepencil/index.php/Code/index/cid/0"> -->
                <?php if(!empty($_SESSION['uid'])){echo "<a href='/codepencil/index.php/Code/index/cid/0'>"; }else{ echo "<a href='/codepencil/index.php/Log/login'>"; } ?>
                <i class="icon icon-pencil icon-link"></i>New Pen</a>
            </button>
            <button class="btn buttonA">
                    <?php if($_SESSION['username']){echo "<a href='/codepencil/index.php/Code/readcode/readc/2'>".$_SESSION['username'];}else{ echo "<a href='/codepencil/index.php/Log/login'>"."登录";} ?>
                    </a>
            </button>
            <button class="btn buttonA">
                <?php if($_SESSION['username']){echo "<a href='/codepencil/index.php/Log/logout'>"."注销";}else{echo "注册";} ?></a>
            </button>
        </div>
    </header>
    <!-- 搜索框 -->
    <section class="home-section home-screen">
        <div class="introduce">
            <div class="center-logo">
                <img src="/codepencil/Public/images/logo.png" alt="">
            </div>
            <h1>CodePencil is a playground for the front end web</h1>
            <p>
                在这里展示上传你最新创造的代码，建立一个测试用例来寻找bug，或者发现一些案例来是你获得设计模式和灵感，我们共同分享这些有趣的idea/design.
            </p>
            <div class="buttongroup">
                <button class="btn"><a href="https://github.com/SIPC115">发现更多</a></button>
                <button class="btn"><a href="http://59.67.152.15:10080">关注我们</a></button>
            </div>
        </div>
        <iframe src="/codepencil/Public/bgviews/monster/index.html" frameborder="0" scrolling="no" id="bgFrame" style="display:none;"></iframe>
        <div class="bg-modal"></div>
    </section>
    <div class="width-wrapper">
        <section class="home-section">
            <div class="title-header">
                <h1>优秀代码推荐</h1>
                <a href="/codepencil/index.php/Code/readcode/readc/3" class="more-link">查看更多<i class="icon icon-folder"></i></a>
            </div>
            <div class="pen-gird">
                <!-- 作品展示 -->
                <?php if(is_array($gcode)): $i = 0; $__LIST__ = $gcode;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="single-pen">
                        <div class="pen-img">
                            <img src="<?php echo ($vo["imgurl"]); ?>" alt="">
                            <a href="/codepencil/index.php/Code/index/cid/<?php echo ($vo["cid"]); ?>" class="cover-link"><?php echo ($vo["codemessage"]); ?></a>
                        </div>
                        <div class="meta">
                            <h3 class="pen-title"><?php echo ($vo["codename"]); ?></h3>
                            <div class="user">
                                <a class="username"><?php echo ($vo["username"]); ?></a>
                            </div>
                            <div class="stats">
                                <a class="single-stat">
                                    <span class="num">0</span>
                                    <i class="icon icon-eye"></i>
                                </a>
                                <a class="single-stat">
                                    <span class="num">0</span>
                                    <i class="icon icon-chat"></i>
                                </a>
                                <a class="single-stat">
                                    <span class="num">0</span>
                                    <i class="icon icon-heart"></i>
                                </a>
                            </div>
                        </div>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                <!-- 分页菜单 -->
                <nav class="bottom-pagination" style="display: none;">
                    <button class="btn">&lt;&nbsp;&nbsp;Prev</button>
                    <button class="btn">Next&nbsp;&nbsp;&gt;</button>
                </nav>
                <!-- ** -->

            </div>
        <!-- *********************************代码分段******************************* -->
            <div class="title-header" style="border-bottom-color: rgb(71, 207, 115);">
                <h1>分享</h1>
                <a href="http://sipc115.github.io/sharing/" class="more-link">查看更多<i class="icon icon-folder"></i></a>
            </div>
            <div class="pen-gird">
                <div class="single-pen">
                    <div class="pen-img">
                        <img src="/codepencil/Public/images/example/course1.png" alt="">
                        <a href="http://sipc115.github.io/sharing/share/course-1/course1.pdf" class="cover-link">SIPC115第一期分享 工程与科研导论PDF</a>
                    </div>
                    <div class="meta">
                        <h3 class="pen-title">工程科研导论</h3>
                        <div class="user">
                            <a class="username">张怀志</a>
                        </div>
                        <div class="stats">
                            <a class="single-stat">
                                <span class="num">0</span>
                                <i class="icon icon-eye"></i>
                            </a>
                            <a class="single-stat">
                                <span class="num">0</span>
                                <i class="icon icon-chat"></i>
                            </a>
                            <a class="single-stat">
                                <span class="num">0</span>
                                <i class="icon icon-heart"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="single-pen">
                    <div class="pen-img">
                        <img src="/codepencil/Public/images/example/course2.png" alt="">
                        <a href="http://sipc115.github.io/sharing/share/course-2/index.html" class="cover-link">SIPC115第二期分享 前端基础之HTML</a>
                    </div>
                    <div class="meta">
                        <h3 class="pen-title">前端基础之HTML</h3>
                        <div class="user">
                            <a class="username">CaelumTian</a>
                        </div>
                        <div class="stats">
                            <a class="single-stat">
                                <span class="num">0</span>
                                <i class="icon icon-eye"></i>
                            </a>
                            <a class="single-stat">
                                <span class="num">0</span>
                                <i class="icon icon-chat"></i>
                            </a>
                            <a class="single-stat">
                                <span class="num">0</span>
                                <i class="icon icon-heart"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="single-pen">
                    <div class="pen-img">
                        <img src="/codepencil/Public/images/example/more.png" alt="">
                         <a href="http://sipc115.github.io/sharing/share/course-2/index.html" class="cover-link">每周我们都会分享内容在这里</a>
                    </div>
                    <div class="meta">
                        <h3 class="pen-title">更多内容待续</h3>
                        <div class="user">
                            <a class="username">SIPC115</a>
                        </div>
                        <div class="stats">
                            <a class="single-stat">
                                <span class="num">0</span>
                                <i class="icon icon-eye"></i>
                            </a>
                            <a class="single-stat">
                                <span class="num">0</span>
                                <i class="icon icon-chat"></i>
                            </a>
                            <a class="single-stat">
                                <span class="num">0</span>
                                <i class="icon icon-heart"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer class="link-footer">
        <div class="footer-container f-clearfix">
            <nav class="footer-nav">
                <strong>CodePencil</strong>
                <a href="https://github.com/T-phantom/codepen">GitHub</a>
                <a href="http://sipc115.github.io/sharing/">Share</a>
                <a href="">Issus</a>
                <a href="">Support</a>
            </nav>
            <nav class="footer-nav">
                <strong>SIPC115</strong>
                <a href="http://59.67.152.15:10080/Show">介绍</a>
                <a href="https://github.com/SIPC115">GitHub</a>
                <a href="http://59.67.152.15:10080">了解我们</a>
                <a href="">帮助</a>
                <a href="">联系方式</a>
            </nav>
            <div class="copyright">
                <h1>
                    <img src="/codepencil/Public/images/logo.png" alt="">
                    <a href="" class="logo">
                        CodePencil
                    </a>
                </h1>
                <p>@SIPC115 v0.1</p>
                <p>激情，协作，创新</p>
            </div>
        </div>
    </footer>
    <script src="/codepencil/Public/js/jquery-2.1.4.js"></script>
    <script>
        jQuery(document).ready(function($) {
            var $bg = $("#bgFrame");
            $("button").on("mousedown", function(event) {
                $(this).css({
                    "transform" : "translateY(2px)"
                });
                $(document).on("mouseup", buttonUp);
            });
            function buttonUp(event) {
                $("button").css({
                    "transform" : "translateY(0px)"
                });
                $(document).off("mouseup", buttonUp);
            }

            $("#code-setting").on("click", function(event) {
                window.location.href = "./editor.html"
            });
            $(".buttonA").on("click", function(evnet) {
                var href = $(this).find("a").attr("href");
                if(href !== undefined) {
                    window.location.href = href;
                }
            })
            $bg.css({
                "display" : "block"
            })
        })
    </script>
</body>
</html>