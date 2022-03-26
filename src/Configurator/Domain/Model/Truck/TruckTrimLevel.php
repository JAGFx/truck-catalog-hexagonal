<?php
    /**
     * @author:    Emmanuel SMITH <hey@emmanuel-smith.me>
     * project:    truck-catalog-hexagonal
     * file:    TruckTrimLevel.php
     * Date:    26/03/2022
     * Time:    21:56
     */
    
    namespace Configurator\Domain\Model\Truck;
    
    enum TruckTrimLevel: string
    {
        case LowCost = 'lowCost';
        case Standard = 'standard';
        case Premium = 'premium';
    }