<?php

/**
 * @author:    Emmanuel SMITH <hey@emmanuel-smith.me>
 * project:    truck-catalog-hexagonal
 * file:    PartsAssignmentHandler.php
 * Date:    02/04/2022
 * Time:    20:47
 */

namespace Configurator\Domain\Contract\Handler;

    use Configurator\Domain\Assignment\AssignmentHandler;
    use Configurator\Domain\Assignment\AssignmentInterface;
    use Configurator\Domain\Contract\Manager\PartsManagerContract;
    use Configurator\Domain\Parts\ListPartsAssignment;

    abstract class PartsAssignmentHandlerContact extends AssignmentHandler
    {
        public function __construct(
            private PartsManagerContract $partsManager,
        ) {
        }

        public function createAssignment(string $assignmentClass): ?AssignmentInterface
        {
            return match ($assignmentClass) {
                ListPartsAssignment::class => new ListPartsAssignment($this->partsManager),

                default => null
            };
        }
    }
