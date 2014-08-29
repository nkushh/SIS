<table align="center">
		<tr>
			<td><a href="view_data.php"><button class="submit" type="submit">Home</button></a></td>
			<td><a href="find.php"><button class="submit" type="submit">Search</button></a></td>
			<td><a href="view.php"><button class="submit" type="submit">View Net issue</button></a></td>
			<td><a href="districts.php"><button class="submit" type="submit">Districts</button></a></td>
			<td><a href="hospitals.php"><button class="submit" type="submit">Hospitals</button></a></td>

			<?php
				if($_SESSION['valid']=='admin'){
			
				//echo "<td><a href='add.php'><button class='submit' type='submit'>Add User</button></a></td>";
				echo "<td><a href='users.php'><button class='submit' type='submit'>View User</button></a></td>";
				}
			?>
			<!--<td><a href="issue_nets.php"><button class="submit" type="submit">Issue Nets</button></a></td>
			<td><a href="batch_entry.php"><button class="submit" type="submit">Batch Entry</button></a></td>-->
			<td><a href="reports.php"><button class="submit" type="submit">Reports</button></a></td>
			<td><a href="logout.php"><button class="submit" type="submit">Logout</button></a></td>
		</tr>
</table>