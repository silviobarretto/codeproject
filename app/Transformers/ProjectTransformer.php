<?php
/**
 * Created by PhpStorm.
 * User: silviobarretto
 * Date: 16/03/16
 * Time: 08:36
 */

namespace CodeProject\Transformers;

use CodeProject\Entities\Project;
use CodeProject\Entities\User;
use League\Fractal\TransformerAbstract;


class ProjectTransformer extends TransformerAbstract
{
    protected $defaultIncludes = ['members', 'client', 'owner'];

    public function transform(Project $model)
    {
        return [
            'id' => $model->id,
            'client_id' => $model->client_id,
            'owner_id' => $model->owner_id,
            'name' => $model->name,
            'description' => $model->description,
            'progress' => $model->progress,
            'status' => $model->status,
            'due_date' => $model->due_date,
            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }

    public function includeMembers(Project $model)
    {
        return $this->collection($model->members, new ProjectMemberTransformer());
    }

    public function includeClient(Project $model)
    {
        return $this->item($model->client, new ClientTransformer());
    }

    public function includeOwner(Project $model)
    {
        return $this->item($model->owner, new UserTransformer());
    }
}