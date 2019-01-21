@component('mail::message')

# Dear *{{$account->name}}*,

This message is to confirm that your store is now ready.

Please keep this email for future reference as it has important information regarding your Dukafy store.


@component('mail::button', ['url' => 'http://'.$account->domain])
Visit Store
@endcomponent

@component('mail::table')
|               |               |          |
| ------------- |:-------------:| --------:|
| Package       | {{$account->package->name}} |
| Payment Received | {{number_format($account->subscription->subscription*$account->package->price)}} |
| Next Due Date | {{$account->ended_at}} |

@endcomponent

Login to your Duakfy Dashboard to complete the initial setup process (**This needs to be done from a computer**).

Please click on the link below and login with your username & password:



@component('mail::button', ['url' => 'http://'.$account->subdomain.'.dukafy.co.tz/login'])
Visit Dashboard
@endcomponent
    


@component('mail::table')
|               |               |          |
| ------------- |:-------------:| --------:|
| Username      | {{$account->email}} |
| Password | {{$password}} |


@endcomponent


To guide you through on how to do the initial setup of your store, Here’s a quick 2 min video you can watch: (Youtube Link)[]

---

After the initial setup is completed, you can now fully Manage products, track sales and fulfil orders - all from your smartphone - Download the App here:

[Google Play Store](https://play.google.com/store/apps/details?id=tz.co.dukafy)

{{-- [Apple App Store]():  --}}


If you have any questions or are stuck during the process, Kindly call us on +255717344295 for support assistance.


Happy Selling!


Thanks,<br>
{{ config('app.name') }}
@endcomponent
