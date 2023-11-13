<?php

namespace App\Entities;

class ApiResult implements \JsonSerializable
{
    public function __construct(protected array $data = [], protected array $errors = [])
    {
    }

    public function isSuccess(): bool
    {
        return !count($this->errors);
    }

    public function addError(string $error): static
    {
        $this->errors[] = $error;
        return $this;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function setData(array $data): static
    {
        $this->data = $data;
        return $this;
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function jsonSerialize(): array
    {
        $result = [
            'success' => $this->isSuccess(),
            'data' => $this->getData()
        ];
        if (!$this->isSuccess()) {
            $result['errors'] = $this->getErrors();
        }

        return $result;
    }
}
