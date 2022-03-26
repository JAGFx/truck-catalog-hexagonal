<?php
    
    namespace Configurator\Domain\Parts\View;
    
    use Configurator\Domain\Model\Parts\Frame\FrameType;

    class FrameView extends AbstractPartView
    {
        public function __construct(
            public string $id,
            public string $type,
            public string $brand,
            public string $frameType,
            /** @var FrameAxleView[] */
            public array $axles
        ) {
            parent::__construct( $id, $type, $brand );
        }
    
        public function isATractor(): bool
        {
            return $this->frameType === FrameType::Tractor->value;
        }
    
        public function isStraight(): bool
        {
            return $this->frameType === FrameType::Straight->value;
        }
    }
