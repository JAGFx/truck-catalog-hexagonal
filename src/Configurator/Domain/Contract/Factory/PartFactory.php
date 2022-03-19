<?php

namespace Configurator\Domain\Contract\Factory;

    use Configurator\Domain\Contract\Model\PartInterface;

    interface PartFactory
    {
        public static function create(array $data): PartInterface;
    }
