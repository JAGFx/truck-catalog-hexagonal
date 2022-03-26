<?php

namespace Configurator\Domain\Parts\View;

    use Configurator\Domain\ViewInterface;

    abstract class AbstractPartView implements PartViewInterface, ViewInterface
    {
        public function __construct(
            public string $id,
            public string $type,
            public string $brand
        ) {
        }

        public function getId(): string
        {
            return $this->id;
        }

        public function getType(): string
        {
            return $this->type;
        }

        public function getBrand(): string
        {
            return $this->brand;
        }
    }
