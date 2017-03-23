@extends('layouts.admin')
@section('content')

    <fieldset class="layui-elem-field layui-field-title">
        <legend>添加菜单</legend>
        <div class="table-top-button-box">
            <a href="javascript:history.back()" class="layui-btn layui-btn-small">
                <i class="layui-icon">&#xe62d;</i> 返回
            </a>
        </div>
        <div class="layui-field-box">
            <form class="layui-form" action="{{ route('menus.store') }}" method="POST">
                {!! csrf_field() !!}
                <div class="layui-form-item">
                    <label class="layui-form-label">选择父类</label>
                    <div class="layui-input-inline" style="width:30%">
                        <select name="pid">
                            <option value="0" selected>顶级父类</option>

                        </select>
                    </div>
                    <div class="layui-form-mid layui-word-aux">菜单只允许2级</div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">菜单名称</label>
                    <div class="layui-input-block" style="width:30%">
                        <input type="text" name="display_name"   placeholder="请输入菜单名称" autocomplete="off" class="layui-input">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">控制器标识</label>
                    <div class="layui-input-inline" style="width:30%">
                        <input type="text" name="name"   placeholder="请输入控制器名称" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">不可重复</div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">路由名称</label>
                    <div class="layui-input-inline" style="width:30%">
                        <input type="text" name="name"   placeholder="请输入路由名称" autocomplete="off" class="layui-input">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">排序</label>
                    <div class="layui-input-inline">
                        <input type="text" name="sort" autocomplete="off" class="layui-input" value="0">
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
            form.verify({
                name: function(value){
                    if(!new RegExp("^[a-zA-Z0-9_\u4e00-\u9fa5\\s·]+$").test(value)){
                        return '用户名不能有特殊字符';
                    }
                    if(/(^\_)|(\__)|(\_+$)/.test(value)){
                        return '用户名首尾不能出现下划线\'_\'';
                    }
                    if(/^\d+\d+\d$/.test(value)){
                        return '用户名不能全为数字';
                    }
                }
                ,password: [
                    /^[\S]{8,16}$/
                    ,'密码必须8到16位，且不能出现空格'
                ]
            });
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