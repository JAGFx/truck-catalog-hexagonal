<?php
    /**
     * @author:    Emmanuel SMITH <hey@emmanuel-smith.me>
     * project:    truck-catalog-hexagonal
     * file:    AssignmentParametersNotFoundException.php
     * Date:    26/03/2022
     * Time:    21:35
     */
    
    namespace Configurator\Domain\Assignment;
    
    class AssignmentParametersNotFoundException extends \Exception
    {
        const MESSAGE = 'The assignment parameter was not found';
    
        public function __construct(string $name) {
            parent::__construct( $this->message . ": $name" );
        }
    }