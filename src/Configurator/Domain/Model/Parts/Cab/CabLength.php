<?php

/**
 * @author:    Emmanuel SMITH <hey@emmanuel-smith.me>
 * project:    truck-catalog-hexagonal
 * file:    CabSize.php
 * Date:    19/03/2022
 * Time:    20:16
 */

namespace Configurator\Domain\Model\Parts\Cab;

    enum CabLength : string {
        case L1 = 'l1';
        case L2 = 'l2';
        case L3 = 'l3';
    }
