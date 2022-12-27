<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class GuestBookFilter extends ApiFilter {
    protected $allowedFilter = [
        'name' => ['eq'],
        'message' => ['eq']
    ];

    protected $operatorMap = [
        'eq' => '='
    ];
}