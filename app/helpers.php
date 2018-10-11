

<?php

function getAccountId($request)
{
    return App\Account::where('domain', preg_replace('/\.dukafy/', "", $request->getHost()))->first()->id;
}
