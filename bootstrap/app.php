<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Traits\ApiResponses;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {

//        config('app.env') === 'local' ? $e->getFile() . ': Line:' . $e->getLine() : null

        $exceptions->render(function (Exception $e, Request $request) {

            $className = get_class($e);

            if($className === ValidationException::class){
                foreach ($e->errors() as $key => $value){
                    foreach ($value as $message) {
                        $errors[] = [
                            'status' => 422,
                            'message' => $message,
                            'source' => $key
                        ];
                    }
                }

                return response()->json([
                    'errors' => $errors
                ]);
            }


        });

    })->create();
