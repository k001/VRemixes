<!-- Main nav -->
<nav id="main-nav">	
	<ul class="container_12">
		<li class="home <?=($this->uri->segment(1) == "")? "current": false ?>"><a href="javascript:void(0)" title="<?=strtoupper(lang('home'))?>"><?=lang('home')?></a>
			<ul>
				<li class="current"><a href="<?=base_url()?>" title="Dashboard"><?=lang('dashboard')?></a></li>
				<li class=""><a href="/blog/faqs" title="Preguntas">Preguntas frecuentes</a></li>
				<!--
				<li class="with-menu"><a href="javascript:void(0)" title="My settings"><?=lang('my-settings')?></a>
					<div class="menu">
						<img src="/assets/images/menu-open-arrow.png" width="16" height="16">
						<ul>
							<li class="icon_address"><a href="javascript:void(0)">Browse by</a>
								<ul>
									<li class="icon_blog"><a href="javascript:void(0)">Blog</a>
										<ul>
											<li class="icon_alarm"><a href="javascript:void(0)">Recents</a>
												<ul>
													<li class="icon_building"><a href="javascript:void(0)">Corporate blog</a></li>
													<li class="icon_newspaper"><a href="javascript:void(0)">Press blog</a></li>
												</ul>
											</li>
											<li class="icon_building"><a href="javascript:void(0)">Corporate blog</a></li>
											<li class="icon_computer"><a href="javascript:void(0)">Support blog</a></li>
											<li class="icon_search"><a href="javascript:void(0)">Search...</a></li>
										</ul>
									</li>
									<li class="icon_server"><a href="javascript:void(0)">Website</a></li>
									<li class="icon_network"><a href="javascript:void(0)">Domain</a></li>
								</ul>
							</li>
							<li class="icon_export"><a href="javascript:void(0)">Export</a>
								<ul>
									<li class="icon_doc_excel"><a href="javascript:void(0)">Excel</a></li>
									<li class="icon_doc_csv"><a href="javascript:void(0)">CSV</a></li>
									<li class="icon_doc_pdf"><a href="javascript:void(0)">PDF</a></li>
									<li class="icon_doc_image"><a href="javascript:void(0)">Image</a></li>
									<li class="icon_doc_web"><a href="javascript:void(0)">Html</a></li>
								</ul>
							</li>
							<li class="sep"></li>
							<li class="icon_refresh"><a href="javascript:void(0)">Reload</a></li>
							<li class="icon_reset">Reset</li>
							<li class="icon_search"><a href="javascript:void(0)">Search</a></li>
							<li class="sep"></li>
							<li class="icon_terminal"><a href="javascript:void(0)">Custom request</a></li>
							<li class="icon_battery"><a href="javascript:void(0)">Stats server load</a></li>
						</ul>
					</div>
				</li>
				-->
			</ul>
		</li>
		<li class="medias <?=($this->uri->segment(1) == "video")? "current": false ?>"><a href="javascript:void(0)" title="Lista de videos">Videos</a>
			<ul>
				<li class="<?=($this->uri->segment(1) == "video" and $this->uri->segment(2) == "list")? "current": false?>"><a href="/video/list" title="Browse">Packs</a></li>
				<li><a href="/video/vdj" title="Manage">VDjs</a></li>
			</ul>
		</li>
		<li class="backup"><a href="javascript:void(0)" title="Pruebame!">Descargas</a></li>
		<li class="settings"><a href="/blog/faqs">Informaci&oacute;n</a></li>
		<li class="users <?=($this->uri->segment(1) == "users")? "current": false ?>"><a href="javascript:void(0)" title="<?=lang('my-settings')?>">&nbsp;</a>
			<ul>
				<li class="<?=($this->uri->segment(2) == "profile")? "current":false?>"><a href="/users/profile" title="My profile"><?=lang('my-profile')?></a></li>
				<li class="<?=($this->uri->segment(2) == "inbox")? "current":false?>"><a href="/users/inbox" title="<?=lang('my-inbox')?>"><?=lang('my-inbox')?></a></li>
			</ul>
		</li>
	</ul>
</nav>
<!-- End main nav -->

<!-- Sub nav -->
<div id="sub-nav"><div class="container_12">
	
	<a href="javascript:void(0)" title="Help" class="nav-button"><b>Help</b></a>

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
						<a href="javascript:void(0)"><strong><?=date('Y.m.d')?></strong> <?=$m->title?><br>
						<small>De: <?=$m->from?></small></a>
					</li>
				<?php endforeach; ?>
				</ul>
				<p id="messages-info" class="result-info"><a href="/users/inbox"><?=lang('go-to-inbox')?> &raquo;</a></p>
			</div>
			<?php endif;?>
		</li>
		<li><a href="/users/logout/" class="button red" title="<?=lang('logout')?>"><span class="smaller"><?=lang('logout')?></span></a></li>
	</ul>
	
	<ul id="breadcrumb">
	<?php $uri = explode('/', $this->uri->uri_string()); ?>
		<li><a href="javascript:void(0)" title="Home">Home</a></li>
		<?php unset($uri[0]); if($uri > 0): foreach($uri as $v):?>
		<li><a href="javascript:void(0)" title="<?=ucfirst($v)?>"><?=ucfirst($v)?></a></li>
		<?php endforeach; endif;?>
	</ul>

</div></div>
<!-- End status bar -->

<div id="header-shadow"></div>
<!-- End header -->