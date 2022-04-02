<?php

/**
 * @author:    Emmanuel SMITH <hey@emmanuel-smith.me>
 * project:    truck-catalog-hexagonal
 * file:    AssignmentHandlerClassNotFoundException.php
 * Date:    02/04/2022
 * Time:    20:11
 */

namespace Configurator\Domain\Assignment;

    class AssignmentHandlerClassNotFoundException extends \Exception
    {
        public const MESSAGE = 'Unable to handle this assignment. The given class was not found';

        public function __construct(string $assignmentClass)
        {
            parent::__construct($this->message.": $assignmentClass");
        }
    }
