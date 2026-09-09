<?php

/**
 * Task priority.
 */

namespace App\Entity\Enum;

/**
 * Enum Priority.
 */
enum Priority: int
{
    case LOW = 1;
    case MEDIUM = 2;
    case HIGH = 3;

    /**
     * Get the priority label.
     *
     * @return string Priority label
     */
    public function label(): string
    {
        return match ($this) {
            Priority::LOW => 'label.priority_low',
            Priority::MEDIUM => 'label.priority_medium',
            Priority::HIGH => 'label.priority_high',
        };
    }
}
