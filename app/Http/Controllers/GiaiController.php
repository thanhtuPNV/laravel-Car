<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GiaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function message()
    {
        return [
            'a.required' => 'A bắt buộc phải nhập',
            'b.required' => 'B bắt buộc phải nhập',
            'a.integer' => 'A phải là số',
            'b.integer' => 'B phải là số',
        ];
    }

    public function caculator(Request $request)
    {
        $validated = $request->validate([
            'a' => 'required|integer',
            'b' => 'required|integer',
        ],$this->message());
        $a = $request->query('a');
        $b = $request->query('b');
        $caculator = $request->query('caculator');

        switch ($caculator) {
            // case '/' & $b == 0 :
            //     $result = "Khong the thuc hien phep tinh nay!";
            //     break;
            case '+':
                $result = $a + $b;
                break;
            case '-':
                $result = $a - $b;
                break;
            case '*':
                $result = $a * $b;
                break;
            case '/':
                if($b == 0){
                    $result = "Khong the thuc hien phep tinh nay!";
                    break;
                }
                else{
                    $result = $a / $b;
                    break;
                }
            default:
                $result = "Ban phai chon phep tinh!";
                break;
        }

        // if($caculator == "+"){
        //     $result = $a + $b;
        // }
        // elseif($caculator == "-"){
        //     $result = $a - $b;
        // }
        // elseif($b == 0 & $caculator == "/"){
        //     $result = "Không thể thực hiện phép tính này!";
        // }
        // elseif($caculator == "*"){
        //     $result = $a * $b;
        // }
        // else{
        //     $result = $a / $b;
        // }

        // if ($a == 0 ){
        //     if ($b == 0){
        //         $result = 'Phương trình vô số nghiệm!';
        //     }
        //     else{
        //         $result = 'Phương trình vô nghiệm!';
        //     }
        // }
        // else{
        //     $nghiem = round(-$b/$a,2);
        //     $result = 'Phương trình có nghiệm x là: ' .$nghiem;
        // }
        return view('caculator', compact('a','b', 'caculator','result'));
    }
}
