<html>
<head>
	<title>Baza</title>
</head>
<body>

<?php
	$connection = @mysql_connect('localhost:3306', 'root', '');
	$db = @mysql_select_db('baza5', $connection);
	
if (isset($_POST["p1"])) {
		$imie = $_POST["imie"];
		$nazwisko = $_POST["nazwisko"];
		$wiek = $_POST["wiek"];
		$sql = "INSERT INTO student(imie, nazwisko, wiek) VALUES ('$imie', '$nazwisko', '$wiek')";
		$wynik2 = mysql_query($sql);
}

if (isset($_POST["p2"])) {
		$id = $_POST["id"];
		$sql = "DELETE FROM student WHERE id=$id";
		$wynik2 = mysql_query($sql);
}

if (isset($_POST["p3"])) {
		$id = $_POST["id"];
		$imie = $_POST["imie"];
		$nazwisko = $_POST["nazwisko"];
		$wiek = $_POST["wiek"];
		$sql = "UPDATE student SET imie=$imie, nazwisko=$nazwisko, wiek=$wiek WHERE id=$id";
		$wynik2 = mysql_query($sql);
		// Wyświetl formularz z polem tekstowym do aktualizacji
        echo "<form action='zad5.php' method='post'>";
        echo "<hr>";
        echo "<input type='hidden' name='id'>";
        echo "<input type='text' name='$imie'>";
        echo "<input type='text' name='$nazwisko'>";
        echo "<input type='text' name='$wiek'>";
        echo "<input type='submit' name='ok' value='OK'>";
        echo "<input type='submit' name='cancel' value='ANULUJ'>";
        echo "</form>";
}

$sql = "SELECT * FROM student";
$wynik = mysql_query($sql);

while ($linia = mysql_fetch_array($wynik)) {
	$id = $linia['id'];
	echo "<form action='zad5.php' method='post'>";
	echo "<hr>";
	echo $linia['id'] . " " . $linia['imie'] . " " . $linia['nazwisko'] . " " . $linia['wiek'];
	echo "<input type='hidden' name='id' value='$id'>";
	echo "<input type='submit' name='p2' value='KASUJ'>";
	echo "<input type='submit' name='p3' value='UPDATE'>";
	echo "</form>";
}

mysql_close($connection);
?>

<form action="zad5.php" method="post">
	<input type='text' name='imie'>
	<input type='text' name='nazwisko'>
	<input type='text' name='wiek'>
	<input type='submit' name='p1' value='DODAJ'>
</form>
</br>
</body>
</html>
