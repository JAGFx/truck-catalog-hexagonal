<?php

namespace Configurator\Domain\Model\Parts;

    use Configurator\Domain\Contract\Logic\BusinessRulesConsistencyContract;
    use Configurator\Domain\Contract\Logic\PartContract;

    abstract class Part implements BusinessRulesConsistencyContract, PartContract
    {
    }
