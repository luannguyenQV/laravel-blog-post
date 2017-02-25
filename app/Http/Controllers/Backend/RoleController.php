<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Role;
use App\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        $data = Role::orderBy('id', 'DESC')->paginate(5);
        return view('admin.modules.roles.role.index', compact('data'));
    }
    
    public function create()
    {
        $permission = Permission::get();
        return view('admin.modules.roles.role.create', compact('permission'));
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'display_name' => 'required',
            'description' => 'required',
            'permission' => 'required',
        ]);

        $role = new Role();
        $role->name = $request->input('name');
        $role->display_name = $request->input('display_name');
        $role->description = $request->input('description');
        $role->save();

        foreach ($request->input('permission') as $key => $value) {
            $role->attachPermission($value);
        }

        return redirect()->route('admin.roles.index')
            ->with('success', 'Role created successfully');
    }
   
    // public function show($id)
    // {
    // 	$role = Role::find($id);
    // 	$rolePermission = Permission::join("permission_role","permission_role.permission_id","=","permissions.id")
    //         ->where("permission_role.role_id",$id)
    //         ->get();
    // 	return view('backend.roles.role.show');
    // }

    public function edit($id)
    {
        $role = Role::find($id);
        $permission = Permission::get();
        $rolePermissions = DB::table('permission_role')->where('permission_role.role_id', $id)
            ->lists('permission_role.permission_id', 'permission_role.permission_id');
        return view('admin.modules.roles.role.edit', compact('role', 'permission', 'rolePermissions'));
    }
 
   
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'display_name' => 'required',
            'description' => 'required',
            'permission' => 'required',
        ]);

        $role = Role::find($id);
        $role->display_name = $request->input('display_name');
        $role->description = $request->input('description');
        $role->save();


        DB::table("permission_role")->where("permission_role.role_id", $id)
            ->delete();

        foreach ($request->input('permission') as $key => $value) {
            $role->attachPermission($value);
        }

        return redirect()->route('admin.roles.index')
                        ->with('success', 'Role updated successfully');
    }
     
    
    public function destroy($id)
    {
        DB::table("roles")->where('id', $id)->delete();
        return redirect()->route('admin.roles.index')
                        ->with('success', 'Role deleted successfully');
    }
}
