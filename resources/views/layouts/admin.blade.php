<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>后台管理模板</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">

    <link rel="stylesheet" href="{{ asset('iassets/plugins/layui/css/layui.css') }}" media="all" />
    <link rel="stylesheet" href="{{ asset('iassets/css/global.css') }}" media="all">
    <link rel="stylesheet" href="{{ asset('iassets') }}/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('iassets') }}/css/style.css">
</head>

<body>
<div class="layui-layout layui-layout-admin">
    <div class="layui-header header">
        <div class="layui-main">
            <div class="admin-login-box">
                <a class="logo" href="/">
                    <span>后台管理系统</span>
                </a>
            </div>
            <ul class="layui-nav admin-header-item">
                {{--<li class="layui-nav-item">--}}
                    {{--<a href="javascript:;">清除缓存</a>--}}
                {{--</li>--}}
                {{--<li class="layui-nav-item">--}}
                    {{--<a href="javascript:;">浏览网站</a>--}}
                {{--</li>--}}
                {{--<li class="layui-nav-item" id="video1">--}}
                    {{--<a href="javascript:;">视频</a>--}}
                {{--</li>--}}
                <li class="layui-nav-item">
                    <a href="javascript:;" class="admin-header-user">
                        <span>beginner</span>
                    </a>
                    <dl class="layui-nav-child">
                        <dd>
                            <a href="javascript:;"><i class="fa fa-user-circle" aria-hidden="true"></i> 个人信息</a>
                        </dd>
                        <dd>
                            <a href="javascript:;"><i class="fa fa-gear" aria-hidden="true"></i> 设置</a>
                        </dd>
                        <dd id="lock">
                            <a href="javascript:;">
                                <i class="fa fa-lock" aria-hidden="true" style="padding-right: 3px;padding-left: 1px;"></i> 锁屏 (Alt+L)
                            </a>
                        </dd>
                        <dd>
                            <a href="login.html"><i class="fa fa-sign-out" aria-hidden="true"></i> 注销</a>
                        </dd>
                    </dl>
                </li>
            </ul>
            <ul class="layui-nav admin-header-item-mobile">
                <li class="layui-nav-item">
                    <a href="login.html"><i class="fa fa-sign-out" aria-hidden="true"></i> 注销</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="layui-side layui-bg-black" id="admin-side">
        <div class="layui-side-scroll" id="admin-navbar-side" lay-filter="side">
            @inject('menu', 'Services\MenuService')
            {!! $menu->getMenus() !!}
        </div>
    </div>
    <div class="layui-body"  id="admin-body">
        <div class="layui-tab admin-nav-card layui-tab-brief" lay-filter="admin-tab">
            {{--<ul class="layui-tab-title">--}}
                {{--<li>--}}
                    {{--<i class="fa fa-dashboard" aria-hidden="true"></i>--}}
                    {{--<cite>控制面板</cite>--}}
                {{--</li>--}}
            {{--</ul>--}}
            <div class="layui-tab-content" style="min-height: 150px; padding: 10px; font-size: 12px;">
                <div class="layui-tab-item layui-show">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <div class="site-tree-mobile layui-hide">
        <i class="layui-icon">&#xe602;</i>
    </div>
    <div class="site-mobile-shade"></div>

    <!--锁屏模板 start-->
    <script type="text/template" id="lock-temp">
        <div class="admin-header-lock" id="lock-box">
            <div class="admin-header-lock-img">
                <img src="images/0.jpg"/>
            </div>
            <div class="admin-header-lock-name" id="lockUserName">beginner</div>
            <input type="text" class="admin-header-lock-input" value="输入密码解锁.." name="lockPwd" id="lockPwd" />
            <button class="layui-btn layui-btn-small" id="unlock">解锁</button>
        </div>
    </script>
    <!--锁屏模板 end -->

    <script type="text/javascript" src="{{ asset('iassets') }}/plugins/layui/layui.js"></script>
    <script src="{{ asset('iassets/js/site.js') }}"></script>
    @yield('script')
    @include('layouts.message')
</div>
</body>

</html>