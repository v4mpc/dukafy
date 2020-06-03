@component('mail::message')

# Hi,

You've requested to open an online shop using Dukafy with the below details:


@component('mail::table')
|               |               |          |
| ------------- |:-------------:| --------:|
| Name       | {{$account->name}} |
| Domain      | {{$account->domain}} |
| Email | {{$account->email}} |
| Phone | {{$account->phone}} |
| Plan Chosen | {{$account->package->name}} |
| Duration | {{$account->ended_at}} |
| Amount to pay |{{$account->totalSubcriptionAmount()}} TZS}} |




@endcomponent

To finalise your account setup, We will call you shortly to confirm your store details.

Once confirmed kindly pay the above amount to our Mobile money number: 0784 840 420 and send us a payment confirmation on the same number for us to acknowledge and process your online shop.

For more info, or queries, please call 0784 840 420 or 0784 640 562


Thank you!
Dukafy Team


Thanks,<br>
{{ config('app.name') }}
@endcomponent
