<?php
namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use DB;
use Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $data = User::orderBy('id', 'DESC')->paginate(5);
        return view('admin.modules.roles.user.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $roles = Role::all();
    	return view('admin.modules.roles.user.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        foreach ($request->input('roles') as $key => $value) {
            $user->attachRole($value);
        }
    	return redirect()->route('admin.users.index')->with('success','User created successfully');
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        $rolesOfUser = $user->roles;
        $userRole = array();
        foreach ($rolesOfUser as $key) {
            array_push($userRole, $key->id);
        }
    	return view('admin.modules.roles.user.edit', compact('user', 'roles', 'userRole'));        
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'      => 'required',
            'email'     => 'required|email|unique:users,email,'.$id,
            'password'  => 'same:confirm-password',
            'roles'     => 'required'
        ]);

        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = array_except($input,array('password'));    
        }

        $user = User::find($id);
        $user->update($input);
        DB::table('role_user')->where('user_id',$id)->delete();

        
        // foreach ($request->input('roles') as $key => $value) {
        //     $user->attachRole($value);
        // }

        return redirect()->route('admin.users.index')
                        ->with('success','User updated successfully');
    }    

    public function delete(Request $id)
    {
    }    

    public function deactive()
    {
    	return view('admin.modules.roles.user.create');
    }    

    public function active()
    {
    	return view('admin.modules.roles.user.create');
    }        

    public function changepassword()
    {
    	return view('admin.modules.roles.user.create');
    }   

    public function updatepassword(Request $request)
    {
    	return view('admin.modules.roles.user.update');
    }        

}
