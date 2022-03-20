<?php

/**
 * @author:    Emmanuel SMITH <hey@emmanuel-smith.me>
 * project:    truck-catalog-hexagonal
 * file:    EngineFactory.php
 * Date:    19/03/2022
 * Time:    22:57
 */

namespace Configurator\Domain\Factory\Parts;

    use Configurator\Domain\Contract\Logic\PartFactoryContract;
    use Configurator\Domain\Model\Parts\Engine;

    final class EngineFactoryContract implements PartFactoryContract
    {
        public static function build(string $id, array $data): Engine
        {
            return new Engine($id, $data['horsePower'], $data['torque']);
        }
    }
