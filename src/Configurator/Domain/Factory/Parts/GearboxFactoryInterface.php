<?php

/**
 * @author:    Emmanuel SMITH <hey@emmanuel-smith.me>
 * project:    truck-catalog-hexagonal
 * file:    GearboxFactory.php
 * Date:    19/03/2022
 * Time:    22:56
 */

namespace Configurator\Domain\Factory\Parts;

    use Configurator\Domain\Exception\UnableToBuildPartException;
    use Configurator\Domain\Model\Parts\Gearbox\Gearbox;
    use Configurator\Domain\Model\Parts\Gearbox\GearboxType;

    final class GearboxFactoryInterface implements PartFactoryInterface
    {
        public static function build(string $id, array $data): Gearbox
        {
            $type = GearboxType::tryFrom($data['type']);
            $torque = $data['torque'] ?? Gearbox::TORQUE_MINIMAL;
            $gears = $data['gears'] ?? Gearbox::GEARS_MINIMAL;
            $crawler = null;

            if (is_null($type)) {
                throw new UnableToBuildPartException(Gearbox::class, 'Invalid type', $data);
            }

            if ($type === GearboxType::Automatic) {
                $hasCrawler = $data['hasCrawler'] ?? false;
                $crawler = ($hasCrawler)
                    ? 2
                    : null;
            }

            return new Gearbox($id, $type, $torque, $gears, $crawler);
        }
    }
