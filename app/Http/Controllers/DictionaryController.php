<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    public function translate(Request $request)
    {
        $word = $request->name;
        $dictionary = array('Hello' => 'Xin chào', 'Googbye' => 'Tạm biệt', 'book' => 'quyển sách', 'red' => 'màu đỏ', 'blue' => 'màu xanh');

        foreach ($dictionary as $key => $value) {
            if ($word == $key) {
                $result = $value;
            }
        }

        if (!isset($result)) {
            return view('error', compact('word'));
        }

        return view('display', compact('result'));
    }
}
