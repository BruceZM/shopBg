$(function(){
	//---------------------------------------------------------------
	//菜单移入移出事件
		(function(){
			$('.nav_list .wrap ul li').each(function(){
				_this = $(this);
				var ind = _this.index();
				_this.attr('data-index',ind);
				$(this).mouseenter(function(){
					$(this).addClass('acc');
					$('.popup').eq(0).css('display','block').show();
					$('.popup .section1').eq(ind).siblings().css('display','none');
					$('.popup .section1').eq(ind).css('display','block')
					
					$('.popup').mouseenter(function(){
						$('.nav_list .wrap ul li').eq(ind).addClass('acc').siblings().removeClass('acc');
						//_this.css('background','#FFFFFF')
						$('.popup').eq(0).css('display','block').show();
						$('.popup .section1').eq(ind).css('display','block');
						$('.popup .section1').eq(ind).siblings().css('display','none');
					})
					$('.popup').mouseleave(function(){
						$('.popup').eq(0).css('display','none');
						$('.popup .section1').css('display','none');
						$('.nav_list .wrap ul li').removeClass('acc');
						//$('.popup .section1').eq(ind).siblings().css('display','block');
						//_this.css('background','#c81623')
					})
				})
				_this.mouseleave(function(){
					$('.popup').eq(0).css('display','none');
					$('.popup .section1').eq(ind).siblings().css('display','block');
					$('.nav_list .wrap ul li').removeClass('acc');	
				})
			})
		})();
			
//----------------------------------------------------------------------------
//轮播图
		(function(){
			var li_num=$('.banner .pic ul li').size();
				var n=0;
				var aLi=$('.banner .pic ul li');				
				$('.banner .pic ol li').each(function(i){
					$(this).click(function(){
						clearInterval(timer);
						autorun();
						if(i==n)return;
						$(this).addClass('ac').siblings().removeClass('ac');
						$('.banner .pic ul li').eq(n).fadeOut();
						$('.banner .pic ul li').eq(i).fadeIn();
						n=i;
					})		
				})
				$('.prevBtn').click(function(){
					clearInterval(timer);
					autorun();
					if(n==0){n=5}
					n--;
					$('.banner .pic ol li').eq(n).addClass('ac').siblings().removeClass('ac');
					$('.banner .pic ul li').eq(n).fadeIn("slow");
					$('.banner .pic ul li').eq(n+1).fadeOut("slow");
				})
				$('.nextBtn').click(function(){
					clearInterval(timer);
					autorun();
					if(n==4){n=-1}
					n++;
					$('.banner .pic ol li').eq(n).addClass('ac').siblings().removeClass('ac');
					$('.banner .pic ul li').eq(n).fadeIn("slow");
					$('.banner .pic ul li').eq(n-1).fadeOut("slow");
				})
				var timer
				function autorun(){
					timer = setInterval(function(){
						if(n==4){n=-1};
						n++;
						
						$('.banner .pic ol li').eq(n).addClass('ac').siblings().removeClass('ac');
						$('.banner .pic ul li').eq(n).fadeIn(600);
						$('.banner .pic ul li').eq(n-1).fadeOut(600);
						
					},2000)
				}
				autorun()
				$('.banner .pic').mouseenter(function(){
					clearInterval(timer)
				})
				$('.banner .pic').mouseleave(function(){
					autorun()
				})
		})()
			
	
			
			
			
})