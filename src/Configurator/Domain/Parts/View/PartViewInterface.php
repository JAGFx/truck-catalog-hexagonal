<?php

namespace Configurator\Domain\Parts\View;

    interface PartViewInterface
    {
        public function getId(): string;

        public function getType(): string;

        public function getBrand(): string;
    }
