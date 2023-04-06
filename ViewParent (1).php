<html>
<body> 

<?php


$link = mysqli_connect("sdb-56.hosting.stackcp.net", "student70-353031333cdd", "ua92-studentAc", "student70-353031333cdd");


if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Parents</h3>
	
		<table>
		
			<tr>
				<th width="250px">Fullname<br><hr></th>
				<th width="250px">Address<br><hr></th>
				<th width="250px">Contact<br><hr></th>
				<th width="250px">PupilID<br><hr></th>
				
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT ParentID, Fullname, Address, Contact, PupilID  FROM Parent");
          while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['Fullname']}</th>
				<th>{$row['Address']}</th>
				<th>{$row['Contact']}</th>
				<th>{$row['PupilID']}</th>
                
			</tr>";}
			?>
        </table>
 </body>
 </html>

