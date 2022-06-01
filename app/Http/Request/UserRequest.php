<?php
namespace App\Http\Requests;

use Illminate\Validation\Rules;
use Orion\Http\Requests\Request;

class PostRequest extends Request
{
    public function commonRules() : array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:50',
                'min:3',
            ],

            'email' => [
                'required',
                'string',
                'email',
                'max:50',
                'min:3',
                'unique:users',
            ],

            'sobrenome' => [
                'required',
                'string',
                'max:50',
                'min:3',
            ],

            'data_nasc' => [
                'required',
                'string',
                'max:10',
                'min:8',
            ],

            'telefone' => [
                'float',
                'max:9',
                'min:9',
            ],

            'celular' => [
                'required'
                'float',
                'max:9',
                'min:9',
            ],

            'password' => [
                'required',
                'max:15',
                'min:6',
                Rules\Passwords::defaults()
            ],


        ];
    }

    public function storeRules() : array
    {
        return [
            'status' => 'required|in:draft,review'
        ];
    }
}