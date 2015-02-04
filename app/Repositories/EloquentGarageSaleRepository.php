<?php namespace GarageSale\Repositories;


use GarageSale\Models\GarageSale;

class EloquentGarageSaleRepository implements GarageSaleRepository {

    /**
     * @param GarageSale $garageSale
     * @return bool
     */
    public function save(GarageSale $garageSale)
    {
        return $garageSale->save();
    }
}