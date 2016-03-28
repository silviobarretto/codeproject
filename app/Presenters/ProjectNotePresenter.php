<?php
/**
 * Created by PhpStorm.
 * User: silviobarretto
 * Date: 16/03/16
 * Time: 09:32
 */

namespace CarreiraEad\Presenters;

use CarreiraEad\Transformers\ProjectNoteTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class ProjectNotePresenter extends FractalPresenter
{
    public function getTransformer()
    {
        return new ProjectNoteTransformer();
    }
}