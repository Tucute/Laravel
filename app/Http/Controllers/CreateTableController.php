<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class CreateTableController extends Controller
{
    public function Table() {
        if (!Schema::hasTable('Products1')) {
            Schema::create('Products1',function($table){
                $table ->increments('id');
                $table ->string('name');
                $table ->string('image');
                $table ->string('description');
                $table ->integer('quantity');
                $table ->date('date');
                $table ->timestamps();
            }); 
        }
        if (!Schema::hasTable('table_name')) {
            Schema::create('Products2',function($table){
                $table ->increments('id');
                $table ->string('name');
                $table ->string('image');
                $table ->string('description');
                $table ->integer('quantity');
                $table ->date('date');
                $table ->timestamps();
            }); 
        }
        echo 'đã tạo bảng' ;
    }
}
