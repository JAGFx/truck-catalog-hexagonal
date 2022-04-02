<?php

namespace Configurator\Domain;

    interface FactoryInterface
    {
        public function make(ViewInterface $view, bool $save = true): mixed;
    }
