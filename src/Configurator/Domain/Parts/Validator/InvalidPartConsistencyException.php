<?php

namespace Configurator\Domain\Parts\Validator;

    use Configurator\Domain\Exception\ValidatorException;
    use Configurator\Domain\Model\Parts\PartInterface;

    class InvalidPartConsistencyException extends ValidatorException
    {
        public const MESSAGE = 'This part do not have a valid consistency';

        public function __construct(
            private string $description,
            private PartInterface $part
        ) {
            parent::__construct(self::MESSAGE.': '.$description);
        }

        public function getDescription(): string
        {
            return $this->description;
        }

        public function getPart(): PartInterface
        {
            return $this->part;
        }
    }
