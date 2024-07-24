<?php 

// app/Repositories/RestaurantRepository.php

namespace App\Repositories;

use App\Models\Restoran;

class RestoranRepository
{
    public function getAll()
    {
        return Restoran::all();
    }

    public function find($id)
    {
        return Restoran::find($id);
    }

    public function create($data)
    {
        return Restoran::create($data);
    }

    public function update($id, $data)
    {
        $restoran = Restoran::find($id);
        if ($restoran) {
            $restoran->update($data);
            return $restoran;
        }
        return null;
    }

    public function delete($id)
    {
        $restoran = Restoran::find($id);
        if ($restoran) {
            $restoran->delete();
            return true;
        }
        return false;
    }
}
