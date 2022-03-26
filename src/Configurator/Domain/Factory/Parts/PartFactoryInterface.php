<?php

namespace Configurator\Domain\Factory\Parts;

    use Configurator\Domain\Exception\UnableToBuildPartException;
    use Configurator\Domain\Model\Parts\PartInterface;

    interface PartFactoryInterface
    {
        /** @throws UnableToBuildPartException */
        public static function build(string $id, array $data): PartInterface;
    }
