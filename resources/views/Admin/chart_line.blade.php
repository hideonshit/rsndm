@extends('Admin/layouts')
@section('head')
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>后台模板</title>
	<link rel="stylesheet" href="{{ URL::asset('assets/css/amazeui.css') }}" />
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ URL::asset('assets/css/core.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('assets/css/menu.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('assets/css/index.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('assets/css/admin.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('assets/css/page/typography.css') }}" />
</head>
@endsection
@section('title')
折线图
@endsection
@section('content')
<div class="content">
	<div class="am-g">
		<div class="am-u-md-6">
			<!-- 折线图堆叠 -->
			<div class="card-box">
				<div id="Stack" style="width: 100%;height: 250px;">
				</div>
			</div>
		</div>
		<div class="am-u-md-6">
			<!-- 堆叠区域图  -->
			<div class="card-box">
				<div id="area" style="width: 100%;height: 250px;">
				</div>
			</div>
		</div>
	</div>
	<div class="am-g">
		<div class="am-u-md-6">
			<!-- Step Line -->
			<div class="card-box">
				<div id="step" style="width: 100%;height: 250px;">
				</div>
			</div>
		</div>
		<div class="am-u-md-6">
			<!-- 大数据面积图  -->
			<div class="card-box">
				<div id="shuju" style="width: 100%;height: 250px;">
				</div>
			</div>
		</div>
	</div>
	<div class="am-g">
		<div class="am-u-md-12">
			<!-- 动态数据+时间坐标轴 -->
			<div class="card-box">
				<div id="trends" style="width: 100%;height: 300px;">
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('foot')
<script type="text/javascript" src="{{ URL::asset('assets/js/jquery-2.1.0.js') }}" ></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/amazeui.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/app.js') }}" ></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/blockUI.js') }}" ></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/charts/echarts.min.js') }}" ></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/charts/LineChart.js') }}" ></script>
@endsection
