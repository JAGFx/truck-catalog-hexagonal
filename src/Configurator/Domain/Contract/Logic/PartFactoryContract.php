<?php

namespace Configurator\Domain\Contract\Logic;

    use Configurator\Domain\Exception\UnableToBuildPartException;

    interface PartFactoryContract
    {
        /** @throws UnableToBuildPartException */
        public static function build(string $id, array $data): PartContract;
    }
