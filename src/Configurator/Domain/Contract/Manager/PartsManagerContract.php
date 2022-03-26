<?php

namespace Configurator\Domain\Contract\Manager;

    use Configurator\Domain\Model\Brand;
    use Configurator\Domain\Model\Parts\PartInterface;

    interface PartsManagerContract
    {
        /** @return PartInterface[] */
        public function listAllByBrand(Brand $brand): array;
    }
