<?php
require_once(dirname(__FILE__)."/oa_login.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>DDP首页</title>

    <link href="css/home.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.mousewheel.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/oaCheck.js"></script>
    <script src="js/home.js"></script>

</head>
<body>
    <!--start 树形目录-->
    <div class="lt-trees-ctrl" id="lt-trees-ctrl">
        <ul>
            <li class="active"></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <!--end 树形目录-->

    <div class="lt lt-hd">
        <div class="lt-logo"></div>
        <div class="lt-menu">
            <!-- start:列表 -->
            <div class="lt-section">
                <a>技术服务</a>
                <span class="ispan"></span>
                <ul><li><a href="swayc.php" target="_blank">数据接入</a></li><li><a href="swaycal.php" target="_blank">存储计算</a></li><li><a href="swayapp.php" target="_blank">数据应用</a></li></ul>
            </div>
            <!-- 斜线 -->
            <div class="lt-section lt-slash"></div>
            <div class="lt-section">
                <a >文档中心</a>
            </div>
            <div class="lt-section lt-slash"></div>
            <div class="lt-section">
                <a >关于我们</a>
            </div>
            <div style="clear:both;"></div>
            <!-- end:列表 -->
        </div>
        <div class="lt-datamsgs">
            <h2>面向开发者的游戏大数据处理平台</h2>
            <p>提供低成本、高可用、多场景的数据处理一站式服务</p>
        </div>
        <div class="lt-dwg"><div class="lt-dwh"></div></div>

        <!--动态星点 start-->
        <div class="lt-mi lt-mi1"></div>
        <div class="lt-mi lt-mi2"></div>
        <div class="lt-mi lt-mi3"></div>
        <div class="lt-mi lt-mi4"></div>
        <div class="lt-mi lt-mi5"></div>
        <div class="lt-mi lt-mi6"></div>
        <div class="lt-mi lt-mi7"></div>
        <div class="lt-mi lt-mi8"></div>
        <div class="lt-mi lt-mi9"></div>
        <div class="lt-mi lt-mi10"></div>
        <div class="lt-mi lt-mi11"></div>
        <!--动态星点 end-->
    </div>

    <div class="lt lt-dbshow">
        <div class="lt-dbckin">
            <!--start:选项卡-->
            <div class="lt-dbck active">
                <div class="lt-dbckimg dbacpck"></div>
                <p>数据接入</p>
                <!--start:小三角形-->
                <div class="lt-bbt"></div>
                <!--end:小三角形-->
            </div>
            <div class="lt-dbck">
                <div class="lt-dbckimg dbsvck"></div>
                <p>存储计算</p>
                <div class="lt-bbt"></div>
            </div>
            <div class="lt-dbck">
                <div class="lt-dbckimg dbappck"></div>
                <p>数据应用</p>
                <div class="lt-bbt"></div>
            </div>
            <div style="clear:both;"></div>
            <!--end:选项卡-->
        </div>

        <div class="lt-dbckout">
            <div class="lt-dbmsg dbacpck active">
                <div class="lt-dbmsg-detail">
                    <h2>游戏数据标准化接入方案，立即接入，高度可用</h2>
                    <p>·实时集群化平台，<b>0.5小时</b>全自动接入</p>
                    <p>·LVS+nUPDSvr/L5+TCP+PB/L5+HTTP方案，适配不同场景</p>
                    <p>·<b>800Mbps</b>吞吐性能，<b>1秒</b>延时，<b>99.99%</b>数据完整度</p>
                    <p>·服务器平行扩容，分布式容灾，传输存储安全可靠</p>
                    <p>·数据管理平台，地图、血缘分析，助您掌握所有关系</p>
                    <a class="lt-btn" href="swayc.php" target="_blank"><span>立即使用</span><span class="ospan"><i></i></span></a>
                </div>
            </div>
            <div class="lt-dbmsg dbsvck ">
                <div class="lt-dbmsg-detail">
                    <h2>游戏数据全方位计算方案，低成本使用高运算能力</h2>
                    <p>·毫秒级<b>实时计算</b>能力，定制化ETL流程</p>
                    <p>·位图分布式计算平台，1千万/s数据<b>提取与交叉</b>计算</p>
                    <p>·5000+维度<b>画像系统</b>，秒级下钻计算</p>
                    <p>·1分钟千万级用户状态<b>跟踪计算</b></p>
                    <p>·秒级<b>多维数据立方体</b>计算，助您高效解决复杂数据难题</p>
                    <a class="lt-btn" href="swaycal.php" target="_blank"><span>立即使用</span><span class="ospan"><i></i></span></a>
                </div>
                
            </div>
            <div class="lt-dbmsg dbappck ">
                <div class="lt-dbmsg-detail">
                    <h2>游戏数据应用对接方案，定制化输出，稳定安全</h2>
                    <p>·<b>2步</b>完成报表系统搭建，<b>拖拽式</b>组合使用</p>
                    <p>·秒级实时<b>数据推送</b>，基于加密Key的访问策略</p>
                    <p>·<b>定制化规则</b>计算引擎，无缝衔接业务</p>
                    <p>·多场景数据应用，助您释放数据商业价值</p>
                    <a class="lt-btn" href="swayapp.php" target="_blank"><span>立即使用</span><span class="ospan"><i></i></span></a>
                    <a class="lt-href" href="http://km.oa.com/group/18176/articles/show/262510 " target="_blank"><span>查看案例</span></a>
                </div>
                <a></a>
            </div>
        </div>
    </div>

    <!--start:下半部 内容列表-->
    <div class="lt lt-bto" >
        <ul>
            <li class="lt-dbnode yiz">
                <div class="lt-dbmsg active">
                    <div class="lt-dbmsg-detail">
                        <h2>一站式</h2>
                        <p>数据接入、存储计算、数据应用，您想要的一切游戏大数据</p>
                        <p>处理服务，我们均会高水平的为您提供</p>
                    </div>
                </div>
            </li>
            <li class="lt-dbnode doc">
                <div class="lt-dbmsg active">
                    <div class="lt-dbmsg-detail">
                        <h2>多场景</h2>
                        <p>无论本土还是海外，线上或者线下，我们共享海量游戏数据</p>
                        <p>处理经验，致力于为您打造多场景服务平台</p>
                    </div>
                </div>
            </li>
            <li class="lt-dbnode dic">
                <div class="lt-dbmsg active">
                    <div class="lt-dbmsg-detail">
                        <h2>低成本</h2>
                        <p>我们追求的不止是业界领先的数据服务能力，还有您更低的</p>
                        <p>开发成本以及极致的体验</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!--end:下半部 内容列表-->
    
    <!--start:底部-->
    <div class="lt lt-bottom" >
        <div class="lt-logos">
            <div class="lt-logomsg">
                <p>他们都在用，你呢？</p>
                <div class="lt-logsscroll">
                    <div class="lt-section tgame"></div>
                    <div class="lt-section tcould"></div>
                    <div class="lt-section tgameplat"></div>
                    <div class="lt-section wechat"></div>
                    <div class="lt-section qq"></div>
                    <div class="lt-section tul"></div>
                    <div class="lt-section teos"></div>
                </div>
            </div>
        </div>
        <div class="lt-hobttoms">
            <div class="lt-hobttoms-msg">
                <div class="lt-hobttoms-href">
                    <div class="lt-hobttoms-seciton">
                        <span>首页</span>
                        <ul>
                            <li>首页</li>
                        </ul>
                    </div>
                    <div class="lt-hobttoms-slash">
                        <span>/</span>
                    </div>
                    <div class="lt-hobttoms-seciton">
                        <span>数据接入</span>
                        <ul>
                            <li>数据接入</li>
                        </ul>
                    </div>
                    <div class="lt-hobttoms-slash">
                        <span>/</span>
                    </div>
                    <div class="lt-hobttoms-seciton">
                        <span>存储计算</span>
                        <ul>
                            <li>实时计算</li>
                            <li>离线计算</li>
                            <li>跟踪计算</li>
                            <li>多维计算</li>
                        </ul>
                    </div>
                    <div class="lt-hobttoms-slash">
                        <span>/</span>
                    </div>
                    <div class="lt-hobttoms-seciton">
                        <span>数据应用</span>
                        <ul>
                            <li>可视化服务</li>
                            <li>推送组件服务</li>
                            <li>在线接口服务</li>
                            <li>规则引擎服务</li>
                        </ul>
                    </div>
                    <div class="lt-hobttoms-slash">
                        <span>/</span>
                    </div>
                    <div class="lt-hobttoms-seciton">
                        <span>文档中心</span>
                        <ul>
                            <li>文档中心</li>
                        </ul>
                    </div>
                    <div class="lt-hobttoms-slash">
                        <span>/</span>
                    </div>
                    <div class="lt-hobttoms-seciton">
                        <span>关于我们</span>
                        <ul>
                            <li>关于我们</li>
                        </ul>
                    </div>
                </div>
                <div class="lt-hobttoms-idata"><p><span>技术支持</span><br />RTX：小i爱数据</p></div>
                <p class="lt-mt60">Copyright © 1998 - 2016 Tencent. All Rights Reserved.</p>
                <p>腾讯公司 互娱运营部数据中心 版权所有</p>
            </div>
        </div>
    </div>
    <!--end:底部-->
</body>

</html>


