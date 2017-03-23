@extends('layouts.admin')
@section('content')
    <fieldset class="layui-elem-field layui-field-title">
        <legend>添加用户</legend>

        <div class="layui-field-box">
            <form class="layui-form" action="" method="POST">
                {!! csrf_field() !!}
                <div class="layui-form-item">
                    <label class="layui-form-label">用户名称</label>
                    <div class="layui-input-block" style="width:30%">
                        <input type="text" name="name"   placeholder="请输入用户名称" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">邮箱</label>
                    <div class="layui-input-inline" style="width:30%">
                        <input type="text" name="email"   placeholder="请输入邮箱" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">登录后台的账号</div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">密码</label>
                    <div class="layui-input-inline">
                        <input type="password" name="password"  placeholder="请输入密码" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">密码不能少于8个字符</div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">重复密码</label>
                    <div class="layui-input-inline">
                        <input type="password" name="password_confirmation"  placeholder="请输入重复密码" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">状态</label>
                    <div class="layui-input-block">
                        <input type="radio" name="active" value="1" title="启用" checked>
                        <input type="radio" name="active" value="0" title="禁用">

                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">权限</label>
                    <div class="layui-input-block">
                        <ul>
                            <li>
                                <input type="checkbox" name="" title="文章管理" lay-skin="primary" checked>
                                <ul style="margin-left:50px;">
                                    <li style="float:left;"><input type="checkbox" name="" title="写作a" lay-skin="primary" checked></li>
                                    <li style="float:left;"><input type="checkbox" name="" title="写作a" lay-skin="primary" checked></li>
                                    <li style="float:left;"><input type="checkbox" name="" title="写作a" lay-skin="primary" checked></li>
                                </ul>
                                <div style="clear: both;"></div>
                            </li>
                            <li>
                                <input type="checkbox" name="" title="文章管理" lay-skin="primary" checked>
                                <ul style="margin-left:50px;">
                                    <li style="float:left;"><input type="checkbox" name="" title="写作a" lay-skin="primary" checked></li>
                                    <li style="float:left;"><input type="checkbox" name="" title="写作a" lay-skin="primary" checked></li>
                                    <li style="float:left;"><input type="checkbox" name="" title="写作a" lay-skin="primary" checked></li>
                                    <li style="float:left;"><input type="checkbox" name="" title="写作a" lay-skin="primary" checked></li>
                                    <li style="float:left;"><input type="checkbox" name="" title="写作a" lay-skin="primary" checked></li>
                                </ul>
                                <div style="clear: both;"></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <button class="layui-btn" lay-submit lay-filter="go">立即提交</button>
                        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                    </div>
                </div>
            </form>
        </div>
    </fieldset>

@endsection

@section('script')
    <script>
        //Demo
        layui.use('form', function(){
            var form = layui.form();

            //监听提交
            form.on('submit(formDemo)', function(data){
                layer.msg(JSON.stringify(data.field));
                return false;
            });
        });
    </script>
@endsection