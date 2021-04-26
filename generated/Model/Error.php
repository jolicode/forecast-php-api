<?php

/*
 * This file is part of JoliCode's Forecast PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Forecast\Api\Model;

class Error
{
    /**
     * @var string[]|null
     */
    protected $errors;

    /**
     * @return string[]|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * @param string[]|null $errors
     */
    public function setErrors(?array $errors): self
    {
        $this->errors = $errors;

        return $this;
    }
}
