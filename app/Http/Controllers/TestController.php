<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function index() {
        return view('index');
    }

    public function  generateSegitiga(Request $request){
        $inputNumber = $request->inputNumber;

        if(!is_numeric($inputNumber) || $inputNumber <=0) {
            return response()->json(['error' => 'Input harus bernilai positif']);
        }

        $result = [];
        $length = strlen($inputNumber);

        for($i = 0; $i < $length; $i++) {
            $result []= substr($inputNumber, $i, 1 ) . str_repeat('0', $i+1);
        }

        return response()->json($result);
    }

    public function generateGanjil(Request $request)  {
        $inputNumber = $request->inputNumber;

        if(!is_numeric($inputNumber) || $inputNumber <=0) {
            return response()->json(['error' => 'Input harus bernilai positif']);
        }

        $result = [];

        for($i = 1; $i <= $inputNumber; $i+=2) {
            $result []=  $i;
        }

        return response()->json($result);
    }

    public function generatePrima(Request $request) {
        $inputNumber = $request->inputNumber;

        if(!is_numeric($inputNumber) || $inputNumber <=0) {
            return response()->json(['error' => 'Input harus bernilai positif']);
        }

        for($i = 2 ; $i <= $inputNumber; $i++){
            if($this->isPrime($i)){
                $result []= $i;
            }
        }
        return response()->json($result);

    }

    private function isPrime($number) {
        for($i = 2; $i < $number; $i++) {
            if($number % $i === 0){
                return false;
            }
        }

        return $number > 1;
    }
}
