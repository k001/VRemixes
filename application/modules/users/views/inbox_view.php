<div class="block-border"><div class="block-content">
	<form id="inbox" class="block-content form">
	<h1><?=lang('my')." ".lang('my-inbox')?></h1>
	<?php if($messages->num_rows()> 0):?>
	<div class="block-controls">			
<!--		<ul class="controls-buttons">
			<li><a title="Previous" href="#"><img width="16" height="16" src="/assets/images/icons/fugue/navigation-180.png"> Prev</a></li>
			<li><a title="Page 1" href="#"><b>1</b></a></li>
			<li><a class="current" title="Page 2" href="#"><b>2</b></a></li>
			<li><a title="Page 3" href="#"><b>3</b></a></li>
			<li><a title="Page 4" href="#"><b>4</b></a></li>
			<li><a title="Page 5" href="#"><b>5</b></a></li>
			<li><a title="Next" href="#">Next <img width="16" height="16" src="/assets/images/icons/fugue/navigation.png"></a></li>
			<li class="sep"></li>
			<li><a href="#"><img width="16" height="16" src="/assets/images/icons/fugue/arrow-circle.png"></a></li>
		</ul>
-->		
	</div>
	<div class="no-margin">
		<table class="table" width="100%" cellpadding="0">
			<thead>
				<tr>
					<th class="black-cell">&nbsp;</th>
					<th scope="col"><?=lang('title')?></th>
					<th scope="col" class="table-actions"><?=lang('actions')?></th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($messages->result() as $row):?>
				<tr>
					<th><?=$row?></th>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>			
	</div>
	<ul class="message no-margin">
		<li><?=$messages->num_rows();?> <?=($messages->num_rows() == 1)?"mensaje":"mesajes"?></li>
	</ul>
	<?php else: ?>
	<p class="message">No existen mensajes</p>
	<?php endif; ?>
</div></div>