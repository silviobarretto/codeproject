<?php
/**
 * Created by PhpStorm.
 * User: silviobarretto
 * Date: 16/03/16
 * Time: 08:36
 */

namespace CarreiraEad\Transformers;

use CarreiraEad\Entities\ProjectNote;
use League\Fractal\TransformerAbstract;


class ProjectNoteTransformer extends TransformerAbstract
{
    //protected $defaultIncludes = ['members'];

    public function transform(ProjectNote $o)
    {
        return [
            'id' => $o->id,
            'project_id' => $o->project_id,
            'title' => $o->title,
            'note' => $o->note
        ];
    }
}