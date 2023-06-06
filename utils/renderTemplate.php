<?php
function renderTemplate($template, $variables)
{
	extract($variables);
	ob_start();
	if (file_exists($template)) {
		require $template;
	} else {
		echo 'Шаблон не найден!';
	}
	return ob_get_clean();
}
