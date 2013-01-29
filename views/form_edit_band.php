<?php 
$lines = file('data/bands.csv',FILE_IGNORE_NEW_LINES);

// Get the band association with the 'band' parameter in the query string
$band = explode(',',$lines[$_GET['band']]);
?>

<h2>Edit Band</h2>
<!-- There are two ways to sumbit data from forms to the web server:
	- Get: use when submitting somthing that won't change the server state
	- Post: use when submitting something that will change something on the
server (such as a data file) -->
<form class="form-horizontal" action="actions/edit_band.php" method="post">
	<input type="hidden" name="linenum" value="<?php echo $_GET['band'] ?>" />
	<div class="control-group">
		<label class="control-label" for="band_name">Band Name</label>
		<div class="controls">
			<?php echo input('band_name','required',$band[0]) ?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="band_genre">Band Genre</label>
		<div class="controls">
			<?php echo input('band_genre','required',$band[1])?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="band_numalbums"># Albums</label>
		<div class="controls">
			<?php echo input('band_numalbums','required',$band[2])?>
		</div>
	</div>
	<div class="form-actions">
		<button type="submit" class="btn btn-warning"><i class="icon-edit icon-white"></i> Edit Band</button>
		<button type="button" class="btn">Cancel</button>
	</div>
</form>