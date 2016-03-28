<?php
/**
 * Created by PhpStorm.
 * User: silviobarretto
 * Date: 08/03/16
 * Time: 13:46
 */

namespace CarreiraEad\Services;


use CarreiraEad\Repositories\CursoRepository;
use CarreiraEad\Validators\CursoValidator;
use Prettus\Validator\Exceptions\ValidatorException;

class CursoService
{
    /**
     * @var CursoRepository
     */
    protected $repository;

    /**
     * @var CursoValidator
     */
    protected $validator;

    public function __construct(CursoRepository $repository, CursoValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function create(array $data)
    {
        try {
            $this->validator->with($data)->passesOrFail();

            return $this->repository->create($data);
        } catch(ValidatorException $e) {
            return [
                'error' => true,
                'message' => $e->getMessageBag()
            ];
        }

        // Aqui posso colocar
        // enviar um email
        // disparar notificações
        // postar tweet
    }

    public function update(array $data, $id)
    {
        try {
            $this->validator->with($data)->passesOrFail();

            return $this->repository->update($data, $id);

        } catch (ValidationException $e) {
            return [
                'error' => true,
                'message' => $e->getMessageBag()
            ];
        }
    }
}