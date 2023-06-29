<?php

namespace App\Http\Middleware;

use App\Services\WeatherDataServiceInterface;
use App\Services\WeatherDataServiceTest;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SingletonProof2
{

    private WeatherDataServiceInterface $weather_service;
    private string $something;

    public function __construct(WeatherDataServiceTest $weather_service, string $something ) {
        $this->weather_service = $weather_service;
        $this->something = $something;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $this->weather_service->setSomething($this->something);
       // $this->weather_service->bind(SingletonProof::class);

        return $next($request);
    }
}
