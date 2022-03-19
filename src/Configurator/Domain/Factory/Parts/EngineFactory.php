<?php

/**
 * @author:    Emmanuel SMITH <hey@emmanuel-smith.me>
 * project:    truck-catalog-hexagonal
 * file:    EngineFactory.php
 * Date:    19/03/2022
 * Time:    22:57
 */

namespace Configurator\Domain\Factory\Parts;

    use Configurator\Domain\Contract\Factory\PartFactory;
    use Configurator\Domain\Model\Parts\Engine;

    final class EngineFactory implements PartFactory
    {
        public static function create(array $data): Engine
        {
            return new Engine($data['horsePower'], $data['torque']);
        }
    }
