<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="UTF-8">
<title>汇林商城_首页</title>
<meta name="keywords" content="汇林商城">
<meta name="description" content="汇林商城">
<meta name="author" content="山东商讯在线 http://www.sdsoon.com/">
<link rel="stylesheet" href="/demo/public/css/base.css">
<link rel="stylesheet" href="/demo/public/css/shoph_ban.css">
<link rel="stylesheet" href="/demo/public/css/scindex.css">
<script type="text/javascript" src="/demo/public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/demo/public/js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="/demo/public/js/banner.index.js"></script>
<script type="text/javascript" src="/demo/public/js/hun.index.js"></script>
</head>
<body class="bg-cf8f8f8">

<!--web-top start-->
<div class="w-all w-minw bg-cf5f5f5 ovhidden">
    <div class="w-main m-auto">
        <div class="fl"> <span class="fs-14 line-h30 ftc-6b6b6b dsblock fl"> 送货至：山东省,济南市,市辖区 </span> <a href="#" class="tx-ind dsblock w-12 fl bg_icon add-sele m-l-5 hg-30">地址选择</a> <a href="#" class="dsblock fl line-h30 fs-14 ftc-e23435 m-l-40">Hi.请登录</a> </div>
        <ul class="topnav fr">
            <li class="fl"><a href="#" class="fs-14 ftc-6b6b6b line-h30 fl m-l-20 m-r-20">我的订单</a></li>
            <i class="dsblock bg_icon topnav_line fl tx-ind w-1 hg-30">我的订单</i>
            <li class="fl"><a href="#" class="fs-14 ftc-6b6b6b line-h30 fl m-l-20 m-r-20">我的收藏</a></li>
            <i class="dsblock bg_icon topnav_line fl tx-ind w-1  hg-30">我的收藏</i>
            <li class="fl"><a href="#" class="fs-14 ftc-6b6b6b line-h30 fl m-l-20 m-r-20">我的地址</a></li>
            <i class="dsblock bg_icon topnav_line fl tx-ind w-1  hg-30">我的地址</i>
            <li class="fl"><a href="#" class="fs-14 ftc-6b6b6b line-h30 fl m-l-20 m-r-20">帮助中心</a></li>
            <i class="dsblock bg_icon topnav_line fl tx-ind w-1  hg-30">帮助中心</i>
            <li class="fl"><a href="#" class="fs-14 ftc-6b6b6b line-h30 fl m-l-20">网站导航</a></li>
        </ul>
    </div>
</div>
<!--web-top end-->
<div class="bg-cffffff w-minw ovhidden">
    <div class="w-main m-auto m-t-30 m-b-16 ovhidden"> 
        <!--web logo start--> 
        <a href="#" class="logo_top fl"><img src="/demo/public/images/logo_top.gif" width="195" height="56" alt="汇林商城logo"/></a>
        <!--web logo end--> 
        <!--web search start-->
        <div class="search m-l-230 w-455 m-t-5 fl">
            <form action="#" method="get" id="searchform" name="searchform" onSubmit="return checkSearchForm()" class="search-form">
                <input class="w-380 p-l-8 fl fs-14 ftc-999999 bd-s-ce23435 line-h36 hg-36" type="text" name="keywords" id="keyword" value="请输入关键字" onfocus="if(this.value == '请输入关键字')this.value = ''" onblur="if(this.value == '')this.value='请输入关键字'" autocomplete="off">
                <input type="hidden" value="k1" name="dataBi">
                <button type="submit" class="w-65 line-h38 hg-38 bg-ce23435 bg_icon secbtn tx-ind fl">提交</button>
            </form>
            <div class="w-455 fl" id="hotkeywords"> <a href="#" class="hot-item ftc-4b4b4b fs-14 line-h30 m-r-15 fl">旅行包</a> <i class="dsblock bg_icon topnav_line fl tx-ind w-1 hg-30">旅行包</i> <a href="#" class="hot-item ftc-4b4b4b fs-14 line-h30 m-r-15 m-l-15 fl">皮鞋</a> <i class="dsblock bg_icon topnav_line fl tx-ind w-1  hg-30">皮鞋</i> <a href="#" class="hot-item ftc-4b4b4b fs-14 line-h30 m-r-15 m-l-15 fl">年货先到家</a> <i class="dsblock bg_icon topnav_line fl tx-ind w-1  hg-30">年货先到家</i> <a href="#" class="hot-item ftc-4b4b4b fs-14 line-h30 m-r-15 m-l-15 fl">皮革</a> </div>
        </div>
        <!--web search end--> 
        <!--web Shopping Cart start--> 
        <a class="w-160 bd-s-ce23435 line-h38 hg-38 fr curpter text-c m-t-5 fs-14 ftc-999999 dsblock"> <i class="dsblock bg_icon cart_icon w-26 curpter m-l-15 tx-ind fl">购物车</i> 我的购物车 <i class="dsblock  bg_icon cartnum w-17 curpter m-r-10 fr fs-12 ftc-ffffff">55</i> </a> 
        <!--web Shopping Cart end--> 
    </div>
</div>

<!--web nav start-->
<div class="w-all w-minw ovhidden bg-cffffff bd-bs-ed4f2c">
    <div class="w-main m-auto">
        <div class="w-180 bg-c2b2b2b  text-c bd-bs-2b2b2b all-sort fl">
            <h2><a href="" class="fs-15 ftc-ffffff line-45">全部商品分类</a></h2>
        </div>
        <ul class="nav fl">
            <li class="fl"><a href="index.html" class="fl dsblock p-l-13 p-r-13 m-l-20 fs-16 ftc-626262 line-45">首页</a></li>
            <li class="fl"><a href="商城_首页.html" class="fl dsblock p-l-13 p-r-13 m-l-20 fs-16 ftc-626262 line-45 navactive">汇林商城</a></li>
            <li class="fl"><a href="#" class="fl dsblock p-l-13 p-r-13 m-l-20 fs-16 ftc-626262 line-45">活动专区</a></li>
            <li class="fl"><a href="#" class="fl dsblock p-l-13 p-r-13 m-l-20 fs-16 ftc-626262 line-45">限时抢购</a></li>
            <li class="fl"><a href="#" class="fl dsblock p-l-13 p-r-13 m-l-20 fs-16 ftc-626262 line-45">天天特价</a></li>
            <li class="fl"><a href="#" class="fl dsblock p-l-13 p-r-13 m-l-20 fs-16 ftc-626262 line-45">优惠套餐</a></li>
            <li class="fl"><a href="brand.html" class="fl dsblock p-l-13 p-r-13 m-l-20 fs-16 ftc-626262 line-45">品牌街</a></li>
            <li class="fl"><a href="#" class="fl dsblock p-l-13 p-r-13 m-l-20 fs-16 ftc-626262 line-45">我能兑换</a></li>
            <div class="clear"></div>
        </ul>
    </div>
</div>
</div>
<!--web nav end--> 
<!--web banner start-->
<div class="w-all w-minw banner">
    <div id="full-screen-slider">
        <ul id="slides">
            <li style="background:url('/demo/public/ban/list_ban.jpg') center top no-repeat;"><a href="javascript:void(0)"></a></li>
            <li style="background:url('/demo/public/ban/list_ban2.jpg') center top no-repeat;"><a href="javascript:void(0)"></a></li>
            <li style="background:url('/demo/public/ban/ban03.jpg') center top no-repeat;"><a href="javascript:void(0)"></a></li>
        </ul>
    </div>
</div>
<!--web banner end--> 
<!--1F 消费 start-->
<div class="w-main m-auto m-t-25">
    <div class="w-main">
        <h3 class="ftc-383838 font-b9 fs-26 line-80 fl"><span class="m-r-20">1F</span>消费</h3>
        <a href="#" class="fr dsblock line-80 fs-14 ftc-383838">查看更多></a> </div>
    <div class="clear"></div>
    <div class="w-main"> <a href="#" class="dsblock fl m-b-10 w-252 hg-530 sphomead"><img src="/demo/public/pics/1f.jpg" alt=""/></a>
        <ul class="w-940 pro fr">
            <li>
                <div class="pic fl"><a href="#"><img src="/demo/public/pics/sum02.jpg" /></a></div>
               <div class="title w-all fl"><a href="#" class="dsblock w-all fl">
                    <h3 class="w-all fs-14 ftc-000000 text-c line-h25 one_hidden fl">小米(MI) Air 12.5英寸全金属超轻薄笔记本电脑</h3>
                   <a href="<?php echo U('Home/Products/productsList');?>">
                       <span class="dsblock w-all text-c fs-14 ftc-ff0000 fl line-h24">权益资产：10000</span></a></a></div>
            </li>
            <li>
                <div class="pic fl"><a href="#"><img src="/demo/public/pics/sum02.jpg" /></a></div>
                <div class="title w-all fl"><a href="#" class="dsblock w-all fl">
                    <h3 class="w-all fs-14 ftc-000000 text-c line-h25 one_hidden fl">小米(MI) Air 12.5英寸全金属超轻薄笔记本电脑</h3>
                    <span class="dsblock w-all text-c fs-14 ftc-ff0000 fl line-h24">权益资产：3686</span></a></div>
            </li>
            <li>
                <div class="pic fl"><a href="#"><img src="/demo/public/pics/sum02.jpg" /></a></div>
                <div class="title w-all fl"><a href="#" class="dsblock w-all fl">
                    <h3 class="w-all fs-14 ftc-000000 text-c line-h25 one_hidden fl">小米(MI) Air 12.5英寸全金属超轻薄笔记本电脑</h3>
                    <span class="dsblock w-all text-c fs-14 ftc-ff0000 fl line-h24">权益资产：3686</span></a></div>
            </li>
            <li>
                <div class="pic fl"><a href="#"><img src="/demo/public/pics/sum02.jpg" /></a></div>
                <div class="title w-all fl"><a href="#" class="dsblock w-all fl">
                    <h3 class="w-all fs-14 ftc-000000 text-c line-h25 one_hidden fl">小米(MI) Air 12.5英寸全金属超轻薄笔记本电脑</h3>
                    <span class="dsblock w-all text-c fs-14 ftc-ff0000 fl line-h24">权益资产：3686</span></a></div>
            </li>
            <li>
                <div class="pic fl"><a href="#"><img src="/demo/public/pics/sum02.jpg" /></a></div>
                <div class="title w-all fl"><a href="#" class="dsblock w-all fl">
                    <h3 class="w-all fs-14 ftc-000000 text-c line-h25 one_hidden fl">小米(MI) Air 12.5英寸全金属超轻薄笔记本电脑</h3>
                    <span class="dsblock w-all text-c fs-14 ftc-ff0000 fl line-h24">权益资产：3686</span></a></div>
            </li>
            <li>
                <div class="pic fl"><a href="#"><img src="/demo/public/pics/sum02.jpg" /></a></div>
                <div class="title w-all fl"><a href="#" class="dsblock w-all fl">
                    <h3 class="w-all fs-14 ftc-000000 text-c line-h25 one_hidden fl">小米(MI) Air 12.5英寸全金属超轻薄笔记本电脑</h3>
                    <span class="dsblock w-all text-c fs-14 ftc-ff0000 fl line-h24">权益资产：3686</span></a></div>
            </li>
            <li>
                <div class="pic fl"><a href="#"><img src="/demo/public/pics/sum02.jpg" /></a></div>
                <div class="title w-all fl"><a href="#" class="dsblock w-all fl">
                    <h3 class="w-all fs-14 ftc-000000 text-c line-h25 one_hidden fl">小米(MI) Air 12.5英寸全金属超轻薄笔记本电脑</h3>
                    <span class="dsblock w-all text-c fs-14 ftc-ff0000 fl line-h24">权益资产：3686</span></a></div>
            </li>
            <li>
                <div class="pic fl"><a href="#"><img src="/demo/public/pics/sum02.jpg" /></a></div>
                <div class="title w-all fl"><a href="#" class="dsblock w-all fl">
                    <h3 class="w-all fs-14 ftc-000000 text-c line-h25 one_hidden fl">小米(MI) Air 12.5英寸全金属超轻薄笔记本电脑</h3>
                    <span class="dsblock w-all text-c fs-14 ftc-ff0000 fl line-h24">权益资产：3686</span></a></div>
            </li>
        </ul>
    </div>
</div>
<!--1F 消费 end--> 
<!--2F 保险保健 start-->
<div class="w-main m-auto m-t-25">
    <div class="w-main">
        <h3 class="ftc-383838 font-b9 fs-26 line-80 fl"><span class="m-r-20">2F</span>保险保健</h3>
        <a href="#" class="fr dsblock line-80 fs-14 ftc-383838">查看更多></a> </div>
    <div class="clear"></div>
    <div class="w-main"> <a href="#" class="dsblock fl m-b-10 w-252 hg-530 sphomead"><img src="/demo/public/pics/2f.jpg" alt=""/></a>
        <ul class="w-940 pro2f fr">
            <li> <a href="#" class="pics fl bd-bs-e9e9e9 dsblock"><img src="/demo/public/pics/2fpro.jpg" alt=""/></a> <a href="#" class="fs-14 fl ftc-000000 dsblock m-l-1 w-230 text-c line-50 bd-ls-e9e9e9">老年专属防癌险</a> <a href="#" class="fs-14 fl ftc-ff0000 dsblock w-230 text-c m-l-1 line-50 bd-ls-e9e9e9">权益资产：3686</a> </li>
            <li> <a href="#" class="pics fl bd-bs-e9e9e9 dsblock"><img src="/demo/public/pics/2fpro1.jpg" alt=""/></a> <a href="#" class="fs-14 fl ftc-000000 dsblock m-l-1 w-230 text-c line-50 bd-ls-e9e9e9">老年专属防癌险</a> <a href="#" class="fs-14 fl ftc-ff0000 dsblock w-230 text-c m-l-1 line-50 bd-ls-e9e9e9">权益资产：3686</a> </li>
            <li> <a href="#" class="pics fl bd-bs-e9e9e9 dsblock"><img src="/demo/public/pics/2fpro2.jpg" alt=""/></a> <a href="#" class="fs-14 fl ftc-000000 dsblock m-l-1 w-230 text-c line-50 bd-ls-e9e9e9">老年专属防癌险</a> <a href="#" class="fs-14 fl ftc-ff0000 dsblock w-230 text-c m-l-1 line-50 bd-ls-e9e9e9">权益资产：3686</a> </li>
            <li> <a href="#" class="pics fl bd-bs-e9e9e9 dsblock"><img src="/demo/public/pics/2fpro3.jpg" alt=""/></a> <a href="#" class="fs-14 fl ftc-000000 dsblock m-l-1 w-230 text-c line-50 bd-ls-e9e9e9">老年专属防癌险</a> <a href="#" class="fs-14 fl ftc-ff0000 dsblock w-230 text-c m-l-1 line-50 bd-ls-e9e9e9">权益资产：3686</a> </li>
        </ul>
    </div>
</div>
<!--2F 保险保健 end--> 
<!--3F 保险保健 start-->
<div class="w-main m-auto m-t-25">
    <div class="w-main">
        <h3 class="ftc-383838 font-b9 fs-26 line-80 fl"><span class="m-r-20">3F</span>教育培训</h3>
        <a href="#" class="fr dsblock line-80 fs-14 ftc-383838">查看更多></a> </div>
    <div class="clear"></div>
    <div class="w-main"> <a href="#" class="dsblock fl m-b-10 w-252 hg-530 sphomead"><img src="/demo/public/pics/3f.jpg" alt=""/></a>
        <ul class="w-940 pro2f fr">
            <li> <a href="#" class="pics fl bd-bs-e9e9e9 dsblock"><img src="/demo/public/pics/3fpro.jpg" alt=""/></a> <a href="#" class="fs-14 fl ftc-000000 dsblock m-l-1 w-230 text-c line-50 bd-ls-e9e9e9">老年专属防癌险</a> <a href="#" class="fs-14 fl ftc-ff0000 dsblock w-230 text-c m-l-1 line-50 bd-ls-e9e9e9">权益资产：3686</a> </li>
            <li> <a href="#" class="pics fl bd-bs-e9e9e9 dsblock"><img src="/demo/public/pics/3fpro1.jpg" alt=""/></a> <a href="#" class="fs-14 fl ftc-000000 dsblock m-l-1 w-230 text-c line-50 bd-ls-e9e9e9">老年专属防癌险</a> <a href="#" class="fs-14 fl ftc-ff0000 dsblock w-230 text-c m-l-1 line-50 bd-ls-e9e9e9">权益资产：3686</a> </li>
            <li> <a href="#" class="pics fl bd-bs-e9e9e9 dsblock"><img src="/demo/public/pics/3fpro.jpg" alt=""/></a> <a href="#" class="fs-14 fl ftc-000000 dsblock m-l-1 w-230 text-c line-50 bd-ls-e9e9e9">老年专属防癌险</a> <a href="#" class="fs-14 fl ftc-ff0000 dsblock w-230 text-c m-l-1 line-50 bd-ls-e9e9e9">权益资产：3686</a> </li>
            <li> <a href="#" class="pics fl bd-bs-e9e9e9 dsblock"><img src="/demo/public/pics/3fpro1.jpg" alt=""/></a> <a href="#" class="fs-14 fl ftc-000000 dsblock m-l-1 w-230 text-c line-50 bd-ls-e9e9e9">老年专属防癌险</a> <a href="#" class="fs-14 fl ftc-ff0000 dsblock w-230 text-c m-l-1 line-50 bd-ls-e9e9e9">权益资产：3686</a> </li>
        </ul>
    </div>
</div>
<!--3F 保险保健 end--> 

<!--4F 公益服务 start-->
<div class="w-main m-auto m-t-25">
    <div class="w-main">
        <h3 class="ftc-383838 font-b9 fs-26 line-80 fl"><span class="m-r-20">4F</span>公益服务</h3>
        <a href="#" class="fr dsblock line-80 fs-14 ftc-383838">查看更多></a> </div>
    <div class="clear"></div>
    <div class="w-main"> <a href="#" class="dsblock fl m-b-10 w-252 hg-530 sphomead"><img src="/demo/public/pics/4f.jpg" alt=""/></a>
        <ul class="w-940 pro2f fr">
            <li> <a href="#" class="pics fl bd-bs-e9e9e9 dsblock"><img src="/demo/public/pics/4fpro.jpg" alt=""/></a> <a href="#" class="fs-14 fl ftc-000000 dsblock m-l-1 w-230 text-c line-50 bd-ls-e9e9e9">老年专属防癌险</a> <a href="#" class="fs-14 fl ftc-ff0000 dsblock w-230 text-c m-l-1 line-50 bd-ls-e9e9e9">权益资产：3686</a> </li>
            <li> <a href="#" class="pics fl bd-bs-e9e9e9 dsblock"><img src="/demo/public/pics/4fpro.jpg" alt=""/></a> <a href="#" class="fs-14 fl ftc-000000 dsblock m-l-1 w-230 text-c line-50 bd-ls-e9e9e9">老年专属防癌险</a> <a href="#" class="fs-14 fl ftc-ff0000 dsblock w-230 text-c m-l-1 line-50 bd-ls-e9e9e9">权益资产：3686</a> </li>
            <li> <a href="#" class="pics fl bd-bs-e9e9e9 dsblock"><img src="/demo/public/pics/4fpro.jpg" alt=""/></a> <a href="#" class="fs-14 fl ftc-000000 dsblock m-l-1 w-230 text-c line-50 bd-ls-e9e9e9">老年专属防癌险</a> <a href="#" class="fs-14 fl ftc-ff0000 dsblock w-230 text-c m-l-1 line-50 bd-ls-e9e9e9">权益资产：3686</a> </li>
            <li> <a href="#" class="pics fl bd-bs-e9e9e9 dsblock"><img src="/demo/public/pics/4fpro.jpg" alt=""/></a> <a href="#" class="fs-14 fl ftc-000000 dsblock m-l-1 w-230 text-c line-50 bd-ls-e9e9e9">老年专属防癌险</a> <a href="#" class="fs-14 fl ftc-ff0000 dsblock w-230 text-c m-l-1 line-50 bd-ls-e9e9e9">权益资产：3686</a> </li>
        </ul>
    </div>
</div>
<!--4F 公益服务 end--> 

<!--5F 公益服务 start-->
<div class="w-main m-auto m-t-25">
    <div class="w-main">
        <h3 class="ftc-383838 font-b9 fs-26 line-80 fl"><span class="m-r-20">5F</span>经营权</h3>
        <a href="#" class="fr dsblock line-80 fs-14 ftc-383838">查看更多></a> </div>
    <div class="clear"></div>
    <div class="w-main"> <a href="#" class="dsblock fl m-b-10 w-252 hg-530 sphomead"><img src="/demo/public/pics/5f.jpg" alt=""/></a>
        <ul class="w-940 pro2f fr">
            <li> <a href="#" class="pics fl bd-bs-e9e9e9 dsblock"><img src="/demo/public/pics/5fpro.jpg" alt=""/></a> <a href="#" class="fs-14 fl ftc-000000 dsblock m-l-1 w-230 text-c line-50 bd-ls-e9e9e9">小额贷款-急用钱，找我们</a> <a href="#" class="fs-14 fl ftc-ff0000 dsblock w-230 text-c m-l-1 line-50 bd-ls-e9e9e9">权益资产：3686</a> </li>
            <li> <a href="#" class="pics fl bd-bs-e9e9e9 dsblock"><img src="/demo/public/pics/5fpro1.jpg" alt=""/></a> <a href="#" class="fs-14 fl ftc-000000 dsblock m-l-1 w-230 text-c line-50 bd-ls-e9e9e9">老年专属防癌险</a> <a href="#" class="fs-14 fl ftc-ff0000 dsblock w-230 text-c m-l-1 line-50 bd-ls-e9e9e9">权益资产：3686</a> </li>
            <li> <a href="#" class="pics fl bd-bs-e9e9e9 dsblock"><img src="/demo/public/pics/5fpro1.jpg" alt=""/></a> <a href="#" class="fs-14 fl ftc-000000 dsblock m-l-1 w-230 text-c line-50 bd-ls-e9e9e9">老年专属防癌险</a> <a href="#" class="fs-14 fl ftc-ff0000 dsblock w-230 text-c m-l-1 line-50 bd-ls-e9e9e9">权益资产：3686</a> </li>
        </ul>
    </div>
</div>
<!--5F 公益服务 end--> 

<!--6F 数字资产 start-->
<div class="w-main m-auto m-t-25">
    <div class="w-main">
        <h3 class="ftc-383838 font-b9 fs-26 line-80 fl"><span class="m-r-20">6F</span>数字资产</h3>
        <a href="#" class="fr dsblock line-80 fs-14 ftc-383838">查看更多></a> </div>
    <div class="clear"></div>
    <div class="w-main"> <a href="#" class="dsblock fl m-b-10 w-252 hg-530 sphomead"><img src="/demo/public/pics/6f.jpg" alt=""/></a>
        <ul class="w-940 pro2f fr">
            <li> <a href="#" class="pics fl bd-bs-e9e9e9 dsblock"><img src="/demo/public/pics/6fpro.jpg" alt=""/></a> <a href="#" class="fs-14 fl ftc-000000 dsblock m-l-1 w-230 text-c line-50 bd-ls-e9e9e9">老年专属防癌险</a> <a href="#" class="fs-14 fl ftc-ff0000 dsblock w-230 text-c m-l-1 line-50 bd-ls-e9e9e9">权益资产：3686</a> </li>
            <li> <a href="#" class="pics fl bd-bs-e9e9e9 dsblock"><img src="/demo/public/pics/6fpro1.jpg" alt=""/></a> <a href="#" class="fs-14 fl ftc-000000 dsblock m-l-1 w-230 text-c line-50 bd-ls-e9e9e9">老年专属防癌险</a> <a href="#" class="fs-14 fl ftc-ff0000 dsblock w-230 text-c m-l-1 line-50 bd-ls-e9e9e9">权益资产：3686</a> </li>
            <li> <a href="#" class="pics fl bd-bs-e9e9e9 dsblock"><img src="/demo/public/pics/6fpro1.jpg" alt=""/></a> <a href="#" class="fs-14 fl ftc-000000 dsblock m-l-1 w-230 text-c line-50 bd-ls-e9e9e9">老年专属防癌险</a> <a href="#" class="fs-14 fl ftc-ff0000 dsblock w-230 text-c m-l-1 line-50 bd-ls-e9e9e9">权益资产：3686</a> </li>
        </ul>
    </div>
</div>
<!--6F 数字资产 end--> 

<!--7F 期权 start-->
<div class="w-main m-auto m-t-25">
    <div class="w-main">
        <h3 class="ftc-383838 font-b9 fs-26 line-80 fl"><span class="m-r-20">7F</span>期权</h3>
        <a href="#" class="fr dsblock line-80 fs-14 ftc-383838">查看更多></a> </div>
    <div class="clear"></div>
    <div class="w-main"> <a href="#" class="dsblock fl m-b-10 w-252 hg-530 sphomead"><img src="/demo/public/pics/7f.jpg" alt=""/></a>
        <ul class="w-940 pro2f fr">
            <li> <a href="#" class="pics fl bd-bs-e9e9e9 dsblock"><img src="/demo/public/pics/7fpro.jpg" width="460" height="479" alt=""/></a> <a href="#" class="fs-14 fl ftc-000000 dsblock m-l-1 w-230 text-c line-50 bd-ls-e9e9e9">老年专属防癌险</a> <a href="#" class="fs-14 fl ftc-ff0000 dsblock w-230 text-c m-l-1 line-50 bd-ls-e9e9e9">权益资产：3686</a> </li>
            <li> <a href="#" class="pics fl bd-bs-e9e9e9 dsblock"><img src="/demo/public/pics/7fpro1.jpg" alt=""/></a> <a href="#" class="fs-14 fl ftc-000000 dsblock m-l-1 w-230 text-c line-50 bd-ls-e9e9e9">老年专属防癌险</a> <a href="#" class="fs-14 fl ftc-ff0000 dsblock w-230 text-c m-l-1 line-50 bd-ls-e9e9e9">权益资产：3686</a> </li>
            <li> <a href="#" class="pics fl bd-bs-e9e9e9 dsblock"><img src="/demo/public/pics/7fpro1.jpg" alt=""/></a> <a href="#" class="fs-14 fl ftc-000000 dsblock m-l-1 w-230 text-c line-50 bd-ls-e9e9e9">老年专属防癌险</a> <a href="#" class="fs-14 fl ftc-ff0000 dsblock w-230 text-c m-l-1 line-50 bd-ls-e9e9e9">权益资产：3686</a> </li>
        </ul>
    </div>
</div>
<!--7F 期权 end--> 

<!--8F 大宗期货 start-->
<div class="w-main m-auto m-t-25">
    <div class="w-main">
        <h3 class="ftc-383838 font-b9 fs-26 line-80 fl"><span class="m-r-20">8F</span>大宗期货</h3>
        <a href="#" class="fr dsblock line-80 fs-14 ftc-383838">查看更多></a> </div>
    <div class="clear"></div>
    <div class="w-main"> <a href="#" class="dsblock fl m-b-10 w-252 hg-530 sphomead"><img src="/demo/public/pics/8f.jpg" alt=""/></a>
        <ul class="w-940 pro2f fr">
            <li> <a href="#" class="pics fl bd-bs-e9e9e9 dsblock"><img src="/demo/public/pics/8fpro.jpg" width="460" height="479" alt=""/></a> <a href="#" class="fs-14 fl ftc-000000 dsblock m-l-1 w-230 text-c line-50 bd-ls-e9e9e9">老年专属防癌险</a> <a href="#" class="fs-14 fl ftc-ff0000 dsblock w-230 text-c m-l-1 line-50 bd-ls-e9e9e9">权益资产：3686</a> </li>
            <li> <a href="#" class="pics fl bd-bs-e9e9e9 dsblock"><img src="/demo/public/pics/8fpro1.jpg" alt=""/></a> <a href="#" class="fs-14 fl ftc-000000 dsblock m-l-1 w-230 text-c line-50 bd-ls-e9e9e9">老年专属防癌险</a> <a href="#" class="fs-14 fl ftc-ff0000 dsblock w-230 text-c m-l-1 line-50 bd-ls-e9e9e9">权益资产：3686</a> </li>
            <li> <a href="#" class="pics fl bd-bs-e9e9e9 dsblock"><img src="/demo/public/pics/8fpro1.jpg" alt=""/></a> <a href="#" class="fs-14 fl ftc-000000 dsblock m-l-1 w-230 text-c line-50 bd-ls-e9e9e9">老年专属防癌险</a> <a href="#" class="fs-14 fl ftc-ff0000 dsblock w-230 text-c m-l-1 line-50 bd-ls-e9e9e9">权益资产：3686</a> </li>
        </ul>
    </div>
</div>
<!--8F 大宗期货 end--> 

<!--9F 期权 start-->
<div class="w-main m-auto m-t-25 m-b-40 ovhidden">
    <div class="w-main">
        <h3 class="ftc-383838 font-b9 fs-26 line-80 fl"><span class="m-r-20">9F</span>期权</h3>
        <a href="#" class="fr dsblock line-80 fs-14 ftc-383838">查看更多></a> </div>
    <div class="clear"></div>
    <div class="w-main"> <a href="#" class="dsblock fl m-b-10 w-252 hg-530 sphomead"><img src="/demo/public/pics/9f.jpg" alt=""/></a>
        <ul class="w-940 pro2f fr">
            <li> <a href="#" class="pics fl bd-bs-e9e9e9 dsblock"><img src="/demo/public/pics/9fpro.jpg" width="460" height="479" alt=""/></a> <a href="#" class="fs-14 fl ftc-000000 dsblock m-l-1 w-230 text-c line-50 bd-ls-e9e9e9">老年专属防癌险</a> <a href="#" class="fs-14 fl ftc-ff0000 dsblock w-230 text-c m-l-1 line-50 bd-ls-e9e9e9">权益资产：3686</a> </li>
            <li> <a href="#" class="pics fl bd-bs-e9e9e9 dsblock"><img src="/demo/public/pics/9fpro1.jpg" alt=""/></a> <a href="#" class="fs-14 fl ftc-000000 dsblock m-l-1 w-230 text-c line-50 bd-ls-e9e9e9">老年专属防癌险</a> <a href="#" class="fs-14 fl ftc-ff0000 dsblock w-230 text-c m-l-1 line-50 bd-ls-e9e9e9">权益资产：3686</a> </li>
            <li> <a href="#" class="pics fl bd-bs-e9e9e9 dsblock"><img src="/demo/public/pics/9fpro1.jpg" alt=""/></a> <a href="#" class="fs-14 fl ftc-000000 dsblock m-l-1 w-230 text-c line-50 bd-ls-e9e9e9">老年专属防癌险</a> <a href="#" class="fs-14 fl ftc-ff0000 dsblock w-230 text-c m-l-1 line-50 bd-ls-e9e9e9">权益资产：3686</a> </li>
        </ul>
    </div>
</div>
<!--7F 数字资产 end-->

<div class="w-all w-minw bg-cffffff ovhidden p-t-15 p-b-15"> 
    <!--web home Fiery scramble end-->
    <div class="w-main m-auto">
        <div class="w-main m-b-10">
            <div class="w-82 fl m-l-10"> <img src="/demo/public/pics/icon01.png" alt=""/>
                <p class="text-c fs-16 ftc-000000 line-h36">全正品</p>
            </div>
            <div class="w-82 fl m-l-195"> <img src="/demo/public/pics/icon02.png" alt=""/>
                <p class="text-c fs-16 ftc-000000 line-h36">超保障</p>
            </div>
            <div class="w-82 fl m-l-195"> <img src="/demo/public/pics/icon03.png" alt=""/>
                <p class="text-c fs-16 ftc-000000 line-h36">最放心</p>
            </div>
            <div class="w-82 fl m-l-195"> <img src="/demo/public/pics/icon04.png" alt=""/>
                <p class="text-c fs-16 ftc-000000 line-h36">快捷付</p>
            </div>
            <div class="w-82 fr m-r-10"> <img src="/demo/public/pics/icon04.png" alt=""/>
                <p class="text-c fs-16 ftc-000000 line-h36">限时达</p>
            </div>
        </div>
    </div>
</div>

<!--web footer start-->
<div class="w-all w-minw bg-c1d1d1d ovhidden p-t-15">
    <div class="w-main m-auto footernav">
        <dl class="fl w-100 m-l-30 m-r-50">
            <dt><a href="#" class="fl dsblock fs-18 ftc-ffffff line-45 w-all text-c">新手上路</a></dt>
            <dd><a href="#" class="fl dsblock fs-14 ftc-c4c4c4 line-h36 w-all text-c">售后流程</a></dd>
            <dd><a href="#" class="fl dsblock fs-14 ftc-c4c4c4 line-h36 w-all text-c">购物流程</a></dd>
            <dd><a href="#" class="fl dsblock fs-14 ftc-c4c4c4 line-h36 w-all text-c">订购方式</a></dd>
            <dd><a href="#" class="fl dsblock fs-14 ftc-c4c4c4 line-h36 w-all text-c">在线支付</a></dd>
            <dd><a href="#" class="fl dsblock fs-14 ftc-c4c4c4 line-h36 w-all text-c">公司转账</a></dd>
        </dl>
        <dl class="fl w-100 m-l-30 m-r-50">
            <dt><a href="#" class="fl dsblock fs-18 ftc-ffffff line-45 w-all text-c">配送方式</a></dt>
            <dd><a href="#" class="fl dsblock fs-14 ftc-c4c4c4 line-h36 w-all text-c">货到付款</a></dd>
            <dd><a href="#" class="fl dsblock fs-14 ftc-c4c4c4 line-h36 w-all text-c">区域配送</a></dd>
            <dd><a href="#" class="fl dsblock fs-14 ftc-c4c4c4 line-h36 w-all text-c">支付查询</a></dd>
            <dd><a href="#" class="fl dsblock fs-14 ftc-c4c4c4 line-h36 w-all text-c">支付方式说明</a></dd>
            <dd><a href="#" class="fl dsblock fs-14 ftc-c4c4c4 line-h36 w-all text-c">如何送礼</a></dd>
        </dl>
        <dl class="fl w-100 m-l-30 m-r-50">
            <dt><a href="#" class="fl dsblock fs-18 ftc-ffffff line-45 w-all text-c">购物指南</a></dt>
            <dd><a href="#" class="fl dsblock fs-14 ftc-c4c4c4 line-h36 w-all text-c">常见问题</a></dd>
            <dd><a href="#" class="fl dsblock fs-14 ftc-c4c4c4 line-h36 w-all text-c">订购流程</a></dd>
            <dd><a href="#" class="fl dsblock fs-14 ftc-c4c4c4 line-h36 w-all text-c">注册新会员</a></dd>
            <dd><a href="#" class="fl dsblock fs-14 ftc-c4c4c4 line-h36 w-all text-c">团购/机票</a></dd>
            <dd><a href="#" class="fl dsblock fs-14 ftc-c4c4c4 line-h36 w-all text-c">联系客服</a></dd>
        </dl>
        <dl class="fl w-100 m-l-30 m-r-50">
            <dt><a href="#" class="fl dsblock fs-18 ftc-ffffff line-45 w-all text-c">售后服务</a></dt>
            <dd><a href="#" class="fl dsblock fs-14 ftc-c4c4c4 line-h36 w-all text-c">退换货原则</a></dd>
            <dd><a href="#" class="fl dsblock fs-14 ftc-c4c4c4 line-h36 w-all text-c">售后服务保证</a></dd>
            <dd><a href="#" class="fl dsblock fs-14 ftc-c4c4c4 line-h36 w-all text-c">换货流程</a></dd>
            <dd><a href="#" class="fl dsblock fs-14 ftc-c4c4c4 line-h36 w-all text-c">退款说明</a></dd>
            <dd><a href="#" class="fl dsblock fs-14 ftc-c4c4c4 line-h36 w-all text-c">返修/退换货</a></dd>
        </dl>
        <dl class="fl w-100 m-l-30 m-r-50">
            <dt><a href="#" class="fl dsblock fs-18 ftc-ffffff line-45 w-all text-c">关于我们</a></dt>
            <dd><a href="#" class="fl dsblock fs-14 ftc-c4c4c4 line-h36 w-all text-c">网站故障报告</a></dd>
            <dd><a href="#" class="fl dsblock fs-14 ftc-c4c4c4 line-h36 w-all text-c">选机咨询</a></dd>
            <dd><a href="#" class="fl dsblock fs-14 ftc-c4c4c4 line-h36 w-all text-c">投诉与建议</a></dd>
            <dd><a href="#" class="fl dsblock fs-14 ftc-c4c4c4 line-h36 w-all text-c">节能补贴</a></dd>
            <dd><a href="#" class="fl dsblock fs-14 ftc-c4c4c4 line-h36 w-all text-c">礼品</a></dd>
        </dl>
        <div class="w-180 fr m-r-50">
            <h3 class="fs-18 ftc-ffffff line-45">联系我们</h3>
            <p class="fs-20 ftc-ca0303 line-h36">400-960-5778</p>
            <p class="fs-14 ftc-ffffff line-h36"> 周一至周日8:00-18:00 <br/>
                （仅收市话费）</p>
            <p class="fs-14 ftc-e3393a line-40 bd-s-ce3393a ovhidden bg_icon tel_icon footer_tel">24小时在线客服</p>
        </div>
    </div>
</div>
<div class="w-all w-minw bg-c000000 ovhidden">
    <div class="w-main m-auto text-c fs-14 ftc-777777 line-60"> © 2005-2017 革优网 版权所有，并保留所有权利。 </div>
</div>

</body>
</html>