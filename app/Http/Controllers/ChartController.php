<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;
use App\User;
use DB;

class ChartController extends Controller
{
    public function bar()
    {
    	$users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
    						->get();

    	$chart = Charts::database($users, 'bar', 'highcharts')
    						->title("Monthly new Registered users")
    						->elementLabel("Total users")
    						->dimensions(1000,500)
    						->responsive(false)
    						->groupByMonth(date('Y'), true);

   

    		return view('chart', compact('chart'));


    }

  //   public function bar2()
  //   {
		// $user = DB::table('users')->get();    	
  //   }

    public function pie()
    {
   		$chart = Charts::create('donut', 'highcharts')
    			->title('Nice Chart')
    			->labels(['First', 'Second', 'Third'])
    			->values([5,10,20])
    			->dimensions(1000,500)
    			->responsive(false); 	

    		return view('pie', compact('chart'));
    }

    public function donut()
    {
    	$chart = Charts::create('donut', 'highcharts')
    					->title('My nice chart')
    					->labels(['First', 'Second', 'Third'])
					    ->values([5,10,20])
					    ->dimensions(1000,500)
					    ->responsive(false);

			return view('donut', compact('chart'));
    }

    public function line()
    {
    	$chart = Charts::create('line', 'highcharts')
					    ->title('My nice chart')
					    ->elementLabel('My nice label')
					    ->labels(['First', 'Second', 'Third'])
					    ->values([5,10,20])
					    ->dimensions(1000,500)
					    ->responsive(false);

    	return view('line', compact('chart'));
    }

    public function area()
    {
    	$chart = Charts::create('area', 'highcharts')
					    ->title('My nice chart')
					    ->elementLabel('My nice label')
					    ->labels(['First', 'Second', 'Third'])
					    ->values([5,10,20])
					    ->dimensions(1000,500)
					    ->responsive(false);	
    
			return view('area', compact('chart'));
    }

    public function spline()
    {
    	$chart = Charts::multi('areaspline', 'highcharts')
					    ->title('My nice chart')
					    ->colors(['#ff0000', '#ffffff'])
					    ->labels(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday','Saturday', 'Sunday'])
					    ->dataset('John', [3, 4, 3, 5, 4, 10, 12])
					    ->dataset('Jane',  [1, 3, 4, 3, 3, 5, 4]);
    
    	return view('spline', compact('chart'));
    }

    public function geo()
    {
    	$chart = Charts::create('geo', 'highcharts')
					    ->title('My nice chart')
					    ->elementLabel('My nice label')
					    ->labels(['ES', 'FR', 'RU'])
					    ->colors(['#C5CAE9', '#283593'])
					    ->values([5,10,20])
					    ->dimensions(1000,500)
					    ->responsive(false);
    
			return view('geo', compact('chart'));
    }

    public function percentage()
    {
    	$chart = Charts::create('percentage', 'justgage')
						    ->title('My nice chart')
						    ->elementLabel('My nice label')
						    ->values([65,0,100])
						    ->responsive(false)
						    ->height(300)
						    ->width(0);
    
			return view('percent', compact('chart'));
    }

    public function gauge()
    {
    	$chart =   Charts::create('gauge', 'canvas-gauges')
						    ->title('My nice chart')
						    ->elementLabel('My nice label')
						    ->values([65,0,100])
						    ->responsive(false)
						    ->height(300)
						    ->width(0);

			return view('gauge', compact('chart'));
    }
}
