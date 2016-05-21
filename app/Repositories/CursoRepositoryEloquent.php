<?php
/**
 * Created by PhpStorm.
 * User: silviobarretto
 * Date: 08/03/16
 * Time: 09:52
 */

namespace CarreiraEad\Repositories;


use CarreiraEad\Entities\Curso;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use CarreiraEad\Presenters\CursoPresenter;

class CursoRepositoryEloquent extends BaseRepository implements CursoRepository
{
    protected $fieldSearchable =[
        'nome'
    ];

    public function model()
    {
        return Curso::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function presenter()
    {
        return CursoPresenter::class;
    }
}