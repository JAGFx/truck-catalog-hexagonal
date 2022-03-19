<?php

/**
 * @author:    Emmanuel SMITH <hey@emmanuel-smith.me>
 * project:    truck-catalog-hexagonal
 * file:    FrameType.php
 * Date:    19/03/2022
 * Time:    21:09
 */

namespace Configurator\Domain\Model\Parts\Frame;

    enum FrameType : string
    {
        case Tractor = 'tractor';
        case Straight = 'straight';
    }
