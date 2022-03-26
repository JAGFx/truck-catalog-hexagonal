<?php

namespace Configurator\Domain;

    interface ValidatorInterface
    {
        public function validate(mixed $model): void;
    }
