<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LambdaController extends Controller
{
    public function showLambdaOne()
    {
        $makeGreeting = function ($name, $timeOfDay) {
            return ("Good $timeOfDay, $name!");
        };

        return view('lambda')->with('greeting', $makeGreeting('Dani', 'morning'));
    }

    public function showLambdaTwo()
    {
        $makeGreeting = array(

            function () {
                echo "You got a bag of toffees!";
            },

            function () {
                echo "You got a toy car!";
            },

            function () {
                echo "You got some balloons!";
            }
        );

        $choice = rand(0, 2);

        return view('lambda', ['greeting' => $makeGreeting[$choice]()]);
    }
}
