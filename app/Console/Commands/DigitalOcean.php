<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Account;

class DigitalOcean extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'DO:account';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create domain and respective subdomain';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $accounts=Account::where('id','>',1)->get();

        foreach ($accounts as $account ) {
            // register domain
            $this->digitalOcean($account,'domain');
            // register subdomain
            $this->digitalOcean($account, 'subdomain');
            sleep(2);
        }


        
    }


    public function digitalOcean($account, $record_to_create)
    {
        if ($record_to_create=='domain') {
            $data = array(
            "name" => $account->domain,
            "ip_address"=>"139.59.63.154",
            "ttl"=>1800,
        );
            $posturl="https://api.digitalocean.com/v2/domains";
        } else {
            $data = array(
                "type" => "A",
                "name" => $account->subdomain,
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
            'Authorization: Bearer 282e03025a8020ec66a5b8e97bab48ee94331967a0dc8999ad1682bfd5a98792'
        ));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $this->info(($record_to_create=='domain')?$account->domain.' Created':$account->subdomain.' Created!');

        return;
    }
}
