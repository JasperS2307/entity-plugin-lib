<?php
namespace Hostnet\FunctionalFixtures\Entity;

class DefaultParameters
{
    /**
     * @param bool $bool
     */
    public function oneParameter($bool = true)
    {
    }

    /**
     * @param bool   $bool
     * @param string $string
     */
    public function twoParameters($bool = true, $string = 'empty')
    {
    }

    /**
     * @param bool           $bool
     * @param string         $string
     * @param \DateTime|null $date
     */
    public function threeParameters($bool = true, $string = 'empty', \DateTime $date = null)
    {
    }
}
