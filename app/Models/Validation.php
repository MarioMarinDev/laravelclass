<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Validation extends Model {
    use HasFactory;

    /**
     * The model's default values for attributes
     *
     * @var array
     */
    protected $attributes = [
        'active' => true
    ];

    /* ==================================================
     VALIDATION
    ================================================== */
    /**
     * Get this model validation rules
     *
     * @param string $scenario=null
     * @return array
     */
    static function getValidationRules($scenario=null) {
        $rules = [
            'name' => ['required', 'string', 'unique:validation', 'min:3', 'max:20'],
            'description' => ['string', 'nullable', 'max:100'],
            'value' => ['numeric', 'nullable'],
            'file' => ['file', 'mimes:txt', 'nullable'],
            'active' => ['boolean'],
        ];
        if($scenario == 'edit') {
            $rules['name'] = ['sometimes', 'stirng', 'unique:validation', 'min:3', 'max:20'];
        }
        return $rules;
    }

    /**
     * Validate params with rules
     *
     * @param array $params
     * @param string $scenario=null
     * @return Validator
     */
    static function validate($params, $scenario=null) {
        $rules = self::getValidationRules($scenario);
        Validator::validate($params, $rules);
    }

}
