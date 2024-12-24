<?php
namespace App\Repositories;

use App\Models\User;
use App\Repositories\RessourceRepository;
use Illuminate\Support\Facades\DB;

class UserRepository extends RessourceRepository{
    public function __construct(User $user){
        $this->model = $user;
    }


    public function getEnqueteur()
    {
        return DB::table("users")->where("role","enqueteur")->get();
    }


}
