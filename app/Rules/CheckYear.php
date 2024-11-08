<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CheckYear implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $currentYear = Date("Y");
        if ($currentYear - $value < 0 || $value < 1895) {
            $fail('The year value must be between 1895 and ' . $currentYear);
        }
    }
}
