<?php

namespace Configurator\Domain\Parts\View;

    use Configurator\Domain\Model\Brand;
    use Configurator\Domain\ViewInterface;

    interface PartViewInterface extends ViewInterface
    {
        public function getId(): string;

        public function getType(): PartType;

        public function getBrand(): Brand;
    }
