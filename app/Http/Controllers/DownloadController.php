<?php
/**
 * Created by PhpStorm.
 * User: xd
 * Date: 2017/9/11
 * Time: 11:12
 */

namespace App\Http\Controllers;


class DownloadController extends Controller
{
    public function download(){
        $pathToFile='test.txt';
        return response()->download($pathToFile);
    }

}