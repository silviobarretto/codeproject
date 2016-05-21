<?php
/**
 * Created by PhpStorm.
 * User: silviobarretto
 * Date: 08/03/16
 * Time: 09:52
 */

namespace CarreiraEad\Repositories;


use CarreiraEad\Entities\CursoMember;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use CarreiraEad\Presenters\CursoMemberPresenter;

class CursoMemberRepositoryEloquent extends BaseRepository implements CursoMemberRepository
{

    public function model()
    {
        return CursoMember::class;
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
        return CursoMemberPresenter::class;
    }

    public function getMember($project_id, $member_id)
    {
        return CursoMember::where(['curso_id'=>$curso_id,'user_id'=>$member_id])->get();
    }
}