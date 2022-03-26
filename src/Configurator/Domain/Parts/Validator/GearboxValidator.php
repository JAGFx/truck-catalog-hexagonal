<?php
    
    namespace Configurator\Domain\Parts\Validator;
    
    use Configurator\Domain\Model\Parts\Gearbox\Gearbox;
    use Configurator\Domain\ValidatorInterface;

    class GearboxValidator implements ValidatorInterface
    {
        /**
         * @param Gearbox $model
         *
         * @throws InvalidPartConsistencyException
         */
        public function validate(mixed $model): void
        {
            if ($model->getGears() < Gearbox::GEARS_MINIMAL) {
                throw new InvalidPartConsistencyException('Gear must be greater or equal than minimal', $model);
            }
    
            if ($model->getGears() > Gearbox::GEARS_MAXIMAL) {
                throw new InvalidPartConsistencyException('Gear must be less or equal than maximal', $model);
            }
    
            if ($model->isManual() && $model->hasCrawlerAvailable()) {
                throw new InvalidPartConsistencyException('A manual gearbox cant have crawler', $model);
            }
    
            if ($model->isAutomatic() && $model->getCrawler() !== 2) {
                throw new InvalidPartConsistencyException('Invalid crawler count', $model);
            }
        }
    }
