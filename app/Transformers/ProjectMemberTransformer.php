<?php
/**
 * Created by PhpStorm.
 * User: silviobarretto
 * Date: 16/03/16
 * Time: 08:36
 */

namespace CarreiraEad\Transformers;

use CarreiraEad\Entities\User;
use League\Fractal\TransformerAbstract;


class ProjectMemberTransformer extends TransformerAbstract
{
    protected $defaultIncludes = [
        'user'
    ];

    public function transform(User $member)
    {
        return [
            'member_id' => $member->id,
            'project_id' => $member->project_id
        ];
    }

    public function includeUser(User $member){
        return $this->item($member->member, new MemberTransformer());
    }
}