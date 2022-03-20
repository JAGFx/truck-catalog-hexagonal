<?php

/**
 * @author:    Emmanuel SMITH <hey@emmanuel-smith.me>
 * project:    truck-catalog-hexagonal
 * file:    Engine.php
 * Date:    19/03/2022
 * Time:    20:21
 */

namespace Configurator\Domain\Model\Parts;

final class Engine extends Part
{
    public function __construct(
        private string $id,
        public int $horsePower,
        public int $torque
    ) {
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function validateConsistency(): void
    {
    }
}
