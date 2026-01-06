<!DOCTYPE html>
<html lang="ru">

<head>
<!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>

<header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Лабораторная работа №4</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">

          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Поиск" aria-label="Поиск">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
          </form>
        </div>
      </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
      <h1 class="mt-5">Вычислить площадь треугольника со сторонами А, В, С. Перед вычислением площади проверить условие существования треугольника с заданными сторонами.</h1>
		<form method="POST">
			<div class="form-group">
				<label for="exampleInputB">Сторона А</label>
				<input type="number" class="form-control" name="A" id="exampleInputB" placeholder="Введите значение А">
				<label for="exampleInputB">Сторона В</label>
				<input type="number" class="form-control" name="B" id="exampleInputB" placeholder="Введите значение В">
				<label for="exampleInputB">Сторона С</label>
				<input type="number" class="form-control" name="C" id="exampleInputB" placeholder="Введите значение С">
			</div>
			<p></p>
			<div>
				<button type="submit" class="btn btn-primary" name="submit" id="button_rez">Вычислить</button>
			</div>
		</form>
		<div class="mydiv1">
			<h2>
				<?php
					if (isset($_POST['submit'])){
						$A = floatval($_POST['A']);
						$B = floatval($_POST['B']);
						$C = floatval($_POST['C']);
						if (($A <= 0) || ($B <= 0) || ($C <= 0)){
							echo "Значения не могут быть отрицательными и не могут равняться нулю";
						}else if(($A + $B > $C) && ($A + $C > $B) && ($B + $C > $A)){
							$p = ($A + $B + $C) / 2; // полупериметр
							$S = sqrt($p * ($p - $A) * ($p - $B) * ($p - $C));

							echo "Стороны треугольника: A = $A, B = $B, C = $C<br>";
							echo "Площадь треугольника: " . round($S, 2) . " кв. ед.";
						}else{
							echo "Треугольник с такими сторонами не существует!";
						}
					}
				?>
			</h2>
		</div>
    </main>

    <footer class="footer">

    </footer>
	
</body>

</html>