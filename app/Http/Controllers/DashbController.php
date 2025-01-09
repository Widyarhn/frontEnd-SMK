<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashbController extends Controller
{
    public function index(Request $request)
    {
        dd($request);
    }

    public function index2PerusahaanController(Request $request)
    {
        //update filter daterange (punten ya mas tigin)
        if ($request->has('fromdate') && $request->has('duedate')) {
            $dateFrom = $request->input('fromdate');
            $dateTo = $request->input('duedate');
            $query->whereDate('companies.created_at', '>=', $dateFrom)
                ->whereDate('companies.created_at', '<=', $dateTo);
        }
    }


}
