<div class="block-border">
	<div class="block-content">
		<h1>Descarga videos</h1>
		
		<ul class="arbo with-title">
			<li>
				<a href="javascript:void(0);" class="title-picture toggle">Videos</a>
				<ul>
					<li class="close">
						<span class="toggle"></span>
						<a href="javascript:void(0);" class="folder"><span>Pack 01</span></a>
						<ul>
							<?php foreach($videos['pack01'] as $k => $v): ?>
							<li><a href="javascript:void(0);" class="document-music"><span><?=$v?></span></a></li>
							<? endforeach; ?>
						</ul>
					</li>
					<li class="close">
						<span class="toggle"></span>
						<a href="javascript:void(0);" class="folder"><span>Pack 02</span></a>
						<ul>
							<?php foreach($videos['pack02'] as $v): ?>
							<li><a href="javascript:void(0);" class="document-music"><span><?=$v?></span></a></li>
							<?php endforeach; ?>
						</ul>
					</li>
					<li class="close">
						<span class="toggle"></span>
						<a href="javascript:void(0);" class="folder"><span>Dj Olbrich</span></a>
						<ul>
							<?php foreach($videos['olbrich'] as $v): ?>
							<li><a href="javascript:void(0);" class="document-music"><span><?=$v?></span></a></li>
							<?php endforeach; ?>
						</ul>
					</li>
					<li class="close">
						<span class="toggle"></span>
						<a href="javascript:void(4);" class="folder"><span>Dj Andres</span></a>
						<ul>
							<?php foreach($videos['andres'] as $v): ?>
							<li><a href="javascript:void(0);" class="document-music"><span><?=$v?></span></a></li>
							<?php endforeach; ?>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</div>