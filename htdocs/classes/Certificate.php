<?php

    class Certificate{

        private int $expiresAt;
        private string $signatory;


    // METHODE

        public function __construct(array $certificate)
        {
            $this->hydrate($certificate);
        }

        public function hydrate(array $certificate)
        {
            foreach ($certificate as $key => $value) {
                $method = 'set' . str_replace(' ', '', ucwords(str_replace('', ' ', $key)));
                if (method_exists($this, $method)) {
                    $this->$method($value);
                }
            }
            return $method;
        }


    // GETTER & SETTER

        public function getExpiresAt()
        {
            return $this->expiresAt;
        }

        public function setExpiresAt($expiresAt)
        {
            $this->expiresAt = $expiresAt;
        }


        public function getSignatory()
        {
            return $this->signatory;
        }

        public function setSignatory($signatory)
        {
            $this->signatory = $signatory;
        }

    }