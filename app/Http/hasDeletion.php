<?php

namespace App\Http;

trait hasDeletion
{
    public $displayModal = false;
    public $displayDeleteModal = false;
    public $deleteId;

    public function showDeleteModal($id = null) {
        if($id) {
            $this->deleteId = (int)$id;
        }
        $this->displayDeleteModal= true;
    }
}
