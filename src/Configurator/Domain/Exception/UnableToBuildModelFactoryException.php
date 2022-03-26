<?php

namespace Configurator\Domain\Exception;

    use Configurator\Domain\FactoryExceptionInterface;

    class UnableToBuildModelFactoryException extends \Exception implements FactoryExceptionInterface
    {
        public const MESSAGE = 'Unable to find the correct model to build with passed data';

        public function __construct(
            private string $type,
            private array $data
        ) {
            parent::__construct(self::MESSAGE);
        }

        public function getType(): string
        {
            return $this->type;
        }

        public function getData(): array
        {
            return $this->data;
        }
    }
