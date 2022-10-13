<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calcs extends Controller
{
    public function result($num1,$operator, $num2)
    {
        switch ($operator) {
    case 'addition':
        $answer = $num1 + $num2;
        break;
    case 'subtraction':
        $answer = $num1 - $num2;
        break;
    case 'multiplication':
        $answer = $num1 * $num2;
        break;
    case 'division':
        $answer = $num1 / $num2;
        break;
    default:
        echo "正しい演算子を指定して下さい";
        break;
}
        return view('message.result', ['answer' => $answer]);
    }
}
