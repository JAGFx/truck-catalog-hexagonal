<?php

namespace Configurator\Domain\Factory\Parts;

    use Configurator\Domain\Model\Parts\Frame\FrameAxle;
    use Configurator\Domain\Model\Parts\Frame\FrameAxleMode;

    final class FrameAxleFactory
    {
        public static function create(array $data): FrameAxle
        {
            $axleMode = FrameAxleMode::tryFrom($data['mode'] ?? FrameAxleMode::Simple);
            $liftable = $data['liftable'] ?? false;

            return new FrameAxle($axleMode, $liftable);
        }
    }
