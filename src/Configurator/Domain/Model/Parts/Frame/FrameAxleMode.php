<?php

/**
 * @author:    Emmanuel SMITH <hey@emmanuel-smith.me>
 * project:    truck-catalog-hexagonal
 * file:    FrameAxleMode.php
 * Date:    19/03/2022
 * Time:    21:11
 */

namespace Configurator\Domain\Model\Parts\Frame;

    enum FrameAxleMode : string
    {
        case Motorized = 'motorized';
        case Directional = 'directional';
        case Simple = 'simple';
    }
