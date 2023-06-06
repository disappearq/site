<?php
function renderComponent($component, $variables)
{
	extract($variables);
	ob_start();
	if (file_exists($component)) {
		require $component;
	} else {
		echo 'Компонент не найден!';
	}
	return ob_get_clean();
}
