<?php

namespace Configurator\Domain\Assignment;

    interface AssignmentInterface
    {
        public function execute(?AssignmentParameters $parameters = null): AssignmentResponse;
    }
