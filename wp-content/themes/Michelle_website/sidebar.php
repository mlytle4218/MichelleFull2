<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
	<div class="sidebar-module sidebar-module-inset">
		<h4><u>About</u></h4>
		<p>For the most part, I going to use this as a scratch pad where I can add things I want to remember. </p>
	</div>
	<div class="sidebar-module">
		<h4><u>Archives</u></h4>

		<ol class="list-unstyled">
			<?php wp_get_archives('type=postbypost&limit=15'); ?>
			<!-- More archive examples -->
		</ol>
	</div>
	<div class="sidebar-module">
		<h4><u>Elsewhere</u></h4>
		<ol class="list-unstyled">
			<li><a href="https://github.com/mlytle4218">GitHub</a></li>
		</ol>
	</div>
</div><!-- /.blog-sidebar -->