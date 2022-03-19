<?php

/**
 * @author:    Emmanuel SMITH <hey@emmanuel-smith.me>
 * project:    truck-catalog-hexagonal
 * file:    GearboxFactory.php
 * Date:    19/03/2022
 * Time:    22:56
 */

namespace Configurator\Domain\Factory\Parts;

    use Configurator\Domain\Contract\Factory\PartFactory;
    use Configurator\Domain\Model\Parts\Gearbox\Gearbox;
    use Configurator\Domain\Model\Parts\Gearbox\GearboxType;

    final class GearboxFactory implements PartFactory
    {
        public static function create(array $data): Gearbox
        {
            $type = GearboxType::tryFrom($data['type']);
            $torque = $data['torque'] ?? Gearbox::TORQUE_MINIMAL;
            $gears = Gearbox::GEARS_MAXIMAL;
            $crawler = null;

            if (is_null($type)) {
                throw new \Exception();
            }

            switch ($type) {
                case GearboxType::Automatic:
                    $hasCrawler = $data['hasCrawler'] ?? false;
                    $crawler = ($hasCrawler)
                        ? 2
                        : null;
                    break;

                case GearboxType::Manual:
                    $gears = $data['gears'] ?? Gearbox::GEARS_MINIMAL;

                    if ($gears < Gearbox::GEARS_MINIMAL) {
                        throw new \Exception();
                    } elseif ($gears > Gearbox::GEARS_MAXIMAL) {
                        throw new \Exception();
                    }

                    break;
            }

            return new Gearbox($type, $torque, $gears, $crawler);
        }
    }
