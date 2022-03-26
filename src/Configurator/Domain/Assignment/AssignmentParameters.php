<?php

/**
 * @author:    Emmanuel SMITH <hey@emmanuel-smith.me>
 * project:    truck-catalog-hexagonal
 * file:    AssignmentParams.php
 * Date:    26/03/2022
 * Time:    21:33
 */

namespace Configurator\Domain\Assignment;

    class AssignmentParameters
    {
        public function __construct(
            private array $parameters = []
        ) {
        }

        public function set(string $name, mixed $value): void
        {
            $this->parameters[$name] = $value;
        }

        public function has(string $name): bool
        {
            return in_array($name, $this->parameters);
        }

        /**
         * @throws AssignmentParametersNotFoundException
         */
        public function get(string $name): mixed
        {
            if (!$this->has($name)) {
                throw new AssignmentParametersNotFoundException($name);
            }

            return $this->parameters[$name];
        }
    }
