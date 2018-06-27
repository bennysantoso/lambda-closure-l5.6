<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClosureController extends Controller
{
    public function showClosureOne()
    {
        $greetingFunction = $this->getGreetingFunction();
        return $greetingFunction("Fred");
    }

    private function getGreetingFunction()
    {
        $timeOfDay = "morning";
        $clock = "8 o'clock";

        return (function ($name) use ($timeOfDay, $clock) {
            $timeOfDay = ucfirst($timeOfDay);
            return ("Good $timeOfDay, $name! Now at $clock.");
        });
    }
}
