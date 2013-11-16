<?php

	foreach ($comments as $comment) {?>
		<p>
		<?php echo $comment->user ?>&nbsp;<?php echo $comment->date; ?><br>
		<?php echo $comment->comment;?>
		</p>
	<?php }?>