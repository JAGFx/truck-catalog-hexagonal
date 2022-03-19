<?php

/**
 * @author:    Emmanuel SMITH <hey@emmanuel-smith.me>
 * project:    truck-catalog-hexagonal
 * file:    CabHeight.php
 * Date:    19/03/2022
 * Time:    20:18
 */

namespace Configurator\Domain\Model\Parts\Cab;

    enum CabHeight : string {
        case H1 = 'h1';
        case H2 = 'h2';
        case H3 = 'h3';
    }
