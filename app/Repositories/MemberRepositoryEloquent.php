<?php
/**
 * Created by PhpStorm.
 * User: silviobarretto
 * Date: 08/03/16
 * Time: 09:52
 */

namespace CarreiraEad\Repositories;


use CarreiraEad\Entities\User;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use CarreiraEad\Presenters\UserPresenter;

class MemberRepositoryEloquent extends BaseRepository implements UserRepository
{
    protected $fieldSearchable =[
        'name'
    ];

    public function model()
    {
        return User::class;
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
        return UserPresenter::class;
    }
}