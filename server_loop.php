<?php
// Игнорирует отключение пользователя и позволяет скрипту
// быть запущенным постоянно
ignore_user_abort(true);
set_time_limit(60);

echo 'Тестирование управления соединением PHP';

// Запуск бесконечного цикла,
// который будет завершен при выходе со страницы
// либо при нажатии кнопки "Stop".
$counter = 20;
while($counter>0)
{
	$couner = $counter - 1;
	require dirname(__FILE__).'/load_data.php';
	sleep(2);
}


?>
