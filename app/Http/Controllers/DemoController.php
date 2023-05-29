<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class DemoController extends Controller
{
    /**
      * Task 1: Request Validation route
      */
     public function register(Request $request)
     {
         $validatedData = $request->validate([
             'name' => 'required|string|min:2',
             'email' => 'required|email',
             'password' => 'required|string|min:8',
         ]);

     }
    /**
     * Task 2: Request Redirect
     */

    /**
     * Task 3: Global Middleware
     */

    /**
     * Task 4: Route Middleware
     */

    /**
     * Task 5: Controller
     */

    /**
     * Task 6: Single Action Controller
     */

    /**
     * Task 7: Resource Controller
     */

    /**
     * Task 8: Blade Template Engine
     */






}
