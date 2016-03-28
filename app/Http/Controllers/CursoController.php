<?php

namespace CarreiraEad\Http\Controllers;

use CarreiraEad\Repositories\CursoRepository;
use CarreiraEad\Services\CursoService;
use Illuminate\Http\Request;
//use CarreiraEad\Http\Requests;

class CursoController extends Controller
{
    /**
     * @var CursoRepository
     */
    private $repository;

    /**
     * @var CursoService
     */
    private $service;

    /**
     * CursoController constructor.
     * @param CursoRepository $repository
     * @param CursoService $service
     */
    public function __construct(CursoRepository $repository, CursoService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return $this->repository->all();
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        return $this->service->create($request->all());
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return $this->repository->find($id);
    }

    /**
     * @param $id
     * @return int
     */
    public function destroy($id)
    {
        return $this->repository->delete($id);
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function update(Request $request, $id)
    {
        return $this->service->update($request->all(), $id);
    }
}