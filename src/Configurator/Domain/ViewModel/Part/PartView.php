<?php
    
    namespace Configurator\Domain\ViewModel\Part;
    
    use Configurator\Domain\Contract\Logic\PartViewContract;

    final class PartView implements PartViewContract
    {
        public function __construct(
            public string $id,
            public string $type,
            public array $properties
        ) {}
    
        public function getId(): string
        {
            return $this->id;
        }
        
        public function getType(): string
        {
            return $this->type;
        }
    
        public function getProperties(): array
        {
            return $this->properties;
        }
    }