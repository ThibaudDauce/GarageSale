<?php namespace GarageSale\Repositories; 

use GarageSale\Models\GarageSale;

interface GarageSaleRepository {

    /**
     * @param GarageSale $garageSale
     * @return mixed
     */
    public function save(GarageSale $garageSale);
}