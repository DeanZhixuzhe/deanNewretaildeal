<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>{$data.title} - {$cfg.webname}</title>
<meta name="keywords" content="{$data.keywords}" />
<meta name="description" content="{$data.description}" />
{include file="./theme/tot/mobile/meta.php"}
</head>
<body>
<!--轮播banner-->
<div id="project_basic">
	<a class="return" href="javascript:if(document.referrer.indexOf('1314theone')>=0){history.go(-1);}else{window.location='/';}"><i class="am-icon-angle-left"></i></a>

    <div class="sail">
        <div class="am-slider am-slider-c2" >
            <ul class="am-slides">
            	{$data.addon.body}
            </ul>
        </div>
        <h1>{$data.title}</h1>
        <div class="m_price"><span>￥<strong>{$data.addon.trueprice}</strong>起</span></div>
        <div class="m_tag">
        	<i class="m_tag_2">特卖</i>
        	<i>活动优惠</i>
        	<i>KTV</i>
        	<i>惊喜感人</i>
        </div>
        <div class="common_block">
        	<div class="promotionList_box">
        		<span class="promotionList_title">优惠信息</span>
        		<ul class="promotionList">
        			<li>立减优惠</li>
        			<li>支付优惠</li>
        			<li>点评返现</li>
        		</ul>
        		<span class="promotionList_num">3个</span>
        		<i class="am-icon-angle-right am-icon-sm arrow"></i>
        	</div>
        </div>
    </div>
    
	<!--点评-->
	<!-- <div class="all_comment">
		 <div class="item">
			 <span>游客点评 (95%满意度)</span>
		 </div>
		<ul>
			<li>
				<div class="comment_list">
					<div class="message">
						<img src="__STATIC/{$Think.config.template.style}/m/images/head.jpg">
						<span class="writer">心诚则灵July</span>
						<span class="date">2015/01/25</span>
						<div class="clear"></div>
					</div>
					<p>中国三大石窟之一，历史悠久，开凿经历了多个朝代断续营造达500余年之中国三大石窟之一，历史悠久!!!中国三大石窟之一，历史悠久，开凿经历了多个朝代断续营造达500余年之中国三大石窟之一，历史悠久!!!中国三大石窟之一，历史悠久，开凿经历了多个朝代断续营造达500余年之中国三大石窟之一，历史悠久!!!</p>
				</div>
			</li>
		</ul>
		<div class="more">
			<a href="/templets/tot/shop_comment.htm">查看全部评价</a>
		</div>
    </div> -->
    <div class="m_shop_nav" data-am-scrollspynav="{offsetTop: 45}" data-am-sticky>
    	<ul class="am-avg-sm-4">
    		<li><a href="#xq">详情</a></li>
    		<li><a href="#ts">特色</a></li>
    		<li><a href="#sp">视频</a></li>
    		<li><a href="#xz">预订须知</a></li>
    	</ul>
    </div>
    
    <div class="m_shopcon" id="xq">
    	<div class="title">套餐详情</div>
    	<div class="body">
    		{$data.addon.body}
    	</div>
    </div>
    <div class="m_shopcon">
    	<div class="title">套餐明细</div>
    	<div class="body">
    		<table>
    			
    		</table>
    	</div>
    </div>
    <div class="m_shopcon">
    	<div class="title">专业人员</div>
    	<div class="body crew">
    		<ul class="am-avg-sm-2">
    			<li>
    				<img src="__STATIC__/{$Think.config.template.style}/images/zyry3.png">
	    			<span>专业浪漫策划师</span>
	    			<p>专业浪漫策划师根据男女主角的爱情故事定制独一无二，专属的浪漫惊喜方案。精心定制个性化浪漫惊喜流程及细节，一对一提供相关服务咨询及建议。</p>
    			</li>
    			<li>
	    			<img src="__STATIC__/{$Think.config.template.style}/images/zyry4.png">
	    			<span>专业浪漫统筹师</span>
	    			<p>专业浪漫统筹师负责浪漫惊喜活动前的彩排工作，提供浪漫惊喜现场的管家式服务，营造浪漫惊喜氛围。她不是主持，却胜似主持。通过她的服务让你们尽情享受浪漫和祝福！</p>
	    		</li>
	    		<li>
	    			<img src="__STATIC__/{$Think.config.template.style}/images/zyry1.png">
	    			<span>专业活动督导</span>
	    			<p>为您提供现场指导意见，统筹协调音乐、灯光、道具、人员等；把控浪漫惊喜活动的各个环节，从大场景到小细节都不马虎；其他活动现场各种突发情况的灵活处理，维持浪漫活动现场秩序，保障活动的顺畅完美进行。</p>
	    		</li>
	    		<li>
	    			<img src="__STATIC__/{$Think.config.template.style}/images/zyry2.png">
	    			<span>专业AE执行</span>
	    			<p>负责浪漫惊喜前场地的测量、考察、协调；根据浪漫现场实际情况做出个性化和专业化安排；物料的前期采购，个性化物品的制作设计及现场搬运，浪漫场景搭建，求婚后现场拆场等工作，做好活动的后勤保障工作。</p>
	    		</li>
    		</ul>
    	</div>
    </div>
    <div class="m_shopcon">
    	<div class="title">服务流程</div>
    	<div class="body">
    		<img src="__STATIC__/{$Think.config.template.style}/m/images/ServiceProcess.png">
    	</div>
    </div>
    <div class="m_shopcon">
    	<div class="title">疑问解答</div>
    	<div class="body">
	    	<div id="accordion">
	    		<div class="am-panel am-panel-default">
					<div class="am-panel-hd">
						<h4 class="am-panel-title" data-am-collapse="{parent:'#accordion',target:'#do-not-say-1'}">策划一场浪漫需要多少钱？</h4>
					</div>
					<div id="do-not-say-1" class="am-panel-collapse am-collapse am-in">
						<div class="am-panel-bd">
							<p>浪漫价格是由不同的浪漫形式，不同的创意惊喜流程，以及在流程中涉及到的相关服务人员多少等等因素来综合决定的。 浪漫服务档次一般的七八千元，好一点的1-3万元，还有一种高端专属定制。所以，我们一般是您告诉我们消费档次大概在哪个范围？然后，我们策划师围绕您的预算和浪漫档案来进行策划和推荐相关的服务项目，您再根据自己的情况增加和删减相关项目，最终是由您来决定浪漫价格。</p>
						</div>
					</div>
				</div>
				<div class="am-panel am-panel-default">
					<div class="am-panel-hd">
						<h4 class="am-panel-title" data-am-collapse="{parent:'#accordion',target:'#do-not-say-2'}">浪漫的价格是看现场物料布置本身吗？</h4>
					</div>
					<div id="do-not-say-2" class="am-panel-collapse am-collapse">
						<div class="am-panel-bd">
							<p>一场完美的浪漫浪漫是否能够达到效果，除了现场物料布置本身以外，最关键在于流程的设计和统筹、现场浪漫氛围的营造！浪漫费用从大体上来说，分成四个部分：</p>
							<p>第一，浪漫现场布置费用；</p>
							<p>第二，浪漫综合策划费用；</p>
							<p>第三，浪漫工作人员费用；</p>
							<p>第四，浪漫统筹服务费用；</p>
							<p>综上所述，因为浪漫策划服务是一种无形的商品，没法提前知道商品的效果。因此，选择一家专业而富有浪漫经验的品质浪漫公司，协助您完成一生只有一次的浪漫惊喜浪漫盛典！留下一段难忘的回忆！就显得非常有必要。现场效果好，因为规范，价格也会相对合理。并且，浪漫过程也不会产生任何隐形的“消费陷阱”。</p>
						</div>
					</div>
				</div>
				<div class="am-panel am-panel-default">
					<div class="am-panel-hd">
						<h4 class="am-panel-title" data-am-collapse="{parent:'#accordion',target:'#do-not-say-3'}">有没有浪漫套餐之类的可以供我选择？</h4>
					</div>
					<div id="do-not-say-3" class="am-panel-collapse am-collapse">
						<div class="am-panel-bd">
							<p>您好，我们有三种策划形式：</p>
							<p>1.浪漫套餐：选择我司精心挑选和搭配的浪漫套餐，直接购买。</p>
							<p>2.专属定制方案：按照客户朋友预算来私人定制个性化浪漫方案，专属策划方案并报价。</p>
							<p>3.特殊形式的浪漫策划：客户朋友提出比较新奇的浪漫想法，比如大楼灯光造型浪漫、国家电台浪漫、古城堡浪漫等。这个需要具体核算公关活动费用后报价。</p>
						</div>
					</div>
				</div>
				<div class="am-panel am-panel-default">
					<div class="am-panel-hd">
						<h4 class="am-panel-title" data-am-collapse="{parent:'#accordion',target:'#do-not-say-4'}">我怎么样知道我浪漫的效果？</h4>
					</div>
					<div id="do-not-say-4" class="am-panel-collapse am-collapse">
						<div class="am-panel-bd">
							<p>效果分成三个部分：布置效果、氛围效果和男女主角的心理感受效果。</p>
							<p>一场完美的浪漫浪漫是否能够达到效果，除了现场物料布置本身以外，最关键在于流程的设计和统筹、现场浪漫氛围的营造！</p>
							<p>浪漫音乐的选择、浪漫道具的使用、亲友团的配合、外界不相关的人打扰，以及浪漫服务人员的现场专业统筹水平都会影响一场浪漫的效果和质量！</p>
							<p>因此，必须选择一家专业而富有浪漫经验的品质浪漫公司，协助您完成一生只有一次的浪漫惊喜浪漫盛典！</p>
						</div>
					</div>
				</div>
				<div class="am-panel am-panel-default">
					<div class="am-panel-hd">
						<h4 class="am-panel-title" data-am-collapse="{parent:'#accordion',target:'#do-not-say-5'}">如何选择合适的浪漫场地和浪漫形式？</h4>
					</div>
					<div id="do-not-say-5" class="am-panel-collapse am-collapse">
						<div class="am-panel-bd">
							<p>各种不同的浪漫场地和浪漫形式都是基于你们的浪漫故事和喜好来定制的。一般是浪漫方案策划好后，根据浪漫方案所安排的浪漫形式来选择符合的场地! 这才是专业而完美的浪漫步骤。</p>
							<p>比如，你们爱看电影，那浪漫场地和形式可以围绕电影院来策划。</p>
							<p>我们提供的浪漫形式有：海洋之心惊喜灯海浪漫、灯海焰火浪漫霸气浪漫、广场快闪舞蹈浪漫、电影院惊喜浪漫、餐厅/咖啡厅/包房惊喜浪漫、商场惊喜浪漫、梦幻露台浪漫浪漫、情调酒店温馨浪漫、住宅小区\新房浪漫浪漫、商场大屏幕惊喜浪漫等等浪漫惊喜浪漫形式！</p>
						</div>
					</div>
				</div>
				<div class="am-panel am-panel-default">
					<div class="am-panel-hd">
						<h4 class="am-panel-title" data-am-collapse="{parent:'#accordion',target:'#do-not-say-6'}">如何选择合适浪漫时间？</h4>
					</div>
					<div id="do-not-say-6" class="am-panel-collapse am-collapse">
						<div class="am-panel-bd">
							<p>浪漫一般会选择以下的时间点：</p>
							<p>1．周六或周日，享受一段浪漫惊喜</p>
							<p>2．每个月14号，每月14号都是浪漫情人节哦</p>
							<p>3．对彼此有特殊意义的日子: 对方生日当天、定婚前一天或前一周、领结婚证前一天或前一周、拍婚纱照前一天或过程中、见双方父母家长时等等</p>
							<p>4．七夕节、情人节、或520等浪漫的日子</p>
							<p>5．节假日：圣诞、元旦、五一、国庆等</p>
							<p>6．平时双方都有空的其他日子</p>
						</div>
					</div>
				</div>
				<div class="am-panel am-panel-default">
					<div class="am-panel-hd">
						<h4 class="am-panel-title" data-am-collapse="{parent:'#accordion',target:'#do-not-say-7'}">为什么需要提前预定,要提前多久预定？</h4>
					</div>
					<div id="do-not-say-7" class="am-panel-collapse am-collapse">
						<div class="am-panel-bd">
							<p>如上所述，大多数男主角都会选择在一些特殊的浪漫时间浪漫。为了保证客户朋友的浪漫浪漫效果，我们一个城市一天最多只接5场浪漫。</p>
							<p>一般提前1-2个月，越早越好，原因有三：</p>
							<p>1．定得越早，策划越充分，效果越好，价格也会相对便宜一些。</p>
							<p>2．浪漫的前期准备环节非常复杂，我们需要给您精心制作表白视频，策划方案，采购物料，协调场地，安排人员，制作和设计相关专属定制浪漫道具，相关外部资源的公关协调等等复杂而繁琐的事情</p>
							<p>3．如果您告诉一个女生，您为了向她浪漫，提前三个月或半年就开始为她准备这场浪漫。和您告诉她，您花了十几天或一个月来为她准备浪漫，哪个更让她感动？</p>
						</div>
					</div>
				</div>
	    	</div>
			
    	</div>
    </div>
	
	
    <div class="foot_h"></div>
    <div id="buy_cart">
    	<div class="wxsb">
			<p>微信中长按图片识别二维码</p>
			<img src="__STATIC/{$Think.config.template.style}/images/wechat@linda_1.jpg">
			<p>或者复制微信号加好友</p>
			<span>theonelangman</span>
		</div>
        <ul class="am-g">
        	<li class="am-u-sm-2"><a class="call" href="mqqwpa://im/chat?chat_type=wpa&uin=3547038718&version=1&src_type=web&web_src=1314theone.com" rel="nofollow"> <img src="__STATIC__/{$Think.config.template.style}/m/images/qq.png"><p>客服咨询</p></a></li>
			<li class="am-u-sm-2"><a class="call" href="tel:17353237074" rel="nofollow"> <img src="__STATIC__/{$Think.config.template.style}/m/images/call.png"><p>电话咨询</p></a></li>
            <li class="am-u-sm-2"><a id="weixin" class="call weixin js-modal-open" href="javascript: void(0);" rel="nofollow"> <img src="__STATIC__/{$Think.config.template.style}/m/images/weixin.png"><p>微信咨询</p></a></li>
            <li class="am-u-sm-6">
            <form action="http://www.1314theone.com{:url('index/Cashier/index')}" class="payform" method="get" name="payment" id="payment">
            	<input type="hidden" name="title" value="{$data.title}">
				<input type="hidden" name="litpic" value="{$data.litpic}">
				<input type="hidden" name="trueprice" value="{$data.addon.trueprice}">
				<input type="hidden" name="showurl" value="{$cfg.domain}{$data.arctype.arcurl}">
			{elt name="$data.addon.trueprice" value="3000"}
				<input type="submit" class="cur" value ="立即购买">
			{else/}
				<a class="cur" rel="nofollow" href="mqqwpa://im/chat?chat_type=wpa&uin=3547038718&version=1&src_type=web&web_src=1314theone.com" >立即预定</a>
			{/elt}
			</form>
			</li>
        </ul>
        <div class="clear"></div>
    </div>

</div>
<script type="text/javascript" src="__STATIC/{$Think.config.template.style}/m/js/jquery.Spinner.js"></script>
<!--轮播-->

<script>
    $(function() {
        $('.am-slider').flexslider({
            controlNav: true,               // Boolean: 是否创建控制点
            directionNav: false,             // Boolean: 是否创建上/下一个按钮（previous/next）
            touch: true,                    // Boolean: 允许触摸屏触摸滑动滑块
        });

        $('#weixin').click(function(e){
        	if ($('.wxsb').hasClass('wxshow')) {
        		$('.wxsb').removeClass('wxshow');
        	}else {
        		$('.wxsb').addClass('wxshow');
        	}
        	e.stopPropagation();
	    });
        $('.wxsb').click(function(e){
        	e.stopPropagation();
        });
        $('body').click(function() {
        	$('.wxsb').removeClass('wxshow');
        });
    });
</script>
<!--门票数量-->
<script type="text/javascript">
    $(function(){
        $("#a").Spinner({value:868, min:10, len:3, max:1000});
        $("#b").Spinner({value:99});
        $("#c").Spinner({value:66});
        $("#d").Spinner();
    });
</script>

</body>
</html>
