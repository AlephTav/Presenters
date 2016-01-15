<?php

namespace App\Utils\Presenters;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Used to present some collection.
 */
class UniversalPresenter extends ArrayPresenter
{
    /**
     * Constructor.
     *
     * @param Illuminate\Database\Eloquent\Collection $collection - a collection to present.
     * @access public
     * @throws InvalidArgumentException
     */
    public function __construct($data)
    {
        if (is_object($data))
        {
            if ($data instanceof Collection || $data instanceof Model)
            {
                $data = $data->toArray();
            }
            else
            {
                $data = (array)$data;    
            }
        }
        else if (!is_array($data))
        {
            throw new \InvalidArgumentException('Data must only be an object or array. ' . gettype($data) . ' was given.');
        }
        parent::__construct($data);
    }
}