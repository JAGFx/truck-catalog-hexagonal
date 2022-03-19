<?php

/**
 * @author:    Emmanuel SMITH <hey@emmanuel-smith.me>
 * project:    truck-catalog-hexagonal
 * file:    GearboxType.php
 * Date:    19/03/2022
 * Time:    20:29
 */

namespace Configurator\Domain\Model\Parts\Gearbox;

    enum GearboxType : string {
        case Automatic = 'automatic';
        case Manual = 'manual';
    }
