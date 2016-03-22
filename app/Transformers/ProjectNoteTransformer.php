<?php
/**
 * Created by PhpStorm.
 * User: silviobarretto
 * Date: 16/03/16
 * Time: 08:36
 */

namespace CodeProject\Transformers;

use CodeProject\Entities\ProjectNote;
use League\Fractal\TransformerAbstract;


class ProjectNoteTransformer extends TransformerAbstract
{
    //protected $defaultIncludes = ['members'];

    public function transform(ProjectNote $model)
    {
        return [
            'id' => $model->id,
            'project_id' => $model->project_id,
            'title' => $model->title,
            'note' => $model->note,
            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}