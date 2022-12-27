<?php

namespace App\Filters;

use Illuminate\Http\Request;

class ApiFilter {
    protected $allowedFilter = [];

    protected $operatorMap = [];

    public function transform(Request $request) {
        $newQuery = [];

        foreach ($this->allowedFilter as $parm => $operators) {
            $query = $request -> query($parm);
            
            if (!isset($query)) {
                continue;
            }

            foreach ($operators as $operator) {
                if (isset($query[$operator])) {
                    $newQuery[] = [$parm, $this->operatorMap[$operator], $query[$operator]];
                }
            }
        }
        return $newQuery;
    }
}