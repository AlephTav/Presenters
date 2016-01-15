<?php

namespace App\Utils\Presenters;

use Illuminate\Database\Eloquent\Model;

/**
 * Used to present some model info.
 */
class ModelPresenter extends ArrayPresenter
{
    /**
     * Constructor.
     *
     * @param Illuminate\Database\Eloquent\Model $model - a model to present.
     * @access public
     */
    public function __construct(Model $model)
    {
        parent::__construct($model->toArray());
    }
}