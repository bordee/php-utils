<?php

namespace Utils;

class Resolver
{
    
    /**
     * @var string[]
     */
    protected $config = array();
    
    /**
     * @param string[] $config
     * @param string $delimiter
     */
    public function __construct(array $config, $delimiter = "")
    {
        foreach ($config as $token => $replacement) {
            $this->addToken($token, $replacement, $delimiter);
        }
    }

    /**
     * @param string $token
     * @param string $replacement
     * @param string $delimiter
     */
    public function addToken($token, $replacement, $delimiter)
    {
        $this->config[$this->getFullToken($token, $delimiter)] = $replacement;
    }
    
    /**
     * @param string $path
     * @return string
     */
    
    public function resolve($path)
    {
        return str_replace(array_keys($this->config), $this->config, $path);
    }
    
    /**
     * @param string $token
     * @param string $delimiter
     * @return string
     */
    protected function getFullToken($token, $delimiter)
    {
        return $delimiter . $token . $delimiter;
    }
}

