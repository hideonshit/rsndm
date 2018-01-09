<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>在线选座测试</title>
	<link rel="stylesheet" href="/css/jquery.seat-charts.css">
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<div class="seat-map">
				<div class="front-indicator">屏幕</div>
			</div>
			<div class="booking-details">
				<h3>已选中座位(<span id="container">0</span>>):</h3>
				<ul id="selected-seats"></ul>
				<p>总价: <b>$ <span id="total">0</span> </b> </p>
				<p><button class="check-button">结算</button></p>
				<div class="legend"></div>
			</div>
		</div>
	</div>
<script src="https://cdn.bootcss.com/jquery/1.8.3/jquery.min.js"></script>
<script>
	$().ready(function(){
		var $cart=$('#selected-seats');
		var $total=$('#total');
		var $counter=$('#counter');
		var sc = $('#seat-map').seatCharts({
			map:[
				'aaa__aaaa__aaa',
				'aaa__aaaa__aaa',
				'aaa__aaaa__aaa',
				'aaa__aaaa__aaa',
				'aaa__aaaa__aaa',
				'aaa__aaaa__aaa',
				'aaa__aaaa__aaa',
				'aaa__aaaa__aaa',
				'aaa__aaaa__aaa',
				'aaa__aaaa__aaa',
			],
			seats:{
				a:{
					price: 100,
					classess: 'first-class',
					category: '座位',
				}
			}
		})
	})
</script>
</body>
</html>