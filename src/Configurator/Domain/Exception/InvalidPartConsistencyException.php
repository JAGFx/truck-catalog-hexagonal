<?php

namespace Configurator\Domain\Exception;

    use Configurator\Domain\Contract\Logic\PartContract;

    class InvalidPartConsistencyException extends \Exception
    {
        public const MESSAGE = 'This part do not have a valid consistency';

        public function __construct(
            private string $description,
            private PartContract $part
        ) {
            parent::__construct(self::MESSAGE.': '.$description);
        }

        public function getDescription(): string
        {
            return $this->description;
        }

        public function getPart(): PartContract
        {
            return $this->part;
        }
    }
