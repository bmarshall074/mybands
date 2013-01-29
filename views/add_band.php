<h2>Add a Band</h2>
<!-- There are two ways to sumbit data from forms to the web server:
	- Get: use when submitting somthing that won't change the server state
	- Post: use when submitting something that will change something on the 
			  server (such as a data file) -->
<form class="form-horizontal" action="actions/action_add_band.php" method="post">
	<div class="control-group">
		<label class="control-label" for="band_name">Band Name</label>
		<div class="controls">
			<?php echo input('band_name','required')?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="band_genre">Band Genre</label>
		<div class="controls">
			<?php echo input('band_genre','required')?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="band_numalbums"># Albums</label>
		<div class="controls">
			<?php echo input('band_numalbums','required')?>
		</div>
	</div>
	<div class="form-actions">
  		<button type="submit" class="btn btn-success"><i class="icon-plus-sign icon-white"></i> Add Band</button>
  		<button type="button" class="btn">Cancel</button>
	</div>
</form>