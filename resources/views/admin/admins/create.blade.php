@extends('layouts.admin')
@section('content')

    <fieldset class="layui-elem-field layui-field-title">
        <legend>添加管理员</legend>
        <div class="table-top-button-box">
            <a href="javascript:history.back()" class="layui-btn layui-btn-small">
                <i class="layui-icon">&#xe62d;</i> 返回
            </a>
        </div>
        <div class="layui-field-box">
            <form class="layui-form" action="{{ route('admins.store') }}" method="POST">
                {!! csrf_field() !!}
                <div class="layui-form-item">
                    <label class="layui-form-label">选择角色</label>
                    <div class="layui-input-inline" style="width:30%">
                        <select name="role">
                            <option value="0" selected>请选择角色</option>
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">管理员昵称</label>
                    <div class="layui-input-block" style="width:30%">
                        <input type="text" name="nickname"   placeholder="请输入管理员名称" autocomplete="off" class="layui-input">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">登录邮箱</label>
                    <div class="layui-input-inline" style="width:30%">
                        <input type="text" name="name"   placeholder="请输入管理员登录邮箱" autocomplete="off" class="layui-input">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">密码</label>
                    <div class="layui-input-inline" style="width:30%">
                        <input type="password" name="password"   placeholder="密码" autocomplete="off" class="layui-input">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">确认密码</label>
                    <div class="layui-input-inline" style="width:30%">
                        <input type="password" name="confirm_password"   placeholder="确认密码" autocomplete="off" class="layui-input">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">状态</label>
                    <div class="layui-input-inline">
                        <input type="radio" name="active" value="1" title="开启" checked="">
                        <input type="radio" name="active" value="0" title="禁用">
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
        layui.use('form', function(){
            var form = layui.form();
            //监听提交
            form.on('submit(go)', function(data){
                //layer.msg(JSON.stringify(data.field));
                if (!confirm('确定要添加此内容吗?')) {
                    return false;
                }
            });
        });
    </script>
@endsection