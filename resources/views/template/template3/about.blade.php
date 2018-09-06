@extends('template.template3.layout')
@section('content')

<div class="body-content outer-top-bd">
        <div class="container">
            <div class="row inner-bottom-sm">
                {!!$settings->about!!}
            </div>
        </div>
</div>

@endsection