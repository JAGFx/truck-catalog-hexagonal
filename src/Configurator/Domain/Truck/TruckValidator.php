<?php

    /**
     * @author:    Emmanuel SMITH <hey@emmanuel-smith.me>
     * project:    truck-catalog-hexagonal
     * file:    TruckValidator.php
     * Date:    26/03/2022
     * Time:    21:45
     */

namespace Configurator\Domain\Truck;

    use Configurator\Domain\Model\Parts\Cab\CabHeight;
    use Configurator\Domain\Model\Truck\Truck;
    use Configurator\Domain\Model\Truck\TruckTrimLevel;
    use Configurator\Domain\ValidatorInterface;

    class TruckValidator implements ValidatorInterface
    {
        public function __construct(
        ) {
        }

        /**
         * @param Truck $model
         *
         * @throws InvalidTruckConsistencyException
         */
        public function validate(mixed $model): void
        {
            if ($model->getEngine()->torque > $model->getGearbox()->getTorque()) {
                throw new InvalidTruckConsistencyException('The engine torque must be less or equal than the gearbox torque', $model);
            }

            switch ($model->getTrimLevel()) {
                case TruckTrimLevel::LowCost:
                    $this->validateLowCostTrimLevel($model);
                    break;
                case TruckTrimLevel::Standard:
                    break;
                case TruckTrimLevel::Premium:
                    break;
            }
        }

        /**
         * @throws InvalidTruckConsistencyException
         */
        private function validateLowCostTrimLevel(Truck $truck): void
        {
            if ($truck->getCab()->height !== CabHeight::H1) {
                throw new InvalidTruckConsistencyException('The height is not available with the selected trim level', $truck);
            }

            if ($truck->getEngine()->horsePower > 550) {
                throw new InvalidTruckConsistencyException('The engine hors power is not available for this selected trim level', $truck);
            }

            if ($truck->getEngine()->torque > 3000) {
                throw new InvalidTruckConsistencyException('The engine torque is not available for this selected trim level', $truck);
            }

            if (count($truck->getFrame()->getAxles()) !== 2
                || !$truck->getFrame()->hasMotorizedAxle()
                || !$truck->getFrame()->hasDirectionalAxle()) {
                throw new InvalidTruckConsistencyException('The truck do not have least one motorized and directional axle', $truck);
            }
        }
    }
