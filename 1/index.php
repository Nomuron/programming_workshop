<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
	<body>
		<p>
			<text>Zadanie 1.1</text>
			</br>
			<?php include '1.php'; ?>
		</p>
		<p>
			<text>Zadanie 1.2</text>
			<form action="index.php" method="post">
				a: <input type="number" name="a">
				b: <input type="number" name="b">
				<input type="submit" value="Oblicz pole">
			</form>
			<?php include '2.php'; ?>
		</p>
		<p>
			<text>Zadanie 1.3</text>
			<form action="index.php" method="post">
				c: <input type="number" name="c">
				<input type="submit" value="Oblicz pierwiastek">
			</form>
			<?php include '3.php'; ?>
		</p>
		<p>
			<text>Zadanie 1.4</text>
			<form action="index.php" method="post">
				d: <input type="number" name="d">
				e: <input type="number" name="e">
				<input type="submit" name="sub4" value="Oblicz kalkulacje">
			</form>
			<?php include '4.php'; ?>
		</p>
		<p>
			<text>Zadanie 1.5</text>
			<form action="index.php" method="post">
				tekst1: <input type="text" name="f">
				tekst2: <input type="text" name="g">
				<input type="submit" value="Wygeneruj tekst">
			</form>
			<?php include '5.php'; ?>
		</p>
		<p>
			<text>Zadanie 1.6</text>
			<form action="index.php" method="post">
				h: <input type="text" name="h">
				i: <input type="text" name="i">
				j: <input type="text" name="j">
				<input type="submit" value="Sprawdź trójkąt">
			</form>
			<?php include '6.php'; ?>
        </p>
		<p>
			<text>Zadanie 1.7</text>
			<form action="index.php" method="post">
				k: <input type="number" min="1" max="12" name="k">
				<input type="submit" value="Pokaż miesiąć i dzień">
			</form>
			<?php include '7.php'; ?>
		</p>
		<p>
			<text>Zadanie 1.8</text>
			<form action="index.php" method="post">
				l: <input type="number" name="l">
				m: <input type="number" name="m">
				n: <input type="number" name="n">
				<input type="submit" value="Posortuj">
			</form>
			<?php include '8.php'; ?>
		</p>
		<p>
			<text>Zadanie 1.9</text>
			<?php include '9.php'; ?>
		</p>
        <p>
            <text>Zadanie 1.10</text>
            <form action="index.php" method="post">
                o: <input type="number" name="o">
                <input type="submit" value="Pokaż rysunki">
            </form>
            <?php include '10.php'; ?>
        </p>
        <p>
            <text>Zadanie 1.11</text>
            <form action="index.php" method="post">
                p: <input type="text" name="p">
                <input type="submit" value="Sprawdź pangram">
            </form>
            <?php include '11.php'; ?>
        </p>
        <p>
            <text>Zadanie 1.12</text>
            <form action="index.php" method="post">
                q: <input type="number" min="1" name="q">
                r: <input type="number" min="1" name="r">
                <input type="submit" name="sub4" value="Pokaż transpozycje">
            </form>
            <?php include '12.php'; ?>
        </p>
	</body>
</html>

