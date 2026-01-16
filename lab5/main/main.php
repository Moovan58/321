<?php
$rez = mysqli_query($link,"SELECT * FROM users WHERE id='$UID'");
$ans = mysqli_fetch_assoc($rez);
echo "<h1> Привет, ".$ans['login']."!</h1>";
echo "<a href='/?action=out'>Выход</a>";
if ($admin) {
    echo '   <div>
                <p>Этот раздел виден только админам</p>
            </div>
        ';
		echo "
		<table border='1'>
			<thead>
				<tr>
					<th>№</th>
					<th>id</th>
					<th>Логин</th>
					<th>Дата регистрации</th>
					<th>Admin?</th>
					<th>Изменить пароль</th>
					<th>Удалить</th>
				</tr>
			</thead>
			<tbody>
		";
		usersTable($link);
		echo '
		</tbody>
		</table>
		</div>';
	}else{
		echo "<div>Мои данные <br>
				Изменить свой пароль на <form method='post'><input id='pass' type='text' name='password1' required/><input type='submit' name='CP' value='Изменить'/></form>
			</div>";
	}

?>
