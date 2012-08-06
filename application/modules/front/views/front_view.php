<!-- Main nav -->
<nav id="main-nav">	
	<ul class="container_12">
		<li class="home <?=($this->uri->segment(1) == "")? "current": False ?>"><a href="#" title="<?=strtoupper(lang('home'))?>"><?=lang('home')?></a>
			<ul>
				<li class="current"><a href="#" title="Dashboard"><?=lang('dashboard')?></a></li>
				<li><a href="/users/profile" title="My profile"><?=lang('my-profile')?></a></li>
				<li class="with-menu"><a href="#" title="My settings"><?=lang('my-settings')?></a>
					<div class="menu">
						<img src="/assets/images/menu-open-arrow.png" width="16" height="16">
						<ul>
							<li class="icon_address"><a href="#">Browse by</a>
								<ul>
									<li class="icon_blog"><a href="#">Blog</a>
										<ul>
											<li class="icon_alarm"><a href="#">Recents</a>
												<ul>
													<li class="icon_building"><a href="#">Corporate blog</a></li>
													<li class="icon_newspaper"><a href="#">Press blog</a></li>
												</ul>
											</li>
											<li class="icon_building"><a href="#">Corporate blog</a></li>
											<li class="icon_computer"><a href="#">Support blog</a></li>
											<li class="icon_search"><a href="#">Search...</a></li>
										</ul>
									</li>
									<li class="icon_server"><a href="#">Website</a></li>
									<li class="icon_network"><a href="#">Domain</a></li>
								</ul>
							</li>
							<li class="icon_export"><a href="#">Export</a>
								<ul>
									<li class="icon_doc_excel"><a href="#">Excel</a></li>
									<li class="icon_doc_csv"><a href="#">CSV</a></li>
									<li class="icon_doc_pdf"><a href="#">PDF</a></li>
									<li class="icon_doc_image"><a href="#">Image</a></li>
									<li class="icon_doc_web"><a href="#">Html</a></li>
								</ul>
							</li>
							<li class="sep"></li>
							<li class="icon_refresh"><a href="#">Reload</a></li>
							<li class="icon_reset">Reset</li>
							<li class="icon_search"><a href="#">Search</a></li>
							<li class="sep"></li>
							<li class="icon_terminal"><a href="#">Custom request</a></li>
							<li class="icon_battery"><a href="#">Stats server load</a></li>
						</ul>
					</div>
				</li>
			</ul>
		</li>
		<li class="medias <?=($this->uri->segment(1) == "video")? "current": False ?>"><a href="#" title="Medias">Medias</a>
			<ul>
				<li><a href="/video/list" title="Browse">Browse</a></li>
				<li><a href="#" title="Manage">Manage</a></li>
			</ul>
		</li>
		<li class="backup"><a href="#" title="Backup">Backup</a></li>
	</ul>
</nav>
<!-- End main nav -->

<!-- Sub nav -->
<div id="sub-nav"><div class="container_12">
	
	<a href="#" title="Help" class="nav-button"><b>Help</b></a>

	<form id="search-form" name="search-form" method="post" action="search.html">
		<input type="text" name="s" id="s" value="" title="Search admin..." autocomplete="off">
	</form>

</div></div>
<!-- End sub nav -->

<!-- Status bar -->
<div id="status-bar"><div class="container_12">

	<ul id="status-infos">
		<li class="spaced"><?=lang('welcome')?>: <strong><?=$this->tank_auth->get_username()?></strong></li>
		<li>
			<a href="javascript:void(0)" class="button" title="<?=$messages_count?> <?=lang('messages')?>"><img src="/assets/images/icons/fugue/mail.png" width="16" height="16"> <strong><?=$messages_count?></strong></a>
			<?php if(isset($messages)):?>
			<div id="messages-list" class="result-block">
				<span class="arrow"><span></span></span>
				
				<ul class="small-files-list icon-mail">
				<?php foreach($messages->result() as $m ):?>
					<li>
						<a href="#"><strong><?=date('Y.m.d')?></strong> <?=$m->title?><br>
						<small>De: <?=$m->from?></small></a>
					</li>
				<?php endforeach; ?>
				</ul>
				
				<p id="messages-info" class="result-info"><a href=""><?=lang('go-to-inbox')?> &raquo;</a></p>
			</div>
			<?php endif;?>
		</li>
		<li>
			<a href="#" class="button" title="25 comments"><img src="/assets/images/icons/fugue/balloon.png" width="16" height="16"> <strong>25</strong></a>
			<div id="comments-list" class="result-block">
				<span class="arrow"><span></span></span>
				
				<ul class="small-files-list icon-comment">
					<li>
						<a href="#"><strong>Jane</strong>: I don't think so<br>
						<small>On <strong>Post title</strong></small></a>
					</li>
				</ul>
				
				<p id="comments-info" class="result-info"><a href="#">Manage comments &raquo;</a></p>
			</div>
		</li>
		<li><a href="/users/logout/" class="button red" title="<?=lang('logout')?>"><span class="smaller"><?=lang('logout')?></span></a></li>
	</ul>
	
	<ul id="breadcrumb">
		<li><a href="#" title="Home">Home</a></li>
		<li><a href="#" title="Dashboard">Dashboard</a></li>
	</ul>

</div></div>
<!-- End status bar -->

<div id="header-shadow"></div>
<!-- End header -->