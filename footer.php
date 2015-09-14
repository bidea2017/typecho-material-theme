	</div>
	</div>
	<footer>
		<div class="footer-bottom">
			<div class="container">
				<div class="pull-left copyright">
				Copyright &copy; 2015&nbsp;<?php $this->options->title(); ?>&nbsp;&nbsp;
				<?php if ($this->options->cnzzCode): ?>
		        <?php $this->options->cnzzCode() ?>
		        <?php endif; ?>
				</div>
				<ul class="footer-nav pull-right">
					<li>Powered by <a href="http://typecho.org/" rel="nofollow">Typecho)))</a></li>
					<li>Optimized by <a href="http://hanc.cc">HanSon</a></li>

					<?php if($this->options->miibeian) : ?>
					<li><a href="http://www.miibeian.gov.cn" rel="nofollow"><?php echo $this->options->miibeian; ?></a></li>
					<?php endif; ?>

					<?php if ( !empty($this->options->misc) && in_array('ShowLoadTime', $this->options->misc) ) : ?>
					<li>加载耗时：<?php echo timer_stop(), ' s'; ?></li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</footer>
	<script src="https://dn-biezhi.qbox.me/jquery-2.1.4.min.js"></script>
	<script src="https://dn-biezhi.qbox.me/bootstrap.min.js"></script>
	<script src="https://dn-biezhi.qbox.me/material.min.js"></script>
	<script src="https://dn-biezhi.qbox.me/ripples.min.js"></script>
	<script src="https://dn-biezhi.qbox.me/highlight/highlight.pack.js"></script>

	<script>
      $.material.init();
      hljs.initHighlightingOnLoad();

    </script>
	</body>
</html>
