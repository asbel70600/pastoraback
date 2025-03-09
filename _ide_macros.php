<?php

namespace Illuminate\Http
{
    /**
     * @method mixed validate(array $rules, ...$params)
     *
     * @see project://vendor/laravel/framework/src/Illuminate/Foundation/Providers/FoundationServiceProvider.php L147
     *
     * @method mixed validateWithBag(string $errorBag, array $rules, ...$params)
     *
     * @see project://vendor/laravel/framework/src/Illuminate/Foundation/Providers/FoundationServiceProvider.php L158
     *
     * @method mixed hasValidSignature($absolute = true)
     *
     * @see project://vendor/laravel/framework/src/Illuminate/Foundation/Providers/FoundationServiceProvider.php L176
     *
     * @method mixed hasValidRelativeSignature()
     *
     * @see project://vendor/laravel/framework/src/Illuminate/Foundation/Providers/FoundationServiceProvider.php L180
     *
     * @method mixed hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
     *
     * @see project://vendor/laravel/framework/src/Illuminate/Foundation/Providers/FoundationServiceProvider.php L184
     *
     * @method mixed hasValidRelativeSignatureWhileIgnoring($ignoreQuery = [])
     *
     * @see project://vendor/laravel/framework/src/Illuminate/Foundation/Providers/FoundationServiceProvider.php L188
     */
    class Request
    {
        /**
         * @param  array  $query  The GET parameters
         * @param  array  $request  The POST parameters
         * @param  array  $attributes  The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param  array  $cookies  The COOKIE parameters
         * @param  array  $files  The FILES parameters
         * @param  array  $server  The SERVER parameters
         * @param  string|resource|null  $content  The raw body data
         */
        public function __construct(array $query = [], array $request = [], array $attributes = [], array $cookies = [], array $files = [], array $server = [], $content = null) {}
    }
}
