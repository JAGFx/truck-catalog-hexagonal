<?php

namespace Configurator\Domain\Truck;

    use Configurator\Domain\Assignment\AssignmentInterface;
    use Configurator\Domain\Assignment\AssignmentParameters;
    use Configurator\Domain\Assignment\AssignmentResponse;
    use Configurator\Domain\Contract\Manager\TruckManagerContract;

    class ListTruckConfigurationAssignment implements AssignmentInterface
    {
        public function __construct(
            private TruckManagerContract $truckManager
        ) {
        }

        public function execute(?AssignmentParameters $parameters = null): AssignmentResponse
        {
            return new AssignmentResponse($this->truckManager->listAll());
        }
    }
