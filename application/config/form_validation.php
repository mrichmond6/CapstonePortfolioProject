<?php
$config = [
	'admin_login' => [
		[
		'field' => 'username',
		'label' =>'Username required',
		'rules' =>'required|alpha|trim'
		],
		[
		'field' => 'password',
		'label' =>'Password',
		'rules'=> 'required|trim'
		]
	]
];
