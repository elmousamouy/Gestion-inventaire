<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });


        DB::table('users')->insert(
            array(
                array(
                    'id' => '1',
                    'name' => "med oussama elmousaouy",
                    "email" => "medoussama.elmousaouy@elephant-vert.com",
                    "password" =>  Hash::make("Xwgpdz1ds5@"),
                    
                ),
                array(
                    'id' => '2',
                    'name' => "mohammed",
                    "email" => "mohammed.el-abidi@elephant-vert.com",
                    "password" =>  Hash::make("Xwgpdz1ds5@"),
                ),
                array(
                    'id' => '3',
                    'name' => "rouissi faical",
                    "email" => "faical.rouissi@elephant-vert.com",
                    "password" =>  Hash::make("Xwgpdz1ds5@"),
                ),
                array(
                    'id' => '5',
                    'name' => " bouslamti amine",
                    "email" => "amine.bouslamti@elephant-vert.com",
                    "password" =>  Hash::make("Lacq2021"),
                  
                ),
                
          
            )
        );
      
       
                      
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
