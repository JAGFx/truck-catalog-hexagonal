<?php

namespace Configurator\Domain\Contract\Infrastructure;

    interface UniqueIdentifierGeneratorContract
    {
        public function generate(): string;
    }
