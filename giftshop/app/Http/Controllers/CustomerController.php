<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('website.user_signup');
    }
    public function adm_dashboard()
    {
        return view('admin.index');
    }
    public function profile()
    {
        $id=session()->get('user_id');
        $data=customer::where('id',$id)->first();
        return view('website.profile',['customer'=>$data]);
    }
    
    public function edituser(customer $user,$id)
    {
        $data=customer::find($id);
        return view('website.edituser',['customer'=>$data]);
    }

     public function update(Request $request, customer $user,$id)
    {
       
        $data=customer::find($id);

        $data->cust_name=$request->cust_name;
        $data->email=$request->email;
        
        $data->update();
        echo "<script> 
        alert('Profile Update Success !'); 
        window.location='/profile';
    </script>";
    }

    public function login()
    {
        return view('website.user_login');
    }
    public function user_auth(Request $request)
    {
    
        $validated = $request->validate([
            'email'=> 'required|email',
            'password'=> 'required|'
        ], [
            'email.required' => 'Bhai Email Kon Daalega?',
            'email.email' => 'Kya yar Kuch bhi daal rha hai.',
            'password.required' => 'Bhai Password To Daal De.',
            ]);

        $email=$request->email;
        $password=$request->password;
        
        $data=customer::where('email',$email)->first();  
        if($data)
        {
            if(Hash::check($password,$data->password))
            {
                    session()->put('user_id',$data->id);
					session()->put('email',$data->email);
					session()->put('name',$data->cust_name);

                    echo "<script> 
                    alert('Login Suuceess !');
                    window.location='/';
                    </script>";
               
            }
            else
            {
                echo "<script> 
                        alert('Password not match !'); 
                        window.location='/user_login';
                    </script>";
                   
               
            }
        }
        else
        {
            echo "<script>
                alert('Username does not exits !');
                window.location='/user_login';
             </script>";
            
        }

    }
    
    public function user_logout()
    {
        session()->pull('user_id');
        session()->pull('email');
        session()->pull('name');
        
        echo "<script>
        alert('Logout Success !');
        window.location='/index';
     </script>";

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'cust_name'=>'required|alpha:ascii',
            'email'=> 'required|email',
           'password'=> 'required|min:3|max:12',
        ]);

        $data=new customer;

        $data->cust_name=$request->cust_name;
        $data->email=$request->email;
        $data->password=Hash::make($request->password);

        $data->save();
        echo "<script>
        alert('Signup Success !');
        window.location='/user_login';
        </script>";
        return redirect('/user_login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(customer $customer)
    {
        $data=customer::all();
        return view('admin.manage_customer',['customer'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(customer $customer, $id)
    {
        $data=customer::find($id);
        $data->delete();
        return redirect('/manage_customer');
    }
}
