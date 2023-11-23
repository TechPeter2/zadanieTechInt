<!DOCTYPE html>
<htmtl>
<head>
<meta charset = "UTF-8">
<style>
.column {
  float: left;
  width: 50%;
}

</style>
</head>
<body>
<div class="row">
	<div class="column" style="background-color:#aaa;">
	<h1>Formularz rejestracyjno-danowy</h1>
    <form action ="zad4.php" method="get">
			Imie:<input type="text" name="imie"><br>
			Nazwisko:<input type="text" name="nazwisko"><br>
			Ulica:<input type="text" name="ulica"><br>
			Numer domu:<input type="number" name="nr_domu"><br>
			Data urodzenia:<input type="date" name="data_urodz"><br>
			Wojewodztwo: </br> 
			<b>Mazowieckie<input type="checkbox" name="wojewodztwo" value ="mazowieckie">
			Lubelskie<input type="checkbox" name="wojewodztwo" value ="lubelskie">
			Swietokrzyskie<input type="checkbox" name="wojewodztwo" value ="swietokrzyskie"></b><br>
			Numer telefonu:<input type="number" name="nr_telefon"><br>
			Kolory:</br>
			Red<input type="checkbox" name="color[]" value="red">
			Green<input type="checkbox" name="color[]" value="green">
			Blue<input type="checkbox" name="color[]" value="blue">
			Cyan<input type="checkbox" name="color[]" value="cyan">
			Płeć: M<input type="radio" name="plec[]" value="M">
			K<input type="radio" name="plec[]" value="K"><br>
			Godzina:<input type="time" name="czas"><br>
		<input type ="submit" name="p1" value="Wyślij">
</form>
	</div>
	<div class="column" style="background-color:yellow;">
	<p><h1>Wyświetlane zdania</h1></p>
    <?php
	if(isset($_GET["p1"]))
	{
		if(isset($_GET["imie"]))
		{
			$imie = $_GET["imie"];
			echo("Witaj $imie".'<br>');
		}else{
			echo("Witaj Anonim");
		}
	}
	if(isset($_GET["p1"]))
	{
		if(isset($_GET["nazwisko"]))
		{
			$nazwisko = $_GET["nazwisko"];
			echo("Nazwisko: $nazwisko".'<br>');
		}else{
			echo("Nazwisko: Anonim");
		}
	}
	if(isset($_GET["p1"]))
	{
		if(isset($_GET["ulica"]))
		{
			$ulica = $_GET["ulica"];
			echo("Mieszkam na ulicy $ulica".'<br>');
		}else{
			echo("Mieszkam na anonimowej ulicy");
		}
	}
	if(isset($_GET["p1"]))
	{
		if(isset($_GET["nr_domu"]))
		{
			$nr_domu = $_GET["nr_domu"];
			echo("Numer mojego domu to $nr_domu".'<br>');
		}else{
			echo("Numer mojego domu to ...");
		}
	}
	if(isset($_GET["p1"]))
	{
		if(isset($_GET["data_urodz"]))
		{
			$data_urodz = $_GET["data_urodz"];
			echo("Data urodzenia: $data_urodz".'<br>');
		}else{
			echo("Data urodzenia: ...");
		}
	}
if (isset($_GET['color'])) {
	$name = $_GET['color'];
    echo "Wybierasz kolor: <br>";

    foreach ($name as $color){
        echo $color."<br />";
    }
} else {
    echo "Nie wybrałeś koloru";
}
	if(isset($_GET["p1"]))
	{
		if(isset($_GET["nr_telefon"]))
		{
			$nr_telefon = $_GET["nr_telefon"];
			echo("Mój numer telefonu: $nr_telefon".'<br>');
		}else{
			echo("Mój numer telefonu: ...");
		}
	}
	
	if (isset($_GET['plec'])) {
	$name = $_GET['plec'];
    echo "Płeć: <br>";

    foreach ($name as $plec){
        echo $plec."<br />";
    }
} else {
    echo "Nie wybrałeś płci";
}
	if(isset($_GET["p1"]))
	{
		if(isset($_GET["czas"]))
		{
			$czas = $_GET["czas"];
			echo("Godzina: $czas".'<br>');
		}else{
			echo("Godzina: ...");
		}
	}
	
?>
	</div>
</div>
</body>
</html>
