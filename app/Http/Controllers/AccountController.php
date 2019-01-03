<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;
use Carbon;
use App\User;
use App\Charts\CustomerSms;
use Image;
use App\Package;
use App\Subscription;
use Auth;
use Session;
use Illuminate\Support\Facades\Storage;
use App\Product;
use App\Order;
use App\Category;
use App\Mail\AccountRegistered;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts=Account::all();
        
        return view('admin.accounts.index')->with('accounts', $accounts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $packages = Package::all();
        $subs= Subscription::all();
        return view('admin.accounts.create')->with('packages', $packages)->with('subscriptions', $subs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            // 'domain' => 'required|unique:accounts,domain|max:255',
            'name' => 'required|max:255',
            'email' => 'required|email|unique:accounts,email|max:255',
            'phone' => 'required|max:255',
            'package_id'=>'required',
            
           
        ]);

        if ($request->user_email) {
            $request->validate([
                'user_name' => 'sometimes|nullable|max:255',
                'user_email' => 'required|unique:users,email|max:255',
                'password'=>'required|confirmed|min:6',
            ]);
        }

        //create subdomain in digital ocean
        //create a laravel job that will handle creation of a new laravel project
        //configure domain,database mysql etc
        // dd($request);
        $domain=$request->domain.".co.tz";
        if ($request->domain1) {
            $domain=$request->domain1;
        }
        $account=new Account;
        $account->name=$request->name;
        $account->domain=$domain;
        $account->phone=$request->phone;
        $account->email=$request->email;
        $account->package_id=$request->package_id;
        $account->subscription_id=$request->subscription_id;
        
        //this value are set to null till account is alllowed or its an admin acccount
     
        
       
        

      


        if (Auth::check()) {
            if (Auth::user()->account_id==1) {
                $this->activateNewAccount($account, $user);
            }
        } else {
            $account->status=2;
        }
        //if admin got to index
        // return redirect()->route('accounts.index');
        $account->save();
        //else go back;
        //lets send email to notify the admin
        Mail::to('sarfaraz@legendaryits.com')->send(new AccountRegistered($account));
        // if ($request->user_email) {
        //     $user=new User;
        //     $user->name=$request->user_name;
        //     $user->email=$request->user_email;
        //     $user->password=bcrypt($request->password);
        //     $user->account_id=$account->id;
        //     $user->save();
        // }

        // dd($request);
        Session::flash('success', 'god');
        return redirect()->back();
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        $packages = Package::all();
        $subs= Subscription::all();
        return view('admin.accounts.show')->with('account', $account)->with('packages', $packages)->with('subscriptions', $subs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        return view('admin.accounts.edit')->with('account', $account);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {
        $request->validate([
            // 'sub_domain' => 'required|unique:accounts,sub_domain|max:255',
            'name' => 'required|max:255',
            // 'email' => 'required|email|unique:accounts,email|max:255',
            'phone' => 'required|max:255',
           
        ]);

        if ($request->user_email) {
            $request->validate([
                'user_name' => 'sometimes|nullable|max:255',
                // 'user_email' => 'required|unique:users,email|max:255',
                'password'=>'required|confirmed|min:6',
            ]);
        }


        //create subdomain in digital ocean

        //configure NGINX server for this subdomain
        // $project_name=env('APP_NAME');
        // $installation_location="/var/www";
        // $server_configurarion="server {".PHP_EOL;
        // $server_configurarion.="listen 80;".PHP_EOL;
        // $server_configurarion.="listen [::]:80;".PHP_EOL;
        // $server_configurarion.="root ".$installation_location."/".$project_name."/public;".PHP_EOL;
        // $server_configurarion.="index index.php index.htm;".PHP_EOL;
        // $server_configurarion.="server_name .".$request->sub_domain.".automate.co.tz;".PHP_EOL;
        // $server_configurarion.="location / {".PHP_EOL;
        // $server_configurarion.='try_files $uri $uri/ /index.php?$query_string;'.PHP_EOL;
        // $server_configurarion.="}".PHP_EOL;
        // $server_configurarion.="location ~ \.php$ {".PHP_EOL;
        // $server_configurarion.="include snippets/fastcgi-php.conf;".PHP_EOL;
        // $server_configurarion.="fastcgi_pass unix:/var/run/php/php7.1-fpm.sock;}".PHP_EOL;
        // $server_configurarion.="location ~ /\.ht {".PHP_EOL;
        // $server_configurarion.="deny all;".PHP_EOL;
        // $server_configurarion.="}}".PHP_EOL;
        // file_put_contents("/etc/nginx/sites-available/automate", $server_configurarion, FILE_APPEND);
        


        


        // $account=new Account;

        if ($request->hasFile('logo')) {
            $filename = $request->logo->getClientOriginalName();
            $location=public_path('images/'.$filename);
            Image::make($request->logo)->resize(400, 400)->save($location);
            $account->logo=$filename;
        }

        $account->name=$request->name;
        // $account->sub_domain=$request->sub_domain;
        $account->phone=$request->phone;
        // $account->email=$request->email;
        // $account->started_at=Carbon::now();
        // $account->ended_at=Carbon::now()->addMonth();
        // $account->status=1;
        $account->send_name=$request->send_name;
        $account->bl_username=$request->bl_username;
        $account->bl_api_key=$request->bl_api_key;
        $account->bl_password=$request->bl_password;
        $account->mj_sender_email=$request->mj_sender_email;
        $account->mj_apikey_private=$request->mj_apikey_private;
        $account->mj_apikey_public=$request->mj_apikey_public;
        $account->save();

        if ($request->user_email) {
            $user=new User;
            $user->name=$request->user_name;
            $user->email=$request->user_email;
            $user->password=bcrypt($request->password);
            $user->admin=0;
            $user->account_id=$account->id;
            $user->save();
        }



        return redirect()->route('accounts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        //
    }

    public function reset(Request $request, $account_id)
    {
        $account=Account::findorFail($account_id);
        if ($account->email!=$request->email) {
            return redirect()->route('accounts.show', $account_id);
        }
        $products=Product::withoutGlobalScopes()->where('account_id', $account_id)->get();
        foreach ($products as $product) {
            //     //lets delete images from server
            
            Storage::disk('images')->delete($product->imageArray());
            //     //we will delete the images from database
        //     $product->images()->detach();
        }
        //delete the categories
        Category::withoutGlobalScopes()->where('account_id', $account_id)->delete();
        //delete the orders_product
        $orders=Order::withoutGlobalScopes()->where('account_id', $account_id)->get();
        foreach ($orders as $order) {
            $order->products()->detach();
        }
        Order::withoutGlobalScopes()->where('account_id', $account_id)->delete();
        //delete the products
        Product::withoutGlobalScopes()->where('account_id', $account_id)->delete();
        return redirect()->route('accounts.show', $account_id);
    }

    public function suspend($id)
    {
        $account=Account::findOrFail($id);
        $account->status=0;
        $account->save();
        return redirect()->back();
    }

    public function activate($id)
    {
        $account=Account::findOrFail($id);
        $account->status=1;
        $account->save();
        return redirect()->back();
    }

    public function renew(Request $request, $id)
    {
        //lets get the subscription
        $subscription=Subscription::findOrFail($request->subscription_id);
        $account=Account::findOrFail($id);
        $account->status=1;
        $account->subscription_id=$request->subscription_id;
        $account->package_id=$request->package_id;
        
        $account->ended_at=Carbon::now()->addMonths($subscription->subscription);
        
        $account->save();
        return redirect()->back();
    }



    public function activateNewAccount($account, $password)
    {
//         $ch = curl_init();
//         curl_setopt($ch, CURLOPT_URL, 'http://mydomains.dukafy.co.tz/includes/api.php');
//         curl_setopt($ch, CURLOPT_POST, 1);
//         curl_setopt(
//             $ch,
//             CURLOPT_POSTFIELDS,
//     http_build_query(
//         array(
//             'action' => 'AddOrder',
//             // See https://developers.whmcs.com/api/authentication
//             'username' => 'sarfaraz',
//             'password' => '$2b$10$Vqvj/2gksrNdBG6bflHvKOD/jC7xwZPiw1ciiUOdCNmj6XKI4Gl5m',
//             'clientid' => '596',
//             'pid' => array(1),
//             'domain' => array('domain1.com'),
//             'domaintype' => array('register'),
//             'dnsmanagement' => array(1 => true),
//             'nameserver1' => 'ns1.demo.com',
//             'nameserver2' => 'ns2.demo.com',
//             'paymentmethod' => 'mailin',
//             'responsetype' => 'json',
//         )
//     )
        // );
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // $response = curl_exec($ch);
        // curl_close($ch);

        // dd($response);


















        #if we are here means the account can now be created

        #first lets edit some account infos
        // $account=Account::findOrFail($account);
        $account->started_at=Carbon::now();
        $account->ended_at=Carbon::now()->addMonths($account->subscription->subscription);
        $account->status=1;
        $account->save();
        #lets create the domain in digital ocean
        $this->digitalOcean($account, 'domain');
        // configure NGINX server for this domain
        $this->serverConfig($account, 'domain');
        //now lets create subdomains for client dashboard login
        //create subdomain in digital ocean
        $this->digitalOcean($account, 'subdomain');
        // configure NGINX server for this subdomain
        $this->serverConfig($account, 'subdomain');

        $this->createUser($password, $account);

        
        return;
        

        #then we are good to go
    }

    public function digitalOcean($account, $record_to_create)
    {
        if ($record_to_create=='domain') {
            $data = array(
            "name" => $account->domain,
            "ip_address"=>"178.62.44.86",
            "ttl"=>1800,
        );
            $posturl="https://api.digitalocean.com/v2/domains";
        } else {
            $data = array(
                "type" => "A",
                "name" => preg_replace('/\.co\.tz/', "", strtolower($account->domain)).".dukafy.co.tz",
                "data"=>"178.62.44.86",
                "priority"=>null,
                "port"=>null,
                "ttl"=>1800,
                "weight"=>null,
                "flags"=>null,
                "tag"=>null,
            );

            $posturl="https://api.digitalocean.com/v2/domains/dukafy.co.tz/records/";
        }
        
        $data_string = json_encode($data);
        $ch=curl_init();
        curl_setopt($ch, CURLOPT_URL, $posturl);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Authorization: Bearer 38d7b5a763808e70f9d50c9f5848b877fec1eb60bc3e70c3f94d21adf7d55c1c'
        ));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);

        return;
    }

    public function serverConfig($account, $record_to_create)
    {
        $project_name='dukafy';
        $installation_location="/var/www";
        $server_configurarion="server {".PHP_EOL;
        $server_configurarion.="listen 80;".PHP_EOL;
        $server_configurarion.="listen [::]:80;".PHP_EOL;
        $server_configurarion.="root ".$installation_location."/".$project_name."/public;".PHP_EOL;
        $server_configurarion.="index index.php index.htm;".PHP_EOL;
        if ($record_to_create=='domain') {
            $server_configurarion.="server_name .".strtolower($account->domain).";".PHP_EOL;
            $server_configurarion.="location =/login {".PHP_EOL;
            $server_configurarion.='return 404 "Page Not Found";'.PHP_EOL;
            $server_configurarion.="  }".PHP_EOL;
        } else {
            $server_configurarion.="server_name .".preg_replace('/\.co\.tz/', "", strtolower($account->domain)).".dukafy.co.tz;".PHP_EOL;
        }
     
        $server_configurarion.="location / {".PHP_EOL;
        $server_configurarion.='try_files $uri $uri/ /index.php?$query_string;'.PHP_EOL;
        $server_configurarion.="}".PHP_EOL;
        $server_configurarion.="location ~ \.php$ {".PHP_EOL;
        $server_configurarion.="include snippets/fastcgi-php.conf;".PHP_EOL;
        $server_configurarion.="fastcgi_pass unix:/var/run/php/php7.1-fpm.sock;}".PHP_EOL;
        $server_configurarion.="location ~ /\.ht {".PHP_EOL;
        $server_configurarion.="deny all;".PHP_EOL;
        $server_configurarion.="}}".PHP_EOL;
        file_put_contents("/etc/nginx/sites-available/dukafy", $server_configurarion, FILE_APPEND);

        return;
    }


    public function createUser($password, $account)
    {
        $user=new User;
        $user->name=$account->name;
        $user->email=$account->email;
        $user->password=bcrypt($password);
       
        $user->account_id=$account->id;
        $user->save();
        return;
    }


    public function admincreateAccount(Account $account, Request $request)
    {
        // dd($account);

        $this->activateNewAccount($account, $request->password);
        return redirect()->back();
    }
}
