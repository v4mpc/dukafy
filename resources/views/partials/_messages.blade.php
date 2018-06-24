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

@if (Session::has('initial_screen'))
<div class="bs-callout-success callout-border-right mt-1 p-1">
        <strong>Welcome to Your Store Dashboard!</strong>
        </p> Your Site is not Yet active! Activate it in the Menu section.</p>
      </div>
@endif

