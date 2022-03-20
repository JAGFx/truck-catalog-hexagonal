<?php
    
    namespace Configurator\Domain\Contract\Logic;
    
    interface PartViewContract
    {
        public function getId(): string;
        public function getType(): string;
        public function getProperties(): array;
    }