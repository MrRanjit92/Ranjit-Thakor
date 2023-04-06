<html>
<body> 

<?php


$link = mysqli_connect("sdb-56.hosting.stackcp.net", "student70-353031333cdd", "ua92-studentAc", "student70-353031333cdd");

if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Students</h3>
	
		<table>
		
			<tr>
				 <th width="250px">Name<br><hr></th>
                <th width="250px">Address<br><hr></th>
				<th width="250px">Contact No<br><hr></th>
				<th width="250px">Class <br><hr></th>
			</tr>
				
			<?php
		
			$sql = mysqli_query($link, "SELECT  Name, Address, ContactNo, ClassId  FROM Pupils");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['Name']}</th>
				<th>{$row['Address']}</th>
				<th>{$row['ContactNo']}</th>
				<th>{$row['ClassId']}</th>
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>


