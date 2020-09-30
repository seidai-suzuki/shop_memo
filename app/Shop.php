<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Shop extends Model
{

    /**
     * @param int $userId
     * @return Collection
     */
    public function getByUserId(int $userId) {
        $query = $this->query();
        return $query->where('user_id', $userId)->get();
    }
}
