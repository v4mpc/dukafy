<div class="row">
        <div class="col-xs-12 col-lg-3">
            <nav>
<ul class="list-group vertical-menu yamm make-absolute">
    <li class="list-group-item"><span><i class="fa fa-list-ul"></i> All Categories</span></li>

    {{-- <li class="highlight menu-item animate-dropdown"><a title="Value of the Day" href="home-v2.html">Value of the Day</a></li>

    <li class="highlight menu-item animate-dropdown"><a title="Top 100 Offers" href="home-v3.html">Top 100 Offers</a></li>

    <li class="highlight menu-item animate-dropdown"><a title="New Arrivals" href="home-v3-full-color.html">New Arrivals</a></li> --}}

    @foreach($categories as $category) @if(count($category->products))

    <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown">
    <a href="{{route('category',$category->id)}}" title="{{$category->name}}"    >{{$category->name}}</a>

    </li>


    @endif @endforeach


  

    
</ul>
</nav>
        </div>

        
    </div>