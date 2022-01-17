<?php

namespace App\Http;

trait hasSorting
{
    public $sortByField;
    public $sortByDirectionAsc = true;

    public function sortBy($field)
    {
        $this->sortByDirectionAsc = ($this->sortByField === $field) ? !$this->sortByDirectionAsc : true;

        $this->sortByField = $field;

        $this->resetPage();
    }

}
