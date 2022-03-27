<?php
    
    namespace Configurator\Domain\Contract\Manager;
    
    use Configurator\Domain\Model\Truck\Truck;

    interface TruckManagerContract
    {
        /** @return Truck[] */
        public function listAll(): array;
    }