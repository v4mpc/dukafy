@if (Session::has('success'))
   


<div class="bs-callout-success callout-border-right callout-bordered callout-transparent mt-1 p-1">
        <h4 class="success">Success!</h4>
        <p>{{Session::get('success')}}</p>
      </div>

@endif


@if ($errors->any())
<div class="bs-callout-danger callout-border-right mt-1 p-1">
        <strong>Error!</strong>
        <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
      </div>
@endif


