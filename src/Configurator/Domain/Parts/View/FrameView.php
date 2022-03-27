<?php

namespace Configurator\Domain\Parts\View;

    use Configurator\Domain\Model\Brand;
    use Configurator\Domain\Model\Parts\Frame\FrameType;

    class FrameView extends AbstractPartView
    {
        public function __construct(
            public string $id,
            public PartType $type,
            public Brand $brand,
            public FrameType $frameType,
            /** @var FrameAxleView[] */
            public array $axles,
            public bool $isATractor,
            public bool $isStraight
        ) {
            parent::__construct($id, $type, $brand);
        }
    }
