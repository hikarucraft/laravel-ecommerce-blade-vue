<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->in(__DIR__);

$config = new PhpCsFixer\Config();

return $config
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2' => true,
        '@Symfony' => true,
        'binary_operator_spaces' => [
            'operators' => [
                '=>' => 'align',
                '=' => 'align',
            ],
        ],
        'no_whitespace_before_comma_in_array' => true,
        'whitespace_after_comma_in_array' => true,
    ])
    ->setFinder($finder);
