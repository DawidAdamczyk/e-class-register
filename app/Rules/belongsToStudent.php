<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\User;

class belongsToStudent implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $student = User::where(['id' => $value, 'role' => 'teacher'])->first();

        if ($student === null) {
            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'you can not add a mark to the teacher';
    }
}
