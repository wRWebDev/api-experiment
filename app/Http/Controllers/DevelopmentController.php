<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\DevelopmentServiceInterface;

class DevelopmentController extends Controller
{
    public function __invoke(Request $request)
    {
        $queryParameter = 'postcode';
        $serviceInterface = app(DevelopmentServiceInterface::class);

        if (! $request->has($queryParameter)) {
            return $serviceInterface->fetch();
        }

        $query = $request->query($queryParameter);

        if (! $query) {
            return [];
        }

        return $serviceInterface->fetchByPostcode($query);
    }
}
