@extends('layouts.admin')
@section('content')

    <fieldset class="layui-elem-field layui-field-title">
        <legend>权限列表</legend>
        <div class="table-top-button-box">
            <a href="{{ route('menus.create') }}" class="layui-btn layui-btn-small">
                <i class="layui-icon">&#xe608;</i> 添加权限
            </a>
        </div>
        <div class="layui-field-box">
            <table class="layui-table">
                <colgroup>
                    <col width="100">
                    <col width="250">
                    <col width="300">
                    <col width="200">
                    <col width="55">
                    <col width="200">
                </colgroup>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>名称</th>
                    <th>标识</th>
                    <th>描述</th>
                    <th>状态</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </fieldset>

@endsection