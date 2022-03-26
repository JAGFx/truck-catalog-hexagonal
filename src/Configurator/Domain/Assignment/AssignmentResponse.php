<?php

namespace Configurator\Domain\Assignment;

    class AssignmentResponse
    {
        public const STATUS_SUCCESS = 1;
        public const STATUS_ERROR = -1;

        public function __construct(
            private mixed $data,
            private int $status = self::STATUS_SUCCESS,
            private ?\Throwable $exception = null
        ) {
        }

        public function isSuccess(): bool
        {
            return $this->status === self::STATUS_SUCCESS;
        }

        public function isError(): bool
        {
            return $this->status === self::STATUS_ERROR;
        }

        public function getData(): mixed
        {
            return $this->data;
        }

        public function getException(): ?\Throwable
        {
            return $this->exception;
        }
    }
