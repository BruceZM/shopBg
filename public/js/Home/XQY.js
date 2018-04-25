
$(function(){
	
//--------------------------------------------------放大镜
	(function(){
		$('#box1').mousemove(function(ev){
			$('#box2').show();
			var l = ev.pageX - $('#box1').position().left - $('#box1 span').outerWidth()/2;
			var t = ev.pageY - $('#box1').position().top - $('#box1 span').outerHeight()/2;
			console.log(ev.pageX - $('#box1').position().left,$('#box1 span').outerWidth()/2,l,t)
			//if(l>)
			if(l<0)l=0;
			if(t<0)t=0;
			if(l>$('#box1').width()-$('#box1 span').outerWidth())
			l=$('#box1').width()-$('#box1 span').outerWidth()
			
			if(t>$('#box1').height()-$('#box1 span').outerHeight())
			t=$('#box1').height()-$('#box1 span').outerHeight()
			$('#box1 span').show().css({'left':l,'top':t})
			
			$('#box2 img').css({'left':-l*2,'top':-t*2})
		})
		$('#box1').mouseleave(function(){
			$('#box1 span').hide();
			$('#box2').hide();
			
		})
	})();
	
//-------------------------------------------------	
		$('.m_mid .color li').eq(0).click(function(){
			$(this).addClass('active').siblings().removeClass('active');
			$('.m_left #box1 img').eq(0).attr('src','images/609.jpg');
			$('.m_left #box2 img').eq(0).attr('src','images/610.jpg');
			$('.m_left .list img').eq(0).attr("src","images/5912.jpg");
			$('.m_left .list img').eq(1).attr("src","images/59e418c4N5919f041.jpg");
			$('.m_left .list img').eq(2).attr("src","images/5977.jpg");
			$('.m_left .list img').eq(3).attr("src","images/596b.jpg");						
		})
		$('.m_mid .color li').eq(1).click(function(){
			$(this).addClass('active').siblings().removeClass('active');
			$('.m_left #box1 img').eq(0).attr('src','images/59e418c1Na0ddea55.jpg');
			$('.m_left #box2 img').eq(0).attr('src','images/59e418c1Na0ddea55.jpg');
			$('.m_left .list img').eq(0).attr("src","images/59e418c1Na0ddea55(1).jpg");
			$('.m_left .list img').eq(1).attr("src","images/59e418c4N5919f041.jpg");
			$('.m_left .list img').eq(2).attr("src","images/59e418c6N2d9220e4.jpg");
			$('.m_left .list img').eq(3).attr("src","images/59e418bfN2bed58fb.jpg");						
		})
		$('.m_mid .size li').each(function(){
			$(this).click(function(){				
				$(this).addClass('active').siblings().removeClass('active')
			})			
		})
		$('.m_left .list li').mouseenter(function(){
			$(this).addClass('active').siblings().removeClass('active');
			var index = $(this).children().attr('src');
			$('.m_left #box1 img').eq(0).attr('src',index);
			$('.m_left #box2 img').eq(0).attr('src',index);
			
		})		
		$('.bottom .tit li').click(function(){				
			$(this).addClass('ac').siblings().removeClass('ac');
			$('.bottom .what ul').eq($(this).index()).addClass('show').siblings().removeClass('show');
		});	
		
	(function(){
		$('.amount a').each(function(){
			var num = parseInt($('.amount input').val());		
			$('.amount a').eq(0).click(function(){
				num++;
				$('.amount input:eq(0)').val(num);
			})
			$('.amount a').eq(1).click(function(){
				if(num<=0){num=1}
				num--;
				$('.amount input:eq(0)').val(num);				
			})	
		})
			
	})()
		
	
})