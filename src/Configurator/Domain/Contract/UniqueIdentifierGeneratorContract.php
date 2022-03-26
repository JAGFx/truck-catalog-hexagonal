<?php

namespace Configurator\Domain\Contract;

    interface UniqueIdentifierGeneratorContract
    {
        public function generate(): string;
    }
