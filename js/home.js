;(function (factory) {
    if ( typeof define === 'function' && define.amd ) {
        // AMD. Register as an anonymous module.
        define(['jquery'], factory);
    } else if (typeof exports === 'object') {
        // Node/CommonJS style for Browserify
        module.exports = factory;
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function ($) {
    var home = {
        curMod: -1,
        treeCtrl: '#lt-trees-ctrl',
        mousing:false,
        mods: []
    };
    home.mousewheel = function (num,curTo) {
        var n = -num;
        if(home.mousing) return false;
        if (arguments.length === 1) {
            if (n > 0) {
                var curMod = home.curMod + n >= home.mods.length ? home.mods.length - 1 : home.curMod + n;
            } else {
                var curMod = home.curMod + n <= 0 ? 0 : home.curMod + n;
            }

            if (curMod === home.curMod) return false;
        } else {
            var curMod = curTo;
        }
        var obj = {
            top: $(window).scrollTop()
        },
            end = home.mods[curMod].offset().top;
        home.curMod = curMod;
        home.mousing = true;

        $(obj).animate({ top: end }, {
            step: function (d) {
                $(window).scrollTop(d);
                
            },
            complete: function (d) {
                home.mousing = false;
                home.setTreeCtrl(home.curMod);
            }
        });
    }
    home.setCurModByScroll = function () {
        var t = $(window).scrollTop(),
            h = $(window).height();
        for (var i = 0; i < home.mods.length; i++) {
            var curt = home.mods[i].offset().top;
            if (t === curt) {
                home.curMod = i;
                home.setTreeCtrl(i);
                return;
            } else {
                if (t > curt && t < curt + h) {
                    home.curMod = i;
                    $(window).scrollTop(home.mods[i].offset().top);
                    home.setTreeCtrl(i);
                    return;
                }
            }
        }
        home.curMod = 0;
    }
    //设置树目录当前样式,节点
    home.setTreeCtrl = function (i) {
        var $treeCtrl = $(this.treeCtrl);
        //0是白色 其余是蓝色
        if (i===0) {
            $treeCtrl.removeClass('even');
        } else {
            $treeCtrl.addClass('even');
        }
        $treeCtrl.find('ul').find('li:eq(' + i + ')').addClass('active').siblings().removeClass('active');
    }
    var resize = function () {
        home.mods = [];
        var h = $(window).height(),
            $mod1 = $('.lt.lt-hd').height(h),
            $mod2 = $('.lt.lt-dbshow'),
            $mod3 = $('.lt.lt-bto').height(h),
            $mod4 = $('.lt.lt-bottom');

        //有内边距,故未用jq的height
        $mod4[0].style.height = h + 'px';

        $mod2.children('.lt-dbckout').height(h - parseInt($('.lt-dbshow .lt-dbckin').height()));
        home.mods.push($mod1);
        home.mods.push($mod2);
        home.mods.push($mod3);
        home.mods.push($mod4);

        var h4 = $mod4.find('.lt-logos').height();
        var hlogos = $mod4.find('.lt-logos .lt-logomsg').height();
        $mod4.find('.lt-logos .lt-logomsg').css('padding-top', (h4 - hlogos) / 2 + 'px');

        if (home.curMod >= 0) {
            var t = home.mods[home.curMod].offset().top;
            $(window).scrollTop(t);
            home.setTreeCtrl(home.curMod);
        } else {
            home.setCurModByScroll();
        }
    }
    
    $(function () {
        //导航菜单
        $('.lt-menu .lt-section').hover(function () {
            $(this).addClass('active');
        }, function () {
            $(this).removeClass('active');
        });
        //选项卡
        $('.lt.lt-dbshow .lt-dbckin').on('click', '.lt-dbck', function () {
            var cur = $(this).addClass('active'),
                index = cur.index();
            cur.siblings().removeClass('active');
            cur.parent().next().children(':eq(' + index + ')').addClass('active').siblings().removeClass('active');
        });
        //向下方向的箭头
        $('.lt-hd .lt-dwg .lt-dwh').click(function () {
            home.mousewheel(0, 1);
        });
        //页面滚轮监听
        $('body').mousewheel(function (event, delt) {
            home.mousewheel(delt);
        });
        //树形目录菜单点击
        $(home.treeCtrl).on('click', 'ul li:not(.active)', function () {
            home.mousewheel(0, $(this).index());
        });

        resize();

        $(window).resize(function () {
            resize();
        });
    });
    return home;
}));