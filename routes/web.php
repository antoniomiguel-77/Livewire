<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\{

    ShowTweets
};

Route::get('/',ShowTweets::class);
