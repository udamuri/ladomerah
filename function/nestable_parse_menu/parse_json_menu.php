<?php
$json = json_decode('[{"id":1,"children":[{"id":2}]},{"id":3,"children":[{"id":4}]},{"id":5,"children":[{"id":17,"children":[{"id":18}]},{"id":6,"children":[{"id":7,"children":[{"id":8,"children":[{"id":10},{"id":9},{"id":11},{"id":12}]}]}]}]}]');

/*
$menu = '<ul>';
foreach ($json as $value) {
	$menu .= '<li>';
	$menu .= $value->id;
	if(isset($value->children))
	{
		$menu .= createTree($value->children);
	}
	$menu .= '</li>';
}

$menu .= '<ul>';

function createTree($datachild)
{
	$v_menu = '<ul>';
	foreach ($datachild as $value) {
		$v_menu .= '<li>';
		$v_menu .= $value->id;
		if(isset($value->children))
		{
			$v_menu .= createTree($value->children);
		}
		$v_menu .= '</li>';
	}
	$v_menu .= '</ul>';

	return $v_menu;
}

echo $menu ;
*/


$arrSort = [];
foreach ($json as $value) {
	getArr(['id' =>$value->id, 'children'=>0]);
	if(isset($value->children))
	{
		$arrSort[] = createTree($value->children, $value->id);
	}
}



function createTree($datachild, $id)
{
	$arrData = [] ;
	foreach ($datachild as $value) {
		getArr(['id' =>$value->id, 'children'=>$id]);
		if(isset($value->children))
		{
			createTree($value->children, $value->id);
		}
	}

	return $arrData;
}

function getArr($array = [])
{
	$arrData = [];

	return $arrData;
}

foreach ($arrSort as $key => $value) {
	echo $key;
}

?>

