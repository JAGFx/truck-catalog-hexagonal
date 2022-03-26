<?php

/**
 * @author:    Emmanuel SMITH <hey@emmanuel-smith.me>
 * project:    truck-catalog-hexagonal
 * file:    Cab.php
 * Date:    19/03/2022
 * Time:    20:12
 */

namespace Configurator\Domain\Model\Parts\Cab;

    use Configurator\Domain\Model\Parts\Part;

    final class Cab extends Part
    {
        public function __construct(
            private string $id,
            public CabLength $length,
            public CabHeight $height,
        ) {
        }

        public function getId(): string
        {
            return $this->id;
        }
    }
