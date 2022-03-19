<?php

/**
 * @author:    Emmanuel SMITH <hey@emmanuel-smith.me>
 * project:    truck-catalog-hexagonal
 * file:    Cab.php
 * Date:    19/03/2022
 * Time:    20:12
 */

namespace Configurator\Domain\Model\Parts\Cab;

   use Configurator\Domain\Contract\Model\PartInterface;

   final class Cab implements PartInterface
   {
       public function __construct(
           public CabLength $length,
           public CabHeight $height,
       ) {
       }
   }
