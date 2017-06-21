<?php
	function delete_news(){
	$main = new DB_class();
	$result = mysqli_query($main->construct(),"SELECT * FROM articles")or die(mysql_error());
		$i = 0;
		echo "<table>";
		echo "<tr>";
		echo "<td width='100px' align = 'center'><div  align = 'left' ><b>NR</b></td>";
		echo "<td width='150px' align = 'center'><div  align = 'left'><b>Title</b></td>";
		echo "<td width='auto'  align = 'center'><div  align = 'left'><b>Content</b></td>";
		echo "</tr>";		
		while($row = mysqli_fetch_array($result)) {
		$i++;
			echo "<tr>";
			echo "<td width='100px' align = 'center'><div  align = 'left' ><b>{$i}.</b></td>";
			echo "<td width='150px' align = 'center'><div  align = 'left'><b>  {$row['Title']}</b></td>";
			echo "<td width='auto'  align = 'center'><div  align = 'left'><b>{$row['Content']}</b></td>";
			echo "<td width='50px'><a href='delete.php?idArticles={$row['idArticles']}'>DELETE</a></td>";
			echo "</tr>";
			
		}
		echo "</table><hr/>";
		if(isset($_GET['idArticles'])){
			$test = $_GET['idArticles'];	
			$result = mysqli_query($main->construct(),"DELETE FROM articles WHERE idArticles = $test");
			header("location:delete.php");
		}

}
?>