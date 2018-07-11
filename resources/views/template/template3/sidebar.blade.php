<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
			
        <!-- ================================== TOP NAVIGATION ================================== -->
<div class="side-menu animate-dropdown outer-bottom-xs">
<div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>        
<nav class="yamm megamenu-horizontal" role="navigation">
    <ul class="nav">
            @foreach($categories as $category) @if(count($category->products))
        <li class="dropdown menu-item">
            <a href="{{route('category',$category->id)}}">{{$category->name}}</a>
                        </li><!-- /.menu-item -->

@endif @endforeach

           
    </ul><!-- /.nav -->
</nav><!-- /.megamenu-horizontal -->
</div><!-- /.side-menu -->
<!-- ================================== TOP NAVIGATION : END ================================== -->
@if(Request::is('category/*')||Request::is('filter_product'))
@include('template.template3.filter')
@endif
    </div>