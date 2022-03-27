<?php

namespace Configurator\Domain\Parts\View;

    use Configurator\Domain\Model\Brand;

    interface PartViewInterface
    {
        public function getId(): string;

        public function getType(): PartType;

        public function getBrand(): Brand;
    }
