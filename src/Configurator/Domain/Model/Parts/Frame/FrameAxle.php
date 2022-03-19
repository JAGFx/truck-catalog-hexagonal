<?php

/**
 * @author:    Emmanuel SMITH <hey@emmanuel-smith.me>
 * project:    truck-catalog-hexagonal
 * file:    FrameAxle.php
 * Date:    19/03/2022
 * Time:    21:09
 */

namespace Configurator\Domain\Model\Parts\Frame;

    final class FrameAxle
    {
        public function __construct(
            private FrameAxleMode $mode,
            private bool $isLiftable
        ) {
        }

        public function getMode(): FrameAxleMode
        {
            return $this->mode;
        }

        public function isMotorized(): bool
        {
            return $this->getMode() === FrameAxleMode::Motorized;
        }

        public function isDirectional(): bool
        {
            return $this->getMode() === FrameAxleMode::Directional;
        }

        public function isSimple(): bool
        {
            return $this->getMode() === FrameAxleMode::Simple;
        }

        public function isLiftable(): bool
        {
            return $this->isLiftable;
        }
    }
