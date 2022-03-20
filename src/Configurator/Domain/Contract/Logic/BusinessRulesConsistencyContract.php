<?php

namespace Configurator\Domain\Contract\Logic;

    use Configurator\Domain\Exception\InvalidPartConsistencyException;

    interface BusinessRulesConsistencyContract
    {
        /**
         * @throws InvalidPartConsistencyException
         */
        public function validateConsistency(): void;
    }
