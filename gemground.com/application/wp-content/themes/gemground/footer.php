	<div>
		<ul id="flow" class="span1">
			<li><a id="qq" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=721796808&site=qq&menu=yes" title="点击咨询"></a></li>
			<li><a id="backtotop" class="jqscroll"href="#home"></a></li>
		</ul>
	</div>
<footer>
	<div class="container">
		<div class="row">
			<div id="sitemap" class="span2">
				<h5>站点导航</h5><br/>
				<a href="<?php echo $homeurl; ?>cat/point">观点与方法</a><br/>
				<a href="<?php echo $homeurl; ?>cat/services">产品与服务</a><br/>
				<a href="<?php echo $homeurl; ?>cat/works">客户与案例</a><br/>
				<a href="<?php echo $homeurl; ?>cat/about">关于聚广</a><br/>
				<a href="<?php echo $homeurl; ?>cat/about#joinus">招聘信息</a><br/>
			</div>
			<div id="link" class="span2">
				<h5>合作伙伴</h5><br/>
				<a href="">万象更新</a><br/>
				<a href="">尚集 Atom</a><br/>
				<a href="">大巧有声</a><br/>
			</div>
			<div id="contactinfo" class="span8">
				<h5>联系我们</h5><br/>
				<div class="row">
					<div class="span5"><a href="http://j.map.baidu.com/Oj6_k" target="_blank"><img src="<?php echo esc_url( home_url( '/' ) ); ?>data/images/gem-map.jpg"></a><p>商务合作：<a href="mailto:service@gemground.com">service@gemground.com</a><br/>加入我们：<a href="mailto:hr@gemground.com">hr@gemground.com</a><br/>联系电话：021 61676553<br/>公司地址：上海市徐汇区柳州路399弄(甲)910<br/></p></div>
					<div class="span3"><img src="<?php echo esc_url( home_url( '/' ) ); ?>data/images/gem-qcode.jpg"><br/>扫一扫<br/>关注聚广微信公众号<br/>-<br/>关注聚广新浪微博<br/><a href="http://weibo.com/gemground" target="_blank">@聚广传播</a></div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div id="cr" class="span12">
			版权所有 / 上海聚广文化传播有限公司 / 2013
			</div>
		</div>
	</div>
</footer>

	<!-- scripts -->
    <script src="<?php bloginfo('stylesheet_directory'); ?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/gemglobal.js"></script>
<?php
if ($_SERVER['HTTP_HOST'] == 'www.gemground.com') {?>
	<script type="text/javascript" src="http://tajs.qq.com/stats?sId=26155909" charset="UTF-8"></script>
<?php
}?>

<?php // wp_footer(); ?>

  </body>
</html>
