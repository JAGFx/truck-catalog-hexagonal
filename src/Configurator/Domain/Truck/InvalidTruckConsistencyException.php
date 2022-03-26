<?php

    /**
     * @author:    Emmanuel SMITH <hey@emmanuel-smith.me>
     * project:    truck-catalog-hexagonal
     * file:    InvalidTruckConsistencyException.php
     * Date:    26/03/2022
     * Time:    21:49
     */

namespace Configurator\Domain\Truck;

    use Configurator\Domain\Exception\ValidatorException;
    use Configurator\Domain\Model\Truck\Truck;

    class InvalidTruckConsistencyException extends ValidatorException
    {
        public const MESSAGE = 'This truck do not have a valid consistency';
    
        public function __construct(
            private string $description,
            private Truck $truck
        ) {
            parent::__construct(self::MESSAGE.': '.$description);
        }
    
        public function getDescription(): string
        {
            return $this->description;
        }
    
        public function getTruck(): Truck
        {
            return $this->truck;
        }
    }
