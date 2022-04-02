<?php

namespace Configurator\Domain\Parts\Factory;

    use Configurator\Domain\Model\Parts\Engine;
    use Configurator\Domain\Model\Parts\PartInterface;
    use Configurator\Domain\Parts\View\EngineView;
    use Configurator\Domain\ViewInterface;

    class EngineFactory extends PartFactory
    {
        /**
         * @param EngineView $view
         */
        public function make(ViewInterface $view, bool $save = true): PartInterface
        {
            $id = $this->uniqueIdentifierGenerator->generate();
            $engine = new Engine($id, $view->horsePower, $view->torque);

            return $this->save($engine, $save);
        }
    }
