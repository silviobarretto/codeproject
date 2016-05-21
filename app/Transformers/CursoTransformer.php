<?php
/**
 * Created by PhpStorm.
 * User: silviobarretto
 * Date: 16/03/16
 * Time: 08:36
 */

namespace CarreiraEad\Transformers;

use CarreiraEad\Entities\Curso;
use League\Fractal\TransformerAbstract;


class CursoTransformer extends TransformerAbstract
{
    protected $defaultIncludes = ['members', 'client', 'owner'];

    public function transform(Curso $curso)
    {
        return [
            'id' => $curso->id,
            'client_id' => $curso->client_id,
            'owner_id' => $curso->owner_id,
            'nome' => $curso->nome,
            'validade' => $curso->validade,
            'url' => $curso->url,
            'data_adicao' => $curso->data_adicao,
            'valor' => $curso->valor,
            'is_member' => $curso->owner_id != \Authorizer::getResourceOwnerId()
        ];
    }

    public function includeMembers(Curso $curso)
    {
        return $this->collection($curso->members, new CursoMemberTransformer());
    }

    public function includeClient(Curso $curso)
    {
        return $this->item($curso->client, new ClientTransformer());
    }

    public function includeOwner(Curso $curso)
    {
        return $this->item($curso->owner, new UserTransformer());
    }
}