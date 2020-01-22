<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Repositories\UserRepository;
use App\User;
class UsersControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
        public function index($n, $role)
{
    if($role != 'total')
    {
        return $this->model
        ->with('role')
        ->whereHas('role', function($q) use($role) {
            $q->whereSlug($role);
        })      
        ->oldest('seen')
        ->latest()
        ->paginate($n);          
    }
 
    return $this->model
    ->with('role')       
    ->oldest('seen')
    ->latest()
    ->paginate($n);
}
       

     public function indexSort($role)
{
    $counts = $this->user_gestion->counts();
    $users = $this->user_gestion->index(4, $role); 
    $links = $users->setPath('')->render();
    $roles = $this->role_gestion->all();
 
    return view('back.users.index', compact('users', 'links', 'counts', 'roles'));        
}
public function updateSeen(
    Request $request, 
    $user)
{
    $this->user_gestion->update($request->all(), $user);
 
    return response()->json();
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
  
{
    return view('back.users.create', $this->role_gestion->getAllSelect());
}
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request ,$inputs, $confirmation_code = null)
    {
        $this->user_gestion->store($request->all());
        $user = new $this->model;
 
        $user->password = bcrypt($inputs['password']);
     
        if($confirmation_code) {
            $user->confirmation_code = $confirmation_code;
        } else {
            $user->confirmed = true;
        }
     
        $this->save($user, $inputs);
     
        return $user;
            return redirect('user')->with('ok', trans('back/users.created'));
        
    }
   

   


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)   
{
    return view('back.users.show',  compact('user'));
}
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
{
    return view('back.users.edit', array_merge(compact('user'), $this->role_gestion->getAllSelect()));
}
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($inputs, $user)
    
{        
    $user->confirmed = isset($inputs['confirmed']);
 
    $this->save($user, $inputs);
}
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
