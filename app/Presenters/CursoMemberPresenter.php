<?php
/**
 * Created by PhpStorm.
 * User: silviobarretto
 * Date: 16/03/16
 * Time: 09:32
 */

namespace CarreiraEad\Presenters;

use CarreiraEad\Transformers\CursoMemberTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class CursoMemberPresenter extends FractalPresenter
{

    public function getTransformer()
    {
        return new CursoMemberTransformer();
    }
}