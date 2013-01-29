<h2>All Bands</h2>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Name</th>
				<th>Genre</th>
				<th># Albums</th>
				<th>Edit / Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			// Read all lines of the CSV file into an array
			// The "file" function in PHP returns an array of all the lines in the file listed
			$lines = file('data/bands.csv',FILE_IGNORE_NEW_LINES);
			
			// Counter variable for line number
			$i = 0;
			
			//Iterate over the array of lines
			foreach($lines as $line) {
				$parts = explode(',',$line);
				$name = $parts[0];
				$genre = $parts[1];
				$num_albums = $parts[2];
				echo '<tr>';
				echo 	"<td>$name</td>";
				echo 	"<td>$genre</td>";
				echo 	"<td>$num_albums</td>";
				echo 	"<td><a class=\"btn btn-warning\" href=\"./?p=form_edit_band&band=$i\"><i class=\"icon-edit icon-white\"></i></a> <a class=\"btn btn-danger\" href=\"actions/delete_band.php?linenum=$i\"><i class=\"icon-trash icon-white\"></i></a></td>";
				echo '</tr>';
				
				$i++; // increment line number
			}
			?>
		</tbody>
	</table>