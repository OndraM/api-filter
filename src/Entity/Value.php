<?php declare(strict_types=1);

namespace Lmc\ApiFilter\Entity;

use Lmc\ApiFilter\Assertion;

class Value
{
    /** @var mixed */
    private $value;

    /** @param mixed $value */
    public function __construct($value)
    {
        Assertion::notIsInstanceOf(
            $value,
            self::class,
            'Value must not contain another Value. Extract a value from Value or use it directly.'
        );
        $this->value = $value;
    }

    /** @return mixed */
    public function getValue()
    {
        return $this->value;
    }
}
