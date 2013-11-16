<form action="/comment/add_or_update" method="post">
	<input type="hidden" name="comments_container_id" value="<?php echo $comments_container_id ;?>" />
	<label>Name</label>
	<input type="text" name="user" />
	<label>Comment</label>
	<textarea name="comment"></textarea></br>
	<input type="submit" value="add comment" />
</form>