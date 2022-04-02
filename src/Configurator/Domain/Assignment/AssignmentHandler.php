<?php

/**
 * @author:    Emmanuel SMITH <hey@emmanuel-smith.me>
 * project:    truck-catalog-hexagonal
 * file:    AssignmentHandler.php
 * Date:    02/04/2022
 * Time:    20:03
 */

namespace Configurator\Domain\Assignment;

    abstract class AssignmentHandler implements AssignmentHandlerInterface
    {
        /**
         * @throws AssignmentHandlerClassNotFoundException
         */
        public function handle(string $assignmentClass, array $data = []): AssignmentResponse
        {
            if (!class_exists($assignmentClass)) {
                throw new AssignmentHandlerClassNotFoundException($assignmentClass);
            }

            $assignment = $this->createAssignment($assignmentClass);

            if (is_null($assignment)) {
                throw new AssignmentHandlerClassNotFoundException($assignmentClass);
            }

            return $assignment->execute($this->handleParameters($data));
        }

        abstract public function handleParameters(array $data = []): AssignmentParameters;

        abstract public function createAssignment(string $assignmentClass): ?AssignmentInterface;
    }
