<?php
/**
 * Created by PhpStorm.
 * User: mohammed
 * Date: 3/9/19
 * Time: 1:42 PM
 */

namespace App\Http\Controllers\Site;

use App\Models\ModelHasPermission;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Facades\Http;


class SiteController  extends Controller
{
    public function getWelcome()
    {
        return view('site.index');
    }

    public function getArabicWelcome()
    {
        return view('site.index2');
    }
}
