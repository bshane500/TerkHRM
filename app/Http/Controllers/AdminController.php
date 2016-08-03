<?php

namespace App\Http\Controllers;



use App\Repositories\Contracts\PermissionRepository;
use App\Repositories\Contracts\RoleRepository;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    protected $role;
    protected $permission;
    
    public function __construct(RoleRepository $role, PermissionRepository $permission)
    {
        $this->role = $role;
        $this->permission = $permission;
    }

    public function getOrmaa()
    {
        return view('uac.form');
    }
    public function getUserGroup()
    {
    	$userg = $this->role->find(1);
        $permissions = $this->permission->paginate();
        $usergroups = $this->role->with('users')->all();
        return view('uac.index',compact('usergroups','permissions','userg'));
    }

    public function postCreateRole(Request $request)
    {
        $this->role->create($request->all());
        return redirect(route('admin.user-group'))->with('status','User Group Added');
    }

    public function putUpdateRole(Request $request,$id)
    {
        $this->role->update($id,$request->all());
        return redirect(route('admin.user-group'))->with('status','User Group Updated');
    }

    public function deleteRole($role)
    {
        $this->role->delete($role);
        return redirect(route('admin.user-group'))->with('status','Role Successfully Deleted');
    }

    public function postCreatePermission(Request $request)
    {
        $this->permission->create($request->all());
        return redirect(route('admin.user-group'))->with('status','Permission Added');
    }

    public function postAttachPermissions(Request $request)
    {

        $this->role->attachPermissionsToRole($request->input('role'),$request->input
        ('permissions'));
        return redirect(route('admin.user-group'))->with('status','Permission added');
    }
}
