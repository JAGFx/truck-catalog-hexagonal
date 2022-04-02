<?php

/**
 * @author:    Emmanuel SMITH <hey@emmanuel-smith.me>
 * project:    truck-catalog-hexagonal
 * file:    AssignmentHandlerInterface.php
 * Date:    02/04/2022
 * Time:    20:37
 */

namespace Configurator\Domain\Assignment;

    interface AssignmentHandlerInterface
    {
        public function handle(string $assignmentClass, array $data = []): AssignmentResponse;

        public function handleParameters(array $data = []): AssignmentParameters;

        public function createAssignment(string $assignmentClass): ?AssignmentInterface;
    }
