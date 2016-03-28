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


class MemberTransformer extends TransformerAbstract
{

    public function transform(User $member)
    {
        return [
            'member_id' => $member->id,
            'name' => $member->name,
        ];
    }
}