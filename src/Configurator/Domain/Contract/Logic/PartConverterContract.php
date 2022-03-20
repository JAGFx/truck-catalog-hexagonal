<?php

namespace Configurator\Domain\Contract\Logic;

    use Configurator\Domain\ViewModel\Part\PartView;

    interface PartConverterContract
    {
        public static function convertViewToModel(PartView $view): PartContract;

        public static function convertModelToView(PartContract $part): PartView;
    }
