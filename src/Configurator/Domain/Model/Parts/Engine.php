<?php

/**
 * @author:    Emmanuel SMITH <hey@emmanuel-smith.me>
 * project:    truck-catalog-hexagonal
 * file:    Engine.php
 * Date:    19/03/2022
 * Time:    20:21
 */

namespace Configurator\Domain\Model\Parts;

use Configurator\Domain\Contract\Model\PartInterface;

final class Engine implements PartInterface
{
    public function __construct(
        public int $horsePower,
        public int $torque
    ) {
    }
}
