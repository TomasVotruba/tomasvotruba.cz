<?php

return [
    Symfony\Bundle\TwigBundle\TwigBundle::class => ['all' => true],
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Symplify\PhpConfigPrinter\Bundle\PhpConfigPrinterBundle::class => ['all' => true],
    Symplify\ComposerJsonManipulator\ComposerJsonManipulatorBundle::class => ['dev' => true, 'test' => true],
    Symplify\MarkdownDiff\MarkdownDiffBundle::class => ['dev' => true, 'test' => true],
];
