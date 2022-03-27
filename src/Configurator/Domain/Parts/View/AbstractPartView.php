<?php

namespace Configurator\Domain\Parts\View;

    use Configurator\Domain\Model\Brand;
    use Configurator\Domain\ViewInterface;

    abstract class AbstractPartView implements PartViewInterface, ViewInterface
    {
        public function __construct(
            public string $id,
            public PartType $type,
            public Brand $brand
        ) {
        }

        public function getId(): string
        {
            return $this->id;
        }

        public function getType(): PartType
        {
            return $this->type;
        }

        public function getBrand(): Brand
        {
            return $this->brand;
        }
    }
