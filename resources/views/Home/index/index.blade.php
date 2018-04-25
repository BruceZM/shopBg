<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="/css/Home/indexstyle.css"/>
	</head>
	<script src="/js/jquery-1.11.3.min.js"></script>
	<script src="/js/Home/JQJD.js"></script>
	<script type="text/javascript">
		
		
	</script>
	<body>
		<ul id="roll_nav">
			<li><a href="##">服装鞋包</a></li>
			<li><a href="##">个护美妆</a></li>
			<li><a href="##">手机通讯</a></li>
			<li><a href="##">家用电器</a></li>
			<li><a href="##">电脑数码</a></li>
			<li><a href="##">运动健身</a></li>
			<li><a href="##">居家生活</a></li>
			<li><a href="##">母婴玩具</a></li>
			<li><a href="##">食品保健</a></li>
			<li><a href="##">图书音像</a></li>
			<li><a href="##">整车用品</a></li>
			<li><a href="##">生活服务</a></li>
		</ul>
		<div class="header clearfix">
			<div class="top">
				<div class="inner">
					<div class="map">送至：北京</div>
					<ul>
						<li><a href="##">你好，请登录</a><a href="##" class="free">免费注册</a></li>
						<li class="line"></li>
						<li><a href="##">我的订单</a></li>
						<li class="line"></li>
						<li class="white"><a href="##">我的京东<span>◇</span></a></li>
						<li class="line"></li>
						<li><a href="##">京东会员</a></li>
						<li class="line"></li>
						<li><a href="##">企业采购</a></li>
						<li class="line"></li>
						<li class="white"><a href="##"><i></i>手机京东<span>◇</span></a></li>
						<li class="line"></li>
						<li class="white"><a href="##">关注京东<span>◇</span></a></li>
						<li class="line"></li>
						<li class="white"><a href="##">客户服务<span>◇</span></a></li>
						<li class="line"></li>
						<li class="white"><a href="##">网站导航<span>◇</span></a></li>
					</ul>
				</div>
			</div>
			<div class="mid inner clearfix">
				<div class="logo"><a href="##"><img src="/images/Home/logo-201305.png"></a></div> 
				<div class="search">
					<form>
						<input type="text" placeholder="卡通手机壳" class="left"/>
						<input type="submit" value="搜索" class="right"/>
					</form>
					<ul>
						<li><a href="##" class="first">七夕礼品</a></li>
						<li><a href="##">消暑神器</a></li>
						<li><a href="##">农用物资</a></li>
						<li><a href="##">鲜花99元</a></li>
						<li><a href="##">电影京券</a></li>
						<li><a href="##">防晒喷雾</a></li>
						<li><a href="##">永生花</a></li>
						<li><a href="##">小米电脑</a></li>
						<li><a href="##">thinkpad</a></li>
					</ul>
				</div>
				<div class="my_cart">
					<a href="##">我的购物车</a>
					<i>></i>
					<div class="sum">0</div>
				</div>
			</div>
			<div class="bot inner clearfix">
				<div class="left">全部商品分类</div>
				<ul>
					<li><a href="#">服装城</a></li>
					<li><a href="#">美妆馆</a></li>
					<li><a href="#">京东超市</a></li>
					<li><a href="#">生鲜</a></li>
					<li><a href="#">全球购</a></li>
					<li><a href="#">闪购</a></li>
					<li><a href="#">团购</a></li>
					<li><a href="#">拍卖</a></li>
					<li><a href="#">金融</a></li>
				</ul>
			</div>
		</div>
		<div class="page clearfix">
			<div class="banner inner clearfix">
				<div class="nav_list">
					<div class="wrap clearfix">
						<ul>
							@foreach ($res as $k=>$v)
							<li><h3><a href="##">{{$v['name']}}</a></h3><i>></i></li>
							@endforeach
						</ul>
					</div>
					<div class="popup">																		
						@foreach ($res as $ke=>$va)
						<div class="section1 clearfix">
							<div class="left">
								<div class="brand">
									@foreach ($va['sub'] as $key=>$val)
									<a href="##" class="active">{{$val['name']}}<i>></i></a>
									@endforeach
								</div>
								<div class="menu clearfix">
									@foreach ($va['sub'] as $key=>$val)
									<dl class="clearfix">
										<dt><a href="##">{{$val['name']}}<i>></i></a></dt>
										<dd>
											@foreach ($val['sub'] as $ke=>$value)													
											<a href="##">{{$value['name']}}</a>
											@endforeach	
										</dd>
									</dl>									
									@endforeach																											
								</div>
								<div class="tags"></div>
							</div>
							<div class="right">
								<ul class="clearfix">
									<li><a href="##"><img src="/images/Home/572c0d37N055188f0.jpg"></a></li>
									<li><a href="##"><img src="/images/Home/572c0d37N055188f0.jpg"></a></li>
									<li><a href="##"><img src="/images/Home/572c0d37N055188f0.jpg"></a></li>
									<li><a href="##"><img src="/images/Home/572c0d37N055188f0.jpg"></a></li>
									<li><a href="##"><img src="/images/Home/572c0d37N055188f0.jpg"></a></li>
									<li><a href="##"><img src="/images/Home/572c0d37N055188f0.jpg"></a></li>
								</ul>
								<div class="pic0"><img src="/images/Home/577f019cN4ea29161.jpg"></div>
								<div class="pic0"><img src="/images/Home/577f019cN4ea29161.jpg"></div>
							</div>
						</div>
						@endforeach						
					</div>
				</div>
				<div class="pic">
					<ul>
						<li><a href="##"><img src="/images/Home/574c0514Ne3530f5d.jpg"></a></li>
						<li class="hide"><a href="##"><img src="/images/Home/banner2.jpg"></a></li>
						<li class="hide"><a href="##"><img src="/images/Home/banner3.jpg"></a></li>
						<li class="hide"><a href="##"><img src="/images/Home/banner4.jpg"></a></li>
						<li class="hide"><a href="##"><img src="/images/Home/banner5.jpg"></a></li>
					</ul>
					 <ol>
				        <li class="ac"></li>
				        <li></li>
				        <li></li>
				        <li></li>
				        <li></li>
				    </ol>
				    <a href="javascript:;" class="prevBtn">&laquo;</a>
				    <a href="javascript:;" class="nextBtn">&raquo;</a>
				</div>
				<div class="news">
					<div class="title">
						<div class="top">
							<h3>京东快报</h3>
							<a href="##">更多></a>
						</div>
						<div class="bot">
							<ul>
								<li><a href="##"><span>[特惠]</span>一元赢空调冰箱热水器</a></li>
								<li><a href="##"><span>[特惠]</span>【七夕特价】好礼低至9.9元！</a></li>
								<li><a href="##"><span>[特惠]</span>【七夕特价】好礼低至9.9元！</a></li>
								<li><a href="##"><span>[特惠]</span>【七夕特价】好礼低至9.9元！</a></li>
								<li><a href="##"><span>[特惠]</span>【七夕特价】好礼低至9.9元！</a></li>
							</ul>
						</div>
					</div>
					<div class="icon">						
						<ul>
							<li class="hasjump"><a href="##"><i></i><span>话费</span></a></li>
							<li class="hasjump"><a href="##"><i class="two"></i><span>机票</span></a></li>
							<li class="hasjump"><a href="##"><i class="three"></i><span>酒店</span></a></li>
							<li class="hasjump"><a href="##"><i class="four"></i><span>火车票</span></a></li>
							<li><a href="##"><i class="five"></i><span>彩票</span></a></li>
							<li><a href="##"><i class="six"></i><span>加油卡</span></a></li>
							<li><a href="##"><i class="seven"></i><span>酒店</span></a></li>
							<li><a href="##"><i class="eight"></i><span>火车票</span></a></li>
							<li><a href="##"><i class="nine"></i><span>众筹</span></a></li>
							<li><a href="##"><i class="ten"></i><span>理财</span></a></li>
							<li><a href="##"><i class="eleven"></i><span>礼品卡</span></a></li>
							<li><a href="##"><i class="twe"></i><span>白条</span></a></li>
						</ul>
						<div class="jumpout"><img src="/images/Home/a1.png"><span>x</span></div>
						<div class="jumpout"><img src="/images/Home/a2.png"><span>x</span></div>
						<div class="jumpout"><img src="/images/Home/a3.png"><span>x</span></div>
						<div class="jumpout"><img src="/images/Home/a4.png"><span>x</span></div>				
					</div>
					<a href="##"><img src="/images/Home/20171201160331.jpg"></a>
				</div>
			</div>
			<div class="recomend inner">
				<ul>
					<li class="first"><a href="##"></a></li>
					<li><a href="##"><img src="/images/Home/reco_12.jpg"></a></li>
					<li><a href="##"><img src="/images/Home/reco_14.jpg"></a></li>
					<li><a href="##"><img src="/images/Home/reco_16.jpg"></a></li>
					<li class="last"><a href="##"><img src="/images/Home/reco_18.jpg"></a></li>
				</ul>
			</div>
		</div>
		<div class="guessulike inner">
			<div class="title">
				<h3>猜你喜欢</h3>
				<div class="change"><a href="##">换一批</a></div>
			</div>
			<ul>
				<li>
					<a href="##"><img src="/images/Home/guess_26.jpg"></a>
					<div class="g_bot"><a href="##">联想(lenovo)小新310经典版 14寸超薄</a><span>¥4999</span></div>
				</li>
				<li>
					<a href="##"><img src="/images/Home/guess_27.jpg"></a>
					<div class="g_bot"><a href="##">联想(lenovo)小新310经典版 14寸超薄</a><span>¥4999</span></div>
				</li>
				<li>
					<a href="##"><img src="/images/Home/guess_28.jpg"></a>
					<div class="g_bot"><a href="##">联想(lenovo)小新310经典版 14寸超薄</a><span>¥4999</span></div>
				</li>
				<li>
					<a href="##"><img src="/images/Home/guess_29.jpg"></a>
					<div class="g_bot"><a href="##">联想(lenovo)小新310经典版 14寸超薄</a><span>¥4999</span></div>
				</li>
				<li>
					<a href="##"><img src="/images/Home/guess_30.jpg"></a>
					<div class="g_bot"><a href="##">联想(lenovo)小新310经典版 14寸超薄</a><span>¥4999</span></div>
				</li>
				<li>
					<a href="##"><img src="/images/Home/guess_31.jpg"></a>
					<div class="g_bot las"><a href="##">联想(lenovo)小新310经典版 14寸超薄</a><span>¥4999</span></div>
				</li>
			</ul>
		</div>
		<div class="quality inner">
			<h3>京东·品质生活</h3>
			<div class="q_bot">
				<div class="q_bot1">
					<div class="newfind">
						<a href="##">
							<h4>新发现</h4>
							<img src="/images/Home/soni_03.jpg">
							<div class="text">
								<h5>索尼PS VR</h5>
								<span>限时抢购</span>
								<em>给你现实的临场感</em>
							</div>
						</a>						
						<div class="bot">
							<a href="##">
								<img src="/images/Home/qual_11.jpg">
								<div class="text">
									<h5>新趋势</h5>
									<span>斯巴达极限系列</span>
									<em>芬兰手工打造</em>
								</div>
							</a>
							<a href="##" class="r">
								<img src="/images/Home/qual_13.jpg">
								<div class="text">
									<h5>限时秒杀</h5>
									<span>搞“机”看眼缘</span>
									<em>小米尊享1899</em>
								</div>
							</a>
						</div>
					</div>
					<div class="goodfind">
						<a href="##">
							<h4>好东西</h4>
							<img src="/images/Home/wat_03.jpg">
							<div class="text">
								<h5>达人推荐</h5>
								<span>暑期笔电买买买</span>
								<em>硬货直降2000</em>
							</div>
						</a>
						<a href="##" class="two">
							<img src="/images/Home/wat_09.jpg">
							<div class="text">
								<h5>发现好物</h5>
								<span>腕表还是看经典</span>
								<em>卡西欧G-shock</em>
							</div>
						</a>	
					</div>
					<div class="newfind">
						<a href="##">
							<h4>品牌街</h4>
							<img src="/images/Home/ste_05.jpg">
							<div class="text">
								<h5>小米</h5>
								<span>小米冰点价</span>
								<em>低至1999</em>
							</div>
						</a>						
						<div class="bot">
							<a href="##">
								<img src="/images/Home/ste_08.jpg">
								<div class="text">
									<h5>国际服饰</h5>
									<span>杰克琼斯</span>
									<em>5折热卖</em>
								</div>
							</a>
							<a href="##" class="r">
								<img src="/images/Home/ste_10.jpg">
								<div class="text">
									<h5>本周特卖</h5>
									<span>大牌折扣</span>
									<em>每周上新</em>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="q_bot2">
					<div class="left1">
						<ul>
							<li><a href="##"><img src="/images/Home/56b2f385N8e4eb051.jpg"></a></li>
							<li><a href="##"><img src="/images/Home/56b2f385N8e4eb051.jpg"></a></li>
							<li><a href="##"><img src="/images/Home/56b2f385N8e4eb051.jpg"></a></li>
							<li><a href="##"><img src="/images/Home/56b2f385N8e4eb051.jpg"></a></li>
							<li><a href="##"><img src="/images/Home/56b2f385N8e4eb051.jpg"></a></li>
							<li><a href="##"><img src="/images/Home/56b2f385N8e4eb051.jpg"></a></li>
							<li><a href="##" class="last"><img src="/images/Home/56b2f385N8e4eb051.jpg"></a></li>
						</ul>
					</div>
					<div class="left1 right1 ">
						<ul>
							<li><a href="##"><img src="/images/Home/56b2f385N8e4eb051.jpg"></a></li>
							<li><a href="##"><img src="/images/Home/56b2f385N8e4eb051.jpg"></a></li>
							<li><a href="##"><img src="/images/Home/56b2f385N8e4eb051.jpg"></a></li>
							<li><a href="##"><img src="/images/Home/56b2f385N8e4eb051.jpg"></a></li>
							<li><a href="##"><img src="/images/Home/56b2f385N8e4eb051.jpg"></a></li>
							<li><a href="##"><img src="/images/Home/56b2f385N8e4eb051.jpg"></a></li>
							<li><a href="##"><img src="/images/Home/56b2f385N8e4eb051.jpg"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<div class="page1 inner floor">
			<div class="title">
				<h2><span>1F</span>服装鞋包</h2>
				<ul id="changeU">
					<li><a href="##">大牌</a><i></i></li>
					<li><a href="##">男装</a><i></i></li>
					<li><a href="##">女装</a><i></i></li>
					<li><a href="##">鞋靴</a><i></i></li>
					<li><a href="##">大牌</a><i></i></li>
					<li><a href="##">大牌</a><i></i></li>
					<li><a href="##">大牌</a><i></i></li>
					<li><a href="##">大牌</a><i></i></li>
					<li><a href="##">大牌</a><i></i></li>
					<li><a href="##">大牌</a></li>
				</ul>
				
			</div>
			<div class="content show">
				<div class="side">
		        	<div class="cont">
		                <div class="pic"><a href="##"><img src="/images/Home/577926adNe7149a93.jpg"></a></div>
		                <div class="text clearfix">
		                    <ul class=" t1 clearfix">
		                        <li><a href="">男装</a></li>
		                        <li><a href="##" class="a2">女装</a></li>
		                        <li><a href="##" class="a3">内衣</a></li>
		                        <li><a href="##" class="a4">鞋靴</a></li>
		                        <li><a href="## " class="a5">箱包</a></li>
		                        <li><a href="## " class="a6">奢侈品</a></li>
		                    </ul>
		                    <ul class="t2 clearfix">
		                        <li>
		                            <a href="## " class="active">潮流女装</a>
		                            <a href="## ">丝巾</a>
		                            <a href="## ">服装城</a>
		                            <a href="## ">品质男鞋</a>
		                            <a href="## ">时尚女鞋</a>
		                            <a href="## " class="active">精品男装</a>
		                            <a href="## ">舒适睡衣</a>
		                            <a href="## ">奢侈品</a>
		                        </li>
		                        <li>
		                            <a href="## ">菩提手串</a>
		                            <a href="## " class="active">水晶手链</a>
		                            <a href="## ">时尚女包</a>
		                            <a href="## ">精品男包</a>
		                            <a href="## ">维氏手表</a>
		                            <a href="## " class="active">奢品名表</a>
		                            <a href="## ">国表经典</a>
		                            <a href="## ">潮流日表</a>
		                        </li>
		                    </ul>
		                </div>
		            </div>
		            <div class="ad_pic"><a href="## "><img src="/images/Home/8z_20.jpg"></a></div>
		       </div>
				<div class="main">
                	<ul class="m_left">
                    	<li><a href="##"><img src="/images/Home/1fmian_20.jpg"></a></li>
                    	<li class="m_pic"><a href="##"><img src="/images/Home/1fmian_23.jpg"></a></li>
                    	<li class="last"><a href="##"><img src="/images/Home/1fmian_28.jpg"></a></li>
                	</ul>
	                <ul class="m_mid">
	                    <li><a href="##"><img src="/images/Home/1fright_22.jpg"></a></li>
	                    <li><a href="##"><img src="/images/Home/1fright_30.jpg"></a></li>
	                    <li><a href="##"><img src="/images/Home/1fright_34.jpg"></a></li>
	                    <li class="last"><a href="##"><img src="/images/Home/1fright_43.jpg"></a></li>
	                </ul>
	                <ul class="m_mid">
	                    <li><a href="##"><img src="/images/Home/1fright_24.jpg"></a></li>
	                    <li><a href="##"><img src="/images/Home/1fright_31.jpg"></a></li>
	                    <li><a href="##"><img src="/images/Home/1fright_44.jpg"></a></li>
	                    <li class="back"><a href="##"><img src="/images/Home/1fright_44.jpg"></a></li>
	                </ul>
				</div>
			</div>
			<div class="content">
				<img src="/images/Home/b1.png" />
   			</div>
   			<div class="content">
				<img src="/images/Home/b5.png" />
			</div>
			<div class="content">
				<img src="/images/Home/b2.png" />
			</div>
			<div class="content">
				<img src="/images/Home/b3.png"/>
			</div>
			<div class="content">
				<img src="/images/Home/b1.png" />
   			</div>
			<div class="content">
				<div class="side">
		        	<div class="cont">
		                <div class="pic"><a href="##"><img src="/images/Home/577926adNe7149a93.jpg"></a></div>
		                <div class="text clearfix">
		                    <ul class=" t1 clearfix">
		                        <li><a href="">男装</a></li>
		                        <li><a href="##" class="a2">女装</a></li>
		                        <li><a href="##" class="a3">内衣</a></li>
		                        <li><a href="##" class="a4">鞋靴</a></li>
		                        <li><a href="## " class="a5">箱包</a></li>
		                        <li><a href="## " class="a6">奢侈品</a></li>
		                    </ul>
		                    <ul class="t2 clearfix">
		                        <li>
		                            <a href="## " class="active">潮流女装</a>
		                            <a href="## ">丝巾</a>
		                            <a href="## ">服装城</a>
		                            <a href="## ">品质男鞋</a>
		                            <a href="## ">时尚女鞋</a>
		                            <a href="## " class="active">精品男装</a>
		                            <a href="## ">舒适睡衣</a>
		                            <a href="## ">奢侈品</a>
		                        </li>
		                        <li>
		                            <a href="## ">菩提手串</a>
		                            <a href="## " class="active">水晶手链</a>
		                            <a href="## ">时尚女包</a>
		                            <a href="## ">精品男包</a>
		                            <a href="## ">维氏手表</a>
		                            <a href="## " class="active">奢品名表</a>
		                            <a href="## ">国表经典</a>
		                            <a href="## ">潮流日表</a>
		                        </li>
		                    </ul>
		                </div>
		            </div>
		            <div class="ad_pic"><a href="## "><img src="/images/Home/8z_20.jpg"></a></div>
		       </div>
				<div class="main">
                	<ul class="m_left">
                    	<li><a href="##"><img src="/images/Home/1fmian_20.jpg"></a></li>
                    	<li class="m_pic"><a href="##"><img src="/images/Home/1fmian_23.jpg"></a></li>
                    	<li class="last"><a href="##"><img src="/images/Home/1fmian_28.jpg"></a></li>
                	</ul>
	                <ul class="m_mid">
	                    <li><a href="##"><img src="/images/Home/1fright_22.jpg"></a></li>
	                    <li><a href="##"><img src="/images/Home/1fright_30.jpg"></a></li>
	                    <li><a href="##"><img src="/images/Home/1fright_34.jpg"></a></li>
	                    <li class="last"><a href="##"><img src="/images/Home/1fright_43.jpg"></a></li>
	                </ul>
	                <ul class="m_mid">
	                    <li><a href="##"><img src="/images/Home/1fright_24.jpg"></a></li>
	                    <li><a href="##"><img src="/images/Home/1fright_31.jpg"></a></li>
	                    <li><a href="##"><img src="/images/Home/1fright_44.jpg"></a></li>
	                    <li class="back"><a href="##"><img src="/images/Home/1fright_44.jpg"></a></li>
	                </ul>
				</div>
			</div>
			<div class="content">
				<img src="/images/Home/b4.png"/>
   			</div>
   			<div class="content">
				<img src="/images/Home/b5.png" />
			</div>
			<div class="content">
				<img src="/images/Home/b2.png" />
			</div>
			<div class="content">
				<img src="/images/Home/b1.png" />
   			</div>
			<ul class="icon clearfix">
				<li><a href="##"><img src="/images/Home/1ficon_53.jpg"></a></li>
				<li><a href="##"><img src="/images/Home/1ficon_55.jpg"></a></li>
				<li><a href="##"><img src="/images/Home/1ficon_55.jpg"></a></li>
				<li><a href="##"><img src="/images/Home/1ficon_55.jpg"></a></li>
				<li><a href="##"><img src="/images/Home/1ficon_55.jpg"></a></li>
				<li><a href="##"><img src="/images/Home/1ficon_55.jpg"></a></li>
				<li><a href="##"><img src="/images/Home/1ficon_55.jpg"></a></li>
				<li><a href="##"><img src="/images/Home/1ficon_55.jpg"></a></li>
				<li><a href="##"><img src="/images/Home/1ficon_55.jpg"></a></li>
				<li class="last"><a href="##"><img src="/images/Home/1ficon_53.jpg"></a></li>
			</ul>
		</div>
		<div class="page2 inner floor">
			<div class="title clearfix">
		    	<h2><span>2F</span>个护美妆</h2>
		        <ul>
		        	<li class="active"><a href="##">热门</a><i></i></li>
		        	<li><a href="##">国际大牌</a><i></i></li>
		        	<li><a href="##">国妆名品</a><i></i></li>
		        	<li><a href="##">个人护理</a><i></i></li>
		        	<li><a href="##">清洁用品</a><i></i></li>
		        	<li><a href="##">纸品湿巾</a><i></i></li>
		        	<li><a href="##">香水彩妆</a><i></i></li>
		        	<li><a href="##">热销面膜</a><i></i></li>
		        	<li><a href="##">男士精品</a></li>
		        </ul>
   			</div>
   			<div class="content">
				<div class="side">
        			<div class="cont">
		                <div class="pic"><a href="##"><img src="/images/Home/2fleft_03.jpg"></a></div>
		                <div class="text clearfix">
		                    <ul class="t1 clearfix">
		                        <li><a href="##">美妆特卖</a></li>
		                        <li><a href="##">个护清洁</a></li>
		                        <li><a href="##">美妆商城</a></li>
		                        <li><a href="##">官方直售</a></li>
		                    </ul>
		                    <ul class="t2 clearfix">
		                        <li class="tone clearfix">
		                            <a href="##">精致型男部分2件5折<i>></i></a>
		                            <a href="##">京东甄选礼盒<i>></i></a>
		                        </li>
		                        <li class="ttwo">
		                            <a href="##" class="active">国际馆</a>
		                            <a href="##">面膜馆</a>
		                            <a href="##">全球购馆</a>
		                            <a href="##">洗护馆</a>
		                            <a href="##" class="active">清洁馆</a>
		                            <a href="##">纸品馆</a>
		                        </li>
		                    </ul>
		                </div>
            		</div>
        		</div>
				<div class="main">
	                <ul class="m_left">
	                    <li><a href="##"><img src="/images/Home/2fmain_04.jpg"></a></li>
	                    <li class="last"><a href="##"><img src="/images/Home/2fmain_11.jpg"></a></li>
	                </ul>
	                <ul class="m_right">
	                    <li><a href="##"><img src="/images/Home/2fmain_05.jpg"></a></li>
	                    <li class="last"><a href="##"><img src="/images/Home/2fmain_16.jpg"></a></li>
	                </ul>
	                <ul class="m_right">
	                    <li><a href="##"><img src="/images/Home/2fmain_07.jpg"></a></li>
	                    <li class="last"><a href="##"><img src="/images/Home/2fmain_17.jpg"></a></li>
	                </ul>
	                <ul class="m_right">
	                    <li><a href="##"><img src="/images/Home/2fmain_09.jpg"></a></li>
	                    <li class="last"><a href="##"><img src="/images/Home/2fmain_18.jpg"></a></li>
	                </ul>
            	</div>
   			</div>
   			<ul class="icon clearfix">
		    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
		    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
		    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
		    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
		    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
		    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
		    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
		    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
		    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
		    	<li class="last"><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
		    </ul>
		</div>	
		<div class="page3 inner clearfix floor">
			<div class="ttitle">
				<h2><span>3F</span>手机通讯</h2>
				<ul>
					<li class="active"><a href="##">热门</a><i></i></li>
					<li><a href="##">品质优选</a><i></i></li>
					<li><a href="##">新机尝鲜</a><i></i></li>
					<li><a href="##">高性价比</a><i></i></li>
					<li><a href="##">口碑推荐</a><i></i></li>
					<li><a href="##">合约机</a><i></i></li>
					<li><a href="##">手机卡</a><i></i></li>
					<li><a href="##">店铺精选</a><i></i></li>
					<li><a href="##">手机配件</a></li>
				</ul>
			</div>
			<div class="page3_mid clearfix">
				<div class="page3_inner_left">
					<img src="/images/Home/57e9dff5N6124e1fa.jpg"/>
					<div class="left_top">
						<a href="##">手机</a>
						<a class="two" href="##">营业厅</a>
						<a class="three" href="##">配件</a>
					</div>
					<div class="left_bot clearfix">
						<ul class="ul_top clearfix">
							<li><a href="##">中兴A1直降50<i>></i></a></li>
							<li><a href="##">10元抢1G流量<i>></i></a></li>
							<li><a href="##">新机一夏 搞定酷暑<i>></i></a></li>
							<li><a href="##">购两件享5折<i>></i></a></li>
						</ul>
						<ul class="ul_bot clearfix">
							<li>
								<a href="##">手机通讯</a>
								<a class="active" href="##">以旧换新</a>
								<a href="##">玩3C频道</a>
								<a href="##">指纹识别</a>
								<a class="active" href="##">双卡双待</a>
								<a href="##">老人机</a>
								<a href="##">高清屏</a>
								<a href="##">金属机身</a>
							</li>
							<li>
								<a href="##">精品特惠</a>
								<a href="##">宽带</a>
								<a href="##">享受特惠</a>
								<a class="active" href="##">4G套餐</a>
								<a href="##">数据线</a>
								<a href="##">移动电源</a>
								<a class="active" href="##">低至五折</a>
								<a href="##">自营配件</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="page3_inner_right clearfix">
					<div class="inner_left">
						<a class="top" href="##"><img src="/images/Home/page3_right_03.jpg"/></a>
						<a class="bot" href="##"><img src="/images/Home/page3_right_18.jpg"/></a>
						<a class="bot" href="##"><img src="/images/Home/page3_right_20.jpg"/></a>
					</div>
					<div class="inner_right">
						<a class="top" href="##"><img src="/images/Home/page3_right_05.jpg"/></a>
						<a class="top" href="##"><img src="/images/Home/page3_right_07.jpg"/></a>
						<a class="top" href="##"><img src="/images/Home/page3_right_11.jpg"/></a>
						<a class="top" href="##"><img src="/images/Home/page3_right_12.jpg"/></a>
						<a class="bot" href="##"><img src="/images/Home/page3_right_16.jpg"/></a>
						<a class="bot" href="##"><img src="/images/Home/page3_right_17.jpg"/></a>
					</div>
				</div>
			</div>
			<div class="iicon">
				<ul>
					<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li class="last"><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			</div>
		</div>

		<div class="page4 page3 inner clearfix floor">
			<div class="ttitle clearfix">
				<h2><span>4F</span>家用电器</h2>
				<ul id="page_nav" class="page_nav">
					<li class="active"><a href="##">大牌</a><i></i></li>
					<li><a href="##">大家电</a><i></i></li>
					<li><a href="##">生活电器</a><i></i></li>
					<li><a href="##">厨房电器</a><i></i></li>
					<li><a href="##">个护健康</a><i></i></li>
					<li><a href="##">应季电器</a><i></i></li>
					<li><a href="##">空净/净水</a><i></i></li>
					<li><a href="##">新奇特</a><i></i></li>
					<li><a href="##">高端电器</a></li>
				</ul>
			</div>
			<div class="page3_mid clearfix">
				<div class="page3_inner_left">
					<img src="/images/Home/page457f061b7N4b14cd0e.jpg"/>
					<div class="left_top page4_left_top">
						<ul>
							<li><a href="##">家电城</a></li>
							<li><a class="differ" href="##">家电服务</a></li>
						</ul>
					</div>
					<div class="left_bot clearfix">
						<ul class="ul_top clearfix">
							<li><a href="##">中兴A1直降50<i>></i></a></li>
							<li><a href="##">10元抢1G流量<i>></i></a></li>
							<li><a href="##">新机一夏 搞定酷暑<i>></i></a></li>
							<li><a href="##">购两件享5折<i>></i></a></li>
						</ul>
						<ul class="ul_bot clearfix">
							<li>
								<a href="##">手机通讯</a>
								<a class="active" href="##">以旧换新</a>
								<a href="##">玩3C频道</a>
								<a href="##">指纹识别</a>
								<a class="active" href="##">双卡双待</a>
								<a href="##">老人机</a>
								<a href="##">高清屏</a>
								<a href="##">金属机身</a>
							</li>
							<li>
								<a href="##">精品特惠</a>
								<a href="##">宽带</a>
								<a href="##">享受特惠</a>
								<a class="active" href="##">4G套餐</a>
								<a href="##">数据线</a>
								<a href="##">移动电源</a>
								<a class="active" href="##">低至五折</a>
								<a href="##">自营配件</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="page3_inner_right clearfix">
					<div class="inner_left">
						<a class="top" href="##"><img src="/images/Home/page41111111111111111.jpg"/></a>
						<a class="bot" href="##"><img src="/images/Home/page4222222222222222222.jpg"/></a>
						<a class="bot" href="##"><img src="/images/Home/page433333333333333333.jpg"/></a>
					</div>
					<div class="inner_right">
						<a class="top" href="##"><img src="/images/Home/page4444444444444.jpg"/></a>
						<a class="top" href="##"><img src="/images/Home/page45555555555555555555.jpg"/></a>
						<a class="top" href="##"><img src="/images/Home/page4666666666666.jpg"/></a>
						<a class="top" href="##"><img src="/images/Home/page4777777777777777777.jpg"/></a>
						<a class="bot" href="##"><img src="/images/Home/page48888888888888888.jpg"/></a>
						<a class="bot" href="##"><img src="/images/Home/page49999999999999999.jpg"/></a>
					</div>
				</div>
			</div>
			<div class="icon">
				<ul class="icon clearfix">
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li class="last"><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    </ul>
			</div>
		</div>
		
		<div class="page5 page3 inner clearfix floor">
			<div class="ttitle clearfix">
				<h2><span>5F</span>电脑数码</h2>
				<ul id="page_nav" class="page_nav">
					<li class="active"><a href="##">热门</a><i></i></li>
					<li><a href="##">电脑/平板</a><i></i></li>
					<li><a href="##">潮流影音</a><i></i></li>
					<li><a href="##">智能外设</a><i></i></li>
					<li><a href="##">DIY硬件</a><i></i></li>
					<li><a href="##">电竞游戏</a><i></i></li>
					<li><a href="##">办公/网络</a><i></i></li>
					<li><a href="##">文具电教</a><i></i></li>
					<li><a href="##">精选配件</a></li>
				</ul>
			</div>
			<div class="page3_mid clearfix">
				<div class="page3_inner_left">
					<img src="/images/Home/page511111111111111111.jpg"/>
					<div class="left_top">
						<a href="##">手机</a>
						<a class="two" href="##">营业厅</a>
						<a class="three" href="##">配件</a>
					</div>
					<div class="left_bot clearfix">
						<ul class="ul_top clearfix">
							<li><a href="##">中兴A1直降50<i>></i></a></li>
							<li><a href="##">10元抢1G流量<i>></i></a></li>
							<li><a href="##">新机一夏 搞定酷暑<i>></i></a></li>
							<li><a href="##">购两件享5折<i>></i></a></li>
						</ul>
						<ul class="ul_bot clearfix">
							<li>
								<a href="##">手机通讯</a>
								<a class="active" href="##">以旧换新</a>
								<a href="##">玩3C频道</a>
								<a href="##">指纹识别</a>
								<a class="active" href="##">双卡双待</a>
								<a href="##">老人机</a>
								<a href="##">高清屏</a>
								<a href="##">金属机身</a>
							</li>
							<li>
								<a href="##">精品特惠</a>
								<a href="##">宽带</a>
								<a href="##">享受特惠</a>
								<a class="active" href="##">4G套餐</a>
								<a href="##">数据线</a>
								<a href="##">移动电源</a>
								<a class="active" href="##">低至五折</a>
								<a href="##">自营配件</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="page3_inner_right clearfix">
					<div class="inner_left">
						<a class="top" href="##"><img src="/images/Home/page5222222222222222222222.jpg"/></a>
						<a class="bot" href="##"><img src="/images/Home/page5333333333333333333.jpg"/></a>
						<a class="bot" href="##"><img src="/images/Home/page5444444444444444.jpg"/></a>
					</div>
					<div class="inner_right">
						<a class="top" href="##"><img src="/images/Home/page55555555555555555.jpg"/></a>
						<a class="top" href="##"><img src="/images/Home/page5666666666666666.jpg"/></a>
						<a class="top" href="##"><img src="/images/Home/page577777777777777.jpg"/></a>
						<a class="top" href="##"><img src="/images/Home/page5888888888888888888888.jpg"/></a>
						<a class="bot" href="##"><img src="/images/Home/page51010101010.jpg"/></a>
						<a class="bot" href="##"><img src="/images/Home/page501111111111111.jpg"/></a>
					</div>
				</div>
			</div>
			<div class="iicon">
				<ul>
					<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li class="last"><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
				</ul>
			</div>
		</div>
		<div class="page6 page2 inner clearfix floor">
			<div class="ttitle clearfix">
				<h2><span>6F</span>运动健身</h2>
				<ul id="page_nav" class="page_nav">
					<li class="active"><a href="##">热门</a><i></i></li>
					<li><a href="##">大牌速递</a><i></i></li>
					<li><a href="##">潮牌新品</a><i></i></li>
					<li><a href="##">运动鞋服</a><i></i></li>
					<li><a href="##">健身训练</a><i></i></li>
					<li><a href="##">休闲户外</a><i></i></li>
					<li><a href="##">智能运动</a></li>
				</ul>
			</div>
			<div class="page2_mid clearfix">
				<div class="page2_left">
					<img src="/images/Home/2fff8c7e5c4.jpg"/>
					<a href="##" class="hide_a"></a>
					<div class="mid_tags">
						<a href="##">美妆特卖</a>
						<a class="two" href="##">个护清洁</a>
						<a class="three" href="##">美妆商城</a>
						<a class="four" href="##">官方直售</a>
					</div>
					<div class="bot_tags">
						<a class="a_link" href="##">精致型男 部分2件5折></a>
						<a class="a_link" href="##">京东甄选礼盒></a>
						<ul>
							<li><a class="active" href="##">国际馆</a></li>
							<li><a href="##">国妆馆</a></li>
							<li><a href="##">全球购馆</a></li>
							<li><a href="##">洗护馆</a></li>
							<li><a class="active" href="##">清洁馆</a></li>
							<li><a href="##">纸品馆</a></li>
						</ul>
					</div>
				</div>
				<div class="page6_inner_right clearfix">
					<div class="inner_left">
						<a href="##"><img src="/images/Home/57f07fedN5a648710.jpg"></a>
						<a href="##"><img src="/images/Home/57f07ffbN832ca9f2.jpg"></a>
					</div>
					<div class="inner_mid">
						<a href="##"><img src="/images/Home/57f07e60Na5b7e569.jpg"></a>
						<a class="a_under" href="##"><img src="/images/Home/57f07e6aNc265021c.jpg"></a>
					</div>
					<div class="inner_right clearfix">
						<a href="##"><img src="/images/Home/57f07ff4N1254aab7.jpg"></a>
						<a href="##"><img src="/images/Home/57ee87b7N1248b80a.jpg"></a>
						<a href="##"><img src="/images/Home/57f08003N63a55f51.jpg"></a>
						<a href="##"><img src="/images/Home/57f08009N6094bf8f.jpg"></a>
					</div>
				</div>
			</div>
			<div class="iicon">
				<ul>
					<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li class="last"><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
				</ul>
			</div>
		</div>
		<div class="page7 page2 inner clearfix floor">
			<div class="ttitle clearfix">
				<h2><span>7F</span>建材家居</h2>
				<ul id="page_nav" class="page_nav">
					<li class="active"><a href="##">热门</a><i></i></li>
					<li><a href="##">家装建材</a><i></i></li>
					<li><a href="##">品质家具</a><i></i></li>
					<li><a href="##">厨房用品</a><i></i></li>
					<li><a href="##">床上用品</a><i></i></li>
					<li><a href="##">居家百货</a><i></i></li>
					<li><a href="##">大牌名品</a><i></i></li>
					<li><a href="##">装修定制</a></li>
				</ul>
			</div>
			<div class="page2_mid clearfix">
				<div class="page2_left">
					<img src="/images/Home/57f080a9N1ced4d32.jpg">
					<a href="##" class="hide_a"></a>
					<div class="mid_tags">
						<a href="##">美妆特卖</a>
						<a class="two" href="##">个护清洁</a>
						<a class="three" href="##">美妆商城</a>
						<a class="four" href="##">官方直售</a>
					</div>
					<div class="bot_tags">
						<a class="a_link" href="##">精致型男 部分2件5折></a>
						<a class="a_link" href="##">京东甄选礼盒></a>
						<ul>
							<li><a class="active" href="##">国际馆</a></li>
							<li><a href="##">国妆馆</a></li>
							<li><a href="##">全球购馆</a></li>
							<li><a href="##">洗护馆</a></li>
							<li><a class="active" href="##">清洁馆</a></li>
							<li><a href="##">纸品馆</a></li>
						</ul>
					</div>
				</div>
				<div class="page6_inner_right clearfix">
					<div class="inner_left">
						<a href="##"><img src="/images/Home/57f07f38N7ad393b6.jpg"></a>
						<a href="##"><img src="/images/Home/57f07f4cN137952a5.jpg"></a>
					</div>
					<div class="inner_mid">
						<a href="##"><img src="/images/Home/57f07d9fN0871859f.jpg"></a>
						<a class="a_under" href="##"><img src="/images/Home/57f07daaN16b616ea.jpg"></a>
					</div>
					<div class="inner_right clearfix">
						<a href="##"><img src="/images/Home/57f13095N9bee1605.jpg"></a>
						<a href="##"><img src="/images/Home/57f07f56N4d2fb957.jpg"></a>
						<a href="##"><img src="/images/Home/57f07f5eN6e74c6a3.jpg"></a>
						<a href="##"><img src="/images/Home/57ee87f2Na1ea8206.jpg"></a>
					</div>
				</div>
			</div>
			<div class="iicon">
				<ul>
					<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li class="last"><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
				</ul>
			</div>
		</div>
		<div class="page8 page2 inner clearfix floor">
			<div class="ttitle">
				<h2><span>8F</span>母婴玩具</h2>
				<ul id="page_nav" class="page_nav">
					<li class="active"><a href="##">热门</a><i></i></li>
					<li><a href="##">奶粉辅食</a><i></i></li>
					<li><a href="##">尿裤湿巾</a><i></i></li>
					<li><a href="##">洗护喂养</a><i></i></li>
					<li><a href="##">童装童鞋</a><i></i></li>
					<li><a href="##">寝居服饰</a><i></i></li>
					<li><a href="##">妈妈专区</a><i></i></li>
					<li><a href="##">玩具乐器</a></li>
				</ul>
			</div>
			<div class="page2_mid clearfix">
				<div class="page2_left">
					<img src="/images/Home/57ef29a1N4ca6324b.jpg">
					<a href="##" class="hide_a"></a>
					<div class="mid_tags">
						<a href="##">美妆特卖</a>
						<a class="two" href="##">个护清洁</a>
						<a class="three" href="##">美妆商城</a>
						<a class="four" href="##">官方直售</a>
					</div>
					<div class="bot_tags">
						<a class="a_link" href="##">精致型男 部分2件5折></a>
						<a class="a_link" href="##">京东甄选礼盒></a>
						<ul>
							<li><a class="active" href="##">国际馆</a></li>
							<li><a href="##">国妆馆</a></li>
							<li><a href="##">全球购馆</a></li>
							<li><a href="##">洗护馆</a></li>
							<li><a class="active" href="##">清洁馆</a></li>
							<li><a href="##">纸品馆</a></li>
						</ul>
					</div>
				</div>
				<div class="page6_inner_right clearfix">
					<div class="inner_left">
						<a href="##"><img src="/images/Home/57ef2903N35313f35.jpg"></a>
						<a href="##"><img src="/images/Home/57ef3606N9bde77f7.jpg"></a>
					</div>
					<div class="inner_mid">
						<a href="##"><img src="/images/Home/57ef361aN40824cf3.jpg"></a>
						<a class="a_under" href="##"><img src="/images/Home/57ef361aN40824cf3.jpg"></a>
					</div>
					<div class="inner_right clearfix">
						<a href="##"><img src="/images/Home/57ef3606N9bde77f7.jpg"></a>
						<a href="##"><img src="/images/Home/57f07ee6Neddaffb7.jpg"></a>
						<a href="##"><img src="/images/Home/57e08d16N02fa7148.jpg"></a>
						<a href="##"><img src="/images/Home/57ef3606N9bde77f7.jpg"></a>
					</div>
				</div>
			</div>
			<div class="iicon">
				<ul>
					<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li class="last"><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
				</ul>
			</div>
		</div>
		<div class="page5 page3 inner clearfix floor">
			<div class="ttitle clearfix">
				<h2><span>9F</span>食品保健</h2>
				<ul id="page_nav" class="page_nav">
					<li class="active"><a href="##">热门</a><i></i></li>
					<li><a href="##">电脑/平板</a><i></i></li>
					<li><a href="##">潮流影音</a><i></i></li>
					<li><a href="##">智能外设</a><i></i></li>
					<li><a href="##">DIY硬件</a><i></i></li>
					<li><a href="##">电竞游戏</a><i></i></li>
					<li><a href="##">办公/网络</a><i></i></li>
					<li><a href="##">文具电教</a><i></i></li>
					<li><a href="##">精选配件</a></li>
				</ul>
			</div>
			<div class="page3_mid clearfix">
				<div class="page3_inner_left">
					<img src="/images/Home/page511111111111111111.jpg"/>
					<div class="left_top">
						<a href="##">手机</a>
						<a class="two" href="##">营业厅</a>
						<a class="three" href="##">配件</a>
					</div>
					<div class="left_bot clearfix">
						<ul class="ul_top clearfix">
							<li><a href="##">中兴A1直降50<i>></i></a></li>
							<li><a href="##">10元抢1G流量<i>></i></a></li>
							<li><a href="##">新机一夏 搞定酷暑<i>></i></a></li>
							<li><a href="##">购两件享5折<i>></i></a></li>
						</ul>
						<ul class="ul_bot clearfix">
							<li>
								<a href="##">手机通讯</a>
								<a class="active" href="##">以旧换新</a>
								<a href="##">玩3C频道</a>
								<a href="##">指纹识别</a>
								<a class="active" href="##">双卡双待</a>
								<a href="##">老人机</a>
								<a href="##">高清屏</a>
								<a href="##">金属机身</a>
							</li>
							<li>
								<a href="##">精品特惠</a>
								<a href="##">宽带</a>
								<a href="##">享受特惠</a>
								<a class="active" href="##">4G套餐</a>
								<a href="##">数据线</a>
								<a href="##">移动电源</a>
								<a class="active" href="##">低至五折</a>
								<a href="##">自营配件</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="page3_inner_right clearfix">
					<div class="inner_left">
						<a class="top" href="##"><img src="/images/Home/page5222222222222222222222.jpg"/></a>
						<a class="bot" href="##"><img src="/images/Home/page5333333333333333333.jpg"/></a>
						<a class="bot" href="##"><img src="/images/Home/page5444444444444444.jpg"/></a>
					</div>
					<div class="inner_right">
						<a class="top" href="##"><img src="/images/Home/page55555555555555555.jpg"/></a>
						<a class="top" href="##"><img src="/images/Home/page5666666666666666.jpg"/></a>
						<a class="top" href="##"><img src="/images/Home/page577777777777777.jpg"/></a>
						<a class="top" href="##"><img src="/images/Home/page5888888888888888888888.jpg"/></a>
						<a class="bot" href="##"><img src="/images/Home/page51010101010.jpg"/></a>
						<a class="bot" href="##"><img src="/images/Home/page501111111111111.jpg"/></a>
					</div>
				</div>
			</div>
			<div class="iicon">
				<ul>
					<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li class="last"><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
				</ul>
			</div>
		</div>
		<div class="page8 page2 inner clearfix floor">
			<div class="ttitle">
				<h2><span>10F</span>图书音像</h2>
				<ul id="page_nav" class="page_nav">
					<li class="active"><a href="##">热门</a><i></i></li>
					<li><a href="##">奶粉辅食</a><i></i></li>
					<li><a href="##">尿裤湿巾</a><i></i></li>
					<li><a href="##">洗护喂养</a><i></i></li>
					<li><a href="##">童装童鞋</a><i></i></li>
					<li><a href="##">寝居服饰</a><i></i></li>
					<li><a href="##">妈妈专区</a><i></i></li>
					<li><a href="##">玩具乐器</a></li>
				</ul>
			</div>
			<div class="page2_mid clearfix">
				<div class="page2_left">
					<img src="/images/Home/57ef29a1N4ca6324b.jpg">
					<a href="##" class="hide_a"></a>
					<div class="mid_tags">
						<a href="##">美妆特卖</a>
						<a class="two" href="##">个护清洁</a>
						<a class="three" href="##">美妆商城</a>
						<a class="four" href="##">官方直售</a>
					</div>
					<div class="bot_tags">
						<a class="a_link" href="##">精致型男 部分2件5折></a>
						<a class="a_link" href="##">京东甄选礼盒></a>
						<ul>
							<li><a class="active" href="##">国际馆</a></li>
							<li><a href="##">国妆馆</a></li>
							<li><a href="##">全球购馆</a></li>
							<li><a href="##">洗护馆</a></li>
							<li><a class="active" href="##">清洁馆</a></li>
							<li><a href="##">纸品馆</a></li>
						</ul>
					</div>
				</div>
				<div class="page6_inner_right clearfix">
					<div class="inner_left">
						<a href="##"><img src="/images/Home/57ef2903N35313f35.jpg"></a>
						<a href="##"><img src="/images/Home/57ef3606N9bde77f7.jpg"></a>
					</div>
					<div class="inner_mid">
						<a href="##"><img src="/images/Home/57ef361aN40824cf3.jpg"></a>
						<a class="a_under" href="##"><img src="/images/Home/57ef361aN40824cf3.jpg"></a>
					</div>
					<div class="inner_right clearfix">
						<a href="##"><img src="/images/Home/57ef3606N9bde77f7.jpg"></a>
						<a href="##"><img src="/images/Home/57f07ee6Neddaffb7.jpg"></a>
						<a href="##"><img src="/images/Home/57e08d16N02fa7148.jpg"></a>
						<a href="##"><img src="/images/Home/57ef3606N9bde77f7.jpg"></a>
					</div>
				</div>
			</div>
			<div class="iicon">
				<ul>
					<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li class="last"><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
				</ul>
			</div>
		</div>
		<div class="page6 page2 inner clearfix floor">
			<div class="ttitle clearfix">
				<h2><span>11F</span>整车用品</h2>
				<ul id="page_nav" class="page_nav">
					<li class="active"><a href="##">热门</a><i></i></li>
					<li><a href="##">大牌速递</a><i></i></li>
					<li><a href="##">潮牌新品</a><i></i></li>
					<li><a href="##">运动鞋服</a><i></i></li>
					<li><a href="##">健身训练</a><i></i></li>
					<li><a href="##">休闲户外</a><i></i></li>
					<li><a href="##">智能运动</a></li>
				</ul>
			</div>
			<div class="page2_mid clearfix">
				<div class="page2_left">
					<img src="/images/Home/2fff8c7e5c4.jpg"/>
					<a href="##" class="hide_a"></a>
					<div class="mid_tags">
						<a href="##">美妆特卖</a>
						<a class="two" href="##">个护清洁</a>
						<a class="three" href="##">美妆商城</a>
						<a class="four" href="##">官方直售</a>
					</div>
					<div class="bot_tags">
						<a class="a_link" href="##">精致型男 部分2件5折></a>
						<a class="a_link" href="##">京东甄选礼盒></a>
						<ul>
							<li><a class="active" href="##">国际馆</a></li>
							<li><a href="##">国妆馆</a></li>
							<li><a href="##">全球购馆</a></li>
							<li><a href="##">洗护馆</a></li>
							<li><a class="active" href="##">清洁馆</a></li>
							<li><a href="##">纸品馆</a></li>
						</ul>
					</div>
				</div>
				<div class="page6_inner_right clearfix">
					<div class="inner_left">
						<a href="##"><img src="/images/Home/57f07fedN5a648710.jpg"></a>
						<a href="##"><img src="/images/Home/57f07ffbN832ca9f2.jpg"></a>
					</div>
					<div class="inner_mid">
						<a href="##"><img src="/images/Home/57f07e60Na5b7e569.jpg"></a>
						<a class="a_under" href="##"><img src="/images/Home/57f07e6aNc265021c.jpg"></a>
					</div>
					<div class="inner_right clearfix">
						<a href="##"><img src="/images/Home/57f07ff4N1254aab7.jpg"></a>
						<a href="##"><img src="/images/Home/57ee87b7N1248b80a.jpg"></a>
						<a href="##"><img src="/images/Home/57f08003N63a55f51.jpg"></a>
						<a href="##"><img src="/images/Home/57f08009N6094bf8f.jpg"></a>
					</div>
				</div>
			</div>
			<div class="iicon">
				<ul>
					<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li class="last"><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
				</ul>
			</div>
		</div>
		<div class="page8 page2 inner clearfix floor">
			<div class="ttitle">
				<h2><span>12F</span>生活服务</h2>
				<ul id="page_nav" class="page_nav">
					<li class="active"><a href="##">热门</a><i></i></li>
					<li><a href="##">奶粉辅食</a><i></i></li>
					<li><a href="##">尿裤湿巾</a><i></i></li>
					<li><a href="##">洗护喂养</a><i></i></li>
					<li><a href="##">童装童鞋</a><i></i></li>
					<li><a href="##">寝居服饰</a><i></i></li>
					<li><a href="##">妈妈专区</a><i></i></li>
					<li><a href="##">玩具乐器</a></li>
				</ul>
			</div>
			<div class="page2_mid clearfix">
				<div class="page2_left">
					<img src="/images/Home/57ef29a1N4ca6324b.jpg">
					<a href="##" class="hide_a"></a>
					<div class="mid_tags">
						<a href="##">美妆特卖</a>
						<a class="two" href="##">个护清洁</a>
						<a class="three" href="##">美妆商城</a>
						<a class="four" href="##">官方直售</a>
					</div>
					<div class="bot_tags">
						<a class="a_link" href="##">精致型男 部分2件5折></a>
						<a class="a_link" href="##">京东甄选礼盒></a>
						<ul>
							<li><a class="active" href="##">国际馆</a></li>
							<li><a href="##">国妆馆</a></li>
							<li><a href="##">全球购馆</a></li>
							<li><a href="##">洗护馆</a></li>
							<li><a class="active" href="##">清洁馆</a></li>
							<li><a href="##">纸品馆</a></li>
						</ul>
					</div>
				</div>
				<div class="page6_inner_right clearfix">
					<div class="inner_left">
						<a href="##"><img src="/images/Home/57ef2903N35313f35.jpg"></a>
						<a href="##"><img src="/images/Home/57ef3606N9bde77f7.jpg"></a>
					</div>
					<div class="inner_mid">
						<a href="##"><img src="/images/Home/57ef361aN40824cf3.jpg"></a>
						<a class="a_under" href="##"><img src="/images/Home/57ef361aN40824cf3.jpg"></a>
					</div>
					<div class="inner_right clearfix">
						<a href="##"><img src="/images/Home/57ef3606N9bde77f7.jpg"></a>
						<a href="##"><img src="/images/Home/57f07ee6Neddaffb7.jpg"></a>
						<a href="##"><img src="/images/Home/57e08d16N02fa7148.jpg"></a>
						<a href="##"><img src="/images/Home/57ef3606N9bde77f7.jpg"></a>
					</div>
				</div>
			</div>
			<div class="iicon">
				<ul>
					<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
			    	<li class="last"><a href="##"><img src="/images/Home/2ficon_25.jpg"></a></li>
				</ul>
			</div>
		</div>
		<div class="bottom">
			<div class="guarantee">
				<ul class="inner">
					<li><a href="##"></a></li>
					<li><a href="##" class="two"></a></li>
					<li><a href="##" class="three"></a></li>
					<li><a href="##" class="four"></a></li>
				</ul>
			</div>
			<div class="multi_list inner">
				<dl>
					<dt>购物指南</dt>
					<dd><a href="##">购物流程</a></dd>
					<dd><a href="##">会员介绍</a></dd>
					<dd><a href="##">生活旅行/团购</a></dd>
					<dd><a href="##">常见问题</a></dd>
					<dd><a href="##">大家电</a></dd>
					<dd><a href="##">联系客服</a></dd>
				</dl>
				<dl>
					<dt>配送方式</dt>
					<dd><a href="##">上门自提</a></dd>
					<dd><a href="##">211限时达</a></dd>
					<dd><a href="##">配送服务查询</a></dd>
					<dd><a href="##">配送费收取标准</a></dd>
					<dd><a href="##">海外配送</a></dd>
				</dl>
				<dl>
					<dt>支付方式</dt>
					<dd><a href="##">货到付款</a></dd>
					<dd><a href="##">在线支付</a></dd>
					<dd><a href="##">分期付款</a></dd>
					<dd><a href="##">邮局汇款</a></dd>
					<dd><a href="##">公司转账</a></dd>
				</dl>
				<dl>
					<dt>售后服务</dt>
					<dd><a href="##">售后政策</a></dd>
					<dd><a href="##">价格保护</a></dd>
					<dd><a href="##">退款说明</a></dd>
					<dd><a href="##">返修/退还款</a></dd>
					<dd><a href="##">取消订单</a></dd>
				</dl>
				<dl class="last">
					<dt>特色服务</dt>
					<dd><a href="##">夺宝岛</a></dd>
					<dd><a href="##">DIY装机</a></dd>
					<dd><a href="##">延保服务</a></dd>
					<dd><a href="##">京东E卡</a></dd>
					<dd><a href="##">京东通信</a></dd>
					<dd><a href="##">京东JD+</a></dd>
				</dl>
				<div class="wide">
					<h3>京东自营覆盖区县</h3>
					<p>京东已向全国2649个区县提供自营配送服务，支持货到付款，pos机刷卡和售后上门服务。</p>
					<a href="##">查看详情></a>
				</div>
			</div>
			
		</div>
	</body>
</html>
