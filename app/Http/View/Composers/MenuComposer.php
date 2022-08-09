<?php

namespace App\Http\View\Composers;

use App\Repositories\UserRepository;
use Illuminate\View\View;

use App\Models\Menus;

class MenuComposer
{
    protected $users;

    public function __construct()
    {

    }

    public function compose(View $view)
    {
        $menus = Menus::select('id','name','parent_id')->where('active',1)->orderByDesc('id')->get();
        $view ->with('menus',$menus);
    }
}