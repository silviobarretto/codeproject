<?php
/**
 * Created by PhpStorm.
 * User: silviobarretto
 * Date: 08/03/16
 * Time: 09:52
 */

namespace CodeProject\Repositories;


use CodeProject\Entities\ProjectMember;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use CodeProject\Presenters\ProjectMemberPresenter;

class ProjectMemberRepositoryEloquent extends BaseRepository implements ProjectMemberRepository
{

    public function model()
    {
        return ProjectMember::class;
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
        return ProjectMemberPresenter::class;
    }

    public function getMember($project_id, $member_id)
    {
        return ProjectMember::where(['project_id'=>$project_id,'user_id'=>$member_id])->get();
    }
}