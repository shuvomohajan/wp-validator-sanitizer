<?php
namespace BitApps\WPValidator\Rules;

use BitApps\WPValidator\Rule;

class RequiredRule extends Rule
{

    protected $message = 'The :attribute field is required';

    protected static $attribute;

    public function validate($value, $field = null, $params = [])
    {
        // if (is_string($value)) {
        //     return !mb_strlen(trim($value), 'UTF-8') > 0;
        // }
        // if (is_array($value)) {
        //     return !count($value) > 0;
        // }
        // return is_null($value);
        return !empty($value);
    }

    public function message($attributeLabel)
    {
        return str_replace(":attribute", $attributeLabel, $this->message);
        // return $this->message();
    }
    // public function ab()
    // {
    //     $data = [
    //         'name' => [
    //             'required' => 'The Name field is required',
    //         ],
    //         'age' => [
    //             'required' => 'The Name field is required',
    //         ],
    //     ];
    // }
}
