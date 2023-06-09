<?php

namespace App\Filament\Resources\EmployeeResource\Widgets;

use App\Models\Country;
use App\Models\Employee;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class EmployeesStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        $mx =Country::where('country_code','mx')->withCount('employees')->first();
        $us =Country::where('country_code','us')->withCount('employees')->first();
        $ar =Country::where('country_code','ar')->withCount('employees')->first();
        return [
            Card::make('Total Empleados', Employee::all()->count()),
            Card::make($mx->name . ' Empleados' , $mx->employees_count),
            Card::make($us->name . ' Empleados' , $mx->employees_count),
            //Card::make($ar->name .'Empleados' , $mx->employees_count),
        ];
    }
}
