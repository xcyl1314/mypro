<div class="page-title">
				
				<div class="title-env">
					<h1 class="title">范围选择器</h1>
					<p class="description">数据可视化部件为您的统计</p>
				</div>
				
					<div class="breadcrumb-env">
					
								<ol class="breadcrumb bc-1">
									<li>
							<a href="dashboard-1.html"><i class="fa-home"></i>首页</a>
						</li>
								<li>
						
										<a href="charts-main.html">图表</a>
								</li>
							<li class="active">
						
										<strong>图的变种</strong>
								</li>
								</ol>
								
				</div>
					
			</div>
			
			<div class="row">
				<div class="col-sm-12">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">范围选择器</h3>
							<div class="panel-options">
								<a href="#" data-toggle="panel">
									<span class="collapse-icon">&ndash;</span>
									<span class="expand-icon">+</span>
								</a>
								<a href="#" data-toggle="remove">
									&times;
								</a>
							</div>
						</div>
						<div class="panel-body">	
							<script type="text/javascript">
								jQuery(document).ready(function($)
								{
									$("#range-1").dxRangeSelector({
										margin: {
											top: 50
										},
										scale: {
											minorTickInterval: "day",
											majorTickInterval: {
												days: 7
											}
										},
										size: {
											height: 310
										},
										dataSource: [
											{ t: new Date(2011, 11, 22), costs: 19, income: 18 },
											{ t: new Date(2011, 11, 29), costs: 27, income: 12 },
											{ t: new Date(2012, 0, 5), costs: 30, income: 5 },
											{ t: new Date(2012, 0, 12), costs: 26, income: 6 },
											{ t: new Date(2012, 0, 19), costs: 18, income: 10 },
											{ t: new Date(2012, 0, 26), costs: 15, income: 15 },
											{ t: new Date(2012, 1, 2), costs: 14, income: 21 },
											{ t: new Date(2012, 1, 9), costs: 14, income: 25 }
										],
										chart: {
											series: [
												{ argumentField: "t", valueField: "costs", color: "#7c38bc" },
												{ argumentField: "t", valueField: "income", color: "#4fcdfc" }
											],
											valueAxis: {
												min: 0
											}
										},
										selectedRange: {
											startValue: new Date(2011, 11, 25),
											endValue: new Date(2012, 0, 1)
										},
										selectedRangeChanged: function(e)
										{
											$("#range-1-selected strong").html(e.startValue.toDateString() + ' - ' + e.endValue.toDateString());
										}
									});
			
								});
								
							</script>
							<div id="range-1" style="height: 310px; width: 100%;"></div>
							
							<div id="range-1-selected">
								选择范围:
								<strong class="text-primary">/</strong>
							</div>
						</div>
					</div>
						
				</div>
			</div>
			
			
			<div class="row">
				<div class="col-sm-12">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">范围选择器例二</h3>
							<div class="panel-options">
								<a href="#" data-toggle="panel">
									<span class="collapse-icon">&ndash;</span>
									<span class="expand-icon">+</span>
								</a>
								<a href="#" data-toggle="remove">
									&times;
								</a>
							</div>
						</div>
						<div class="panel-body">	
							<script type="text/javascript">
								jQuery(document).ready(function($)
								{
									var employees = [
										{ BirthYear: 1948 },
										{ BirthYear: 1952 },
										{ BirthYear: 1963 },
										{ BirthYear: 1937 },
										{ BirthYear: 1955 },
										{ BirthYear: 1963 },
										{ BirthYear: 1960 },
										{ BirthYear: 1958 },
										{ BirthYear: 1966 }
									];
									
									$("#range-2").dxRangeSelector({
										margin: {
											top: 20
										},
										size: {
											height: 140
										},
										dataSource: employees,
										dataSourceField: "BirthYear",
										behavior: {
											callSelectedRangeChanged: "onMoving"
										},
										selectedRangeChanged: function (e) {
											
											$("#range-2-selected").html('<br />Start: ' + e.startValue + ' End: ' + e.endValue);
										}
									});
									
			
								});
								
							</script>
							<div id="range-2" style="height: 140px; width: 100%;"></div>
							<strong id="range-2-selected" class="text-success"></strong>
							
						</div>
					</div>
						
				</div>
			</div>