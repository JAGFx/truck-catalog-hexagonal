<?php
    
    $finder = PhpCsFixer\Finder::create()
                               ->in(__DIR__)
                               ->exclude('vendor')
                               ->exclude('var')
    ;
    
    $config = new PhpCsFixer\Config();
    return $config->setRules([
        '@Symfony' => true,
        'full_opening_tag' => false,
        'yoda_style' => false,
        /**
         * Workaround, avoid union types to have whitespaces
         * @see https://github.com/FriendsOfPHP/PHP-CS-Fixer/issues/5495
         *
         */
        'binary_operator_spaces' => ['operators' => ['|' => null]],
    ])
                  ->setFinder($finder);