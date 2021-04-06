<?php

namespace Core;

abstract class BaseController {

    private $service = [];
    private $config = [];

    public function __construct(array $config = [], array $service = []) {
        $this->config = $config;
        foreach ($service as $serviceName => $serviceInstance) {
            $this->service[$serviceName] = $serviceInstance;
        }
    }

    final public function getService(string $serviceName) {
        if (isset($this->service[$serviceName])) {
            return $this->service[$serviceName];
        }
    }

    final public function getConfiguration() {
        return $this->config;
    }

}
