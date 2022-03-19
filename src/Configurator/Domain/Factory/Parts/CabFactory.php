<?php

namespace Configurator\Domain\Factory\Parts;

    use Configurator\Domain\Contract\Factory\PartFactory;
    use Configurator\Domain\Model\Parts\Cab\Cab;
    use Configurator\Domain\Model\Parts\Cab\CabHeight;
    use Configurator\Domain\Model\Parts\Cab\CabLength;

    final class CabFactory implements PartFactory
    {
        public static function create(array $data): Cab
        {
            $length = CabLength::tryFrom($data['length']);
            $height = CabHeight::tryFrom($data['height']);

            if (is_null($length)) {
                throw new \Exception('Invalid length');
            }

            if (is_null($height)) {
                throw new \Exception('Invalid height');
            }

            return new Cab($length, $height);
        }
    }
