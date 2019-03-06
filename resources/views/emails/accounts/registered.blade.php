@component('mail::message')
Account was registered from Dukafy website with the following details


@component('mail::table')
|               |               |          |
| ------------- |:-------------:| --------:|
| Name          | {{$account->name}}      |
| Domain        | {{$account->domain}} |
| Email         | {{$account->email}} |
| Phone         | {{$account->formatNumber()}} |
| Registration Date      | {{$account->created_at->diffForHumans()}} |



@endcomponent





Thanks,<br>
{{ config('app.name') }}
@endcomponent
