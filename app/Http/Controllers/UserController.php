<?php

namespace App\Http\Controllers;
use App\Models\User;
use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\Controller;

class UserController extends Controller
{

    use DisableAuthorization;
    //
    protected $model = User::class;
}
