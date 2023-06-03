<?php
/**
 * Created by PhpStorm.
 * User: mohammed
 * Date: 3/9/19
 * Time: 1:42 PM
 */

namespace App\Http\Controllers\API;

use App\Models\ModelHasPermission;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Facades\Http;

/**
 * Class UsersController
 * @property UserRepositoryInterface $user_repo
 * @package App\Http\Controllers\Admin
 */
class TransportController extends AdminController
{

    public function applications()
    {



    }

}
