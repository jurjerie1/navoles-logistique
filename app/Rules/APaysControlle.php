<?php

namespace App\Rules;

use App\Models\Pays;
use Illuminate\Contracts\Validation\Rule;

class APaysControlle implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    private $value = null;
    protected $errorMsg;

    public function __construct($value=null, $attribute=null)
    {
         $this->passes($value, $attribute);
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($value, $attribute)
    {
            // dd($value);
            $check = count(Pays::where('name', $value)->get());
            // dd($check);
            if ($check != 0){
                return true;
            }
        
        return false;
        
        
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Le pays rentré ne corespond pas a nos enregistrement';
    }
}
