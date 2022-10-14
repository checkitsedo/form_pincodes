<?php
$EM_CONF[$_EXTKEY] = [
	'title' => 'Form Pincodes',
	'description' => 'Send defined pincodes with form e-mail finisher.',
	'category' => 'fe',
	'version' => '1.0.0',
	'state' => 'stable',
	'clearcacheonload' => true,
	'author' => 'Dominik Senti',
	'author_email' => 'info@senti.lu',
	'author_company' => 'checkit senti.lu',
	'constraints' => [
		'depends' => [
			'typo3' => '11.5.0 - 11.5.99',
			'form' => '11.5.0 - 11.5.99'
		],
	],
	'autoload' => [
		 'psr-4' => [
				'Checkitsedo\\FormPincodes\\' => 'Classes'
		 ]
	],
];
