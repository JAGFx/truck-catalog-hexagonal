<?php
    
    namespace Configurator\Domain;
    
    interface AssignmentInterface
    {
        public function execute(array $data): AssignmentResponse;
    }
