<?php  return 'if ($modx->event->name != \'OnPageNotFound\') {return false;}
$alias = $modx->context->getOption(\'request_param_alias\', \'q\');
if (!isset($_REQUEST[$alias])) {return false;}
echo \'<pre>\';

$request = $_REQUEST[$alias];
$tmp = explode(\'/\', $request);
if ($tmp[0] == \'user\' && count($tmp) >= 2) {
	$id = str_replace(array(\'.html\', \'/\\.*/\'), \'\', $tmp[1]);
	if ($tmp[1] != $id || (isset($tmp[2]) && $tmp[2] == \'\')) {
		$modx->sendRedirect($tmp[0] . \'/\' . $id);
	}
	
	// Люди с неправильной ссылкой ушли на правильную и дошли до этого момента со второго раза
	// Дальше проверяем наличие запрошенного бренда
	if ($user = $modx->getObject(\'modUser\', array(\'id\' => $id))) {
		print_r($user);
	}
}



die;
return;
';