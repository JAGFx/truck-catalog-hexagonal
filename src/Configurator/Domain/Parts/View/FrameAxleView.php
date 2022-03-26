<?php
    
    namespace Configurator\Domain\Parts\View;
    
    use Configurator\Domain\Model\Parts\Frame\FrameAxleMode;

    class FrameAxleView
    {
    
        public function __construct(
            public string $mode,
            public bool $isLiftable
        ) {}
    
        public function isMotorized(): bool
        {
            return $this->mode === FrameAxleMode::Motorized->value;
        }
    
        public function isDirectional(): bool
        {
            return $this->mode === FrameAxleMode::Directional->value;
        }
    
        public function isSimple(): bool
        {
            return $this->mode === FrameAxleMode::Simple->value;
        }
    }
