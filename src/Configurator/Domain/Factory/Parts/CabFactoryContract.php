<?php

namespace Configurator\Domain\Factory\Parts;

    use Configurator\Domain\Contract\Logic\PartFactoryContract;
    use Configurator\Domain\Exception\UnableToBuildPartException;
    use Configurator\Domain\Model\Parts\Cab\Cab;
    use Configurator\Domain\Model\Parts\Cab\CabHeight;
    use Configurator\Domain\Model\Parts\Cab\CabLength;

    final class CabFactoryContract implements PartFactoryContract
    {
        public static function build(string $id, array $data): Cab
        {
            $length = CabLength::tryFrom($data['length']);
            $height = CabHeight::tryFrom($data['height']);

            if (is_null($length)) {
                throw new UnableToBuildPartException(Cab::class, 'Invalid length', $data);
            }

            if (is_null($height)) {
                throw new UnableToBuildPartException(Cab::class,'Invalid height', $data);
            }

            return new Cab($id, $length, $height);
        }
    }
