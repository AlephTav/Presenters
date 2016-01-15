<?php

namespace AlephTools\Data\Presenters;

use Illuminate\Database\Eloquent\Collection;

/**
 * Used to present some collection.
 */
class CollectionPresenter extends ArrayPresenter
{
    /**
     * Constructor.
     *
     * @param Illuminate\Database\Eloquent\Collection $collection - a collection to present.
     * @access public
     */
    public function __construct(Collection $collection)
    {
        parent::__construct($collection->toArray());
    }
}