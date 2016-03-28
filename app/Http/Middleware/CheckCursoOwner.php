<?php

namespace CarreiraEad\Http\Middleware;

use Closure;
use CarreiraEad\Repositories\CursoRepository;
use LucaDegasperi\OAuth2Server\Facades\Authorizer;

class CheckCursoOwner
{
    /**
     * @var CursoRepository
     */
    private $repository;

    /**
     * CheckCursoOwner constructor.
     * @param CursoRepository $repository
     */
    public function __construct(CursoRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $userId = Authorizer::getResourceOwnerId();
        $cursoId = $request->curso;

        if($this->repository->isOwner($cursoId, $userId) == false) {
            return ['error' => 'Access forbidden'];
        }

        return $next($request);
    }
}
