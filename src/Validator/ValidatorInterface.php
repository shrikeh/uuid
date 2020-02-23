<?php

/**
 * This file is part of the ramsey/uuid library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) Ben Ramsey <ben@benramsey.com>
 * @license http://opensource.org/licenses/MIT MIT
 */

declare(strict_types=1);

namespace Ramsey\Uuid\Validator;

/**
 * A validator validates a string as a proper UUID
 */
interface ValidatorInterface
{
    /**
     * Returns the regular expression pattern used by this validator
     *
     * @return string The regular expression pattern this validator uses
     *
     * @psalm-pure
     * @psalm-return non-empty-string
     */
    public function getPattern(): string;

    /**
     * Returns true if the provided string represents a UUID
     *
     * @param string $uuid The string to validate as a UUID
     *
     * @return bool True if the string is a valid UUID, false otherwise
     *
     * @psalm-pure
     */
    public function validate(string $uuid): bool;
}
