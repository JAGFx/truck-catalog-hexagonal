<?php

namespace Configurator\Domain\Factory\Parts;

    use Configurator\Domain\Contract\Logic\PartFactoryContract;
    use Configurator\Domain\Exception\UnableToBuildPartException;
    use Configurator\Domain\Model\Parts\Frame\Frame;
    use Configurator\Domain\Model\Parts\Frame\FrameType;

    final class FrameFactoryContract implements PartFactoryContract
    {
        public static function build(string $id, array $data): Frame
        {
            $axlesData = $data['axles'] ?? [];
            $axles = [];
            $type = FrameType::tryFrom($data['type']);

            if (is_null($type)) {
                throw new UnableToBuildPartException(Frame::class, 'Invalid type', $data);
            }

            foreach ($axlesData as $axle) {
                $axles[] = FrameAxleFactory::create($axle);
            }

            return new Frame($id, $type, $axles);
        }
    }
