<?php

/**
 * @author:    Emmanuel SMITH <hey@emmanuel-smith.me>
 * project:    truck-catalog-hexagonal
 * file:    TruckAssignmentHandler.php
 * Date:    02/04/2022
 * Time:    20:49
 */

namespace Configurator\Domain\Contract\Handler;

    use Configurator\Domain\Assignment\AssignmentHandler;
    use Configurator\Domain\Assignment\AssignmentInterface;
    use Configurator\Domain\Contract\Manager\TruckManagerContract;
    use Configurator\Domain\Truck\ListTruckConfigurationAssignment;
    use Configurator\Domain\Truck\TruckFactory;
    use Configurator\Domain\Truck\TruckValidator;
    use Configurator\Domain\Truck\VerifyTruckConsistencyAssignment;

    abstract class TruckAssignmentHandlerContract extends AssignmentHandler
    {
        public function __construct(
            private TruckManagerContract $truckManager,
            private TruckValidator $truckValidator,
            private TruckFactory $truckFactory
        ) {
        }

        public function createAssignment(string $assignmentClass): ?AssignmentInterface
        {
            return match ($assignmentClass) {
                ListTruckConfigurationAssignment::class => new ListTruckConfigurationAssignment($this->truckManager),
                VerifyTruckConsistencyAssignment::class => new VerifyTruckConsistencyAssignment($this->truckValidator, $this->truckFactory),
                default => null
            };
        }
    }
