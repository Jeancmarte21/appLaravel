<?php

namespace appVS\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Laravel\LavachartsFacade as Lava;


class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        $datatable = Lava::DataTable();
        $datatable->addStringColumn('Name');
        $datatable->addNumberColumn('Donuts Eaten');
        $datatable->addRows([
            ['Michael',   5],
            ['Elisa',     7],
            ['Robert',    3],
            ['John',      2],
            ['Jessica',   6],
            ['Aaron',     1],
            ['Margareth', 8]
        ]);
        $pieChart = Lava::PieChart('Donuts', $datatable, [
            'width' => 400,
            'pieSliceText' => 'value'
        ]);
        $filter  = Lava::NumberRangeFilter(1, [
            'ui' => [
                'labelStacking' => 'vertical'
            ]
        ]);
        $control = Lava::ControlWrapper($filter, 'control');
        $chart   = Lava::ChartWrapper($pieChart, 'chart');
        Lava::Dashboard('Donuts')->bind($control, $chart);






        return view('home');
    }
/*
    public function someAdminStuff(Request $request)
    {
        $request->user()->authorizeRoles(‘admin’);
        return view(‘some.view’);
    }
    */

}
