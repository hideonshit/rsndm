@extends('Admin/layouts')
@section('head')
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>后台模板</title>
	<link rel="stylesheet" href="{{ URL::asset('assets/css/amazeui.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('assets/css/core.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('assets/css/menu.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('assets/css/index.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('assets/css/admin.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('assets/css/page/typography.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('assets/css/page/form.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('assets/css/component.css') }}" />
</head>
@endsection
@section('title')
影院列表
@endsection
@section('content')
<div class="content">
  <div class="card-box">
    <!-- Row start -->
    <div class="am-g">
      <div class="am-u-sm-12 am-u-md-6">
        <div class="am-btn-toolbar">
          <div class="am-btn-group am-btn-group-xs">
            <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 新增</button>
            <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 保存</button>
            <button type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span> 审核</button>
            <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button>
          </div>
        </div>
      </div>
      <div class="am-u-sm-12 am-u-md-3">
        <div class="am-input-group am-input-group-sm">
          <input type="text" class="am-form-field">
          <span class="am-input-group-btn">
          <button class="am-btn am-btn-default" type="button">搜索</button>
          </span>
        </div>
      </div>
    </div>
    <!-- Row end -->
    <!-- Row start -->
    <div class="am-g">
      <div class="am-u-sm-12">
        <form class="am-form">
          <table class="am-table am-table-striped am-table-hover table-main">
          <thead>
          <tr>
            <th class="table-check">
              <input type="checkbox"/>
            </th>
            <th class="table-id">ID</th>
            <th class="table-title">标题</th>
            <th class="table-type">类别</th>
            <th class="table-author am-hide-sm-only">作者</th>
            <th class="table-date am-hide-sm-only">修改日期</th>
            <th class="table-set">操作</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td><input type="checkbox"/> </td>
            <td>1</td>
            <td><a href="#">Business management</a></td>
            <td>default</td>
            <td class="am-hide-sm-only">测试1号</td>
            <td class="am-hide-sm-only">2014年9月4日 7:28:47 </td>
            <td>
              <div class="am-btn-toolbar">
                <div class="am-btn-group am-btn-group-xs">
                  <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                  <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button>
                  <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                </div>
              </div>
            </td>
          </tr>

          </tbody>
          </table>
          <div class="am-cf">
              共 15 条记录
            <div class="am-fr">
              <ul class="am-pagination">
                <li class="am-disabled"><a href="#">«</a></li>
                <li class="am-active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div>
          </div>
          <hr/>
          <p>
            注：.....
          </p>
        </form>
      </div>
    </div>
    <!-- Row end -->
  </div>
</div>
@endsection

@section('foot')
<script type="text/javascript" src="{{ URL::asset('assets/js/jquery-2.1.0.js') }}" ></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/amazeui.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/app.js') }}" ></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/blockUI.js') }}" ></script>
@endsection