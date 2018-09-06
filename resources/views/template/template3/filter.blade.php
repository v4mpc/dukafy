<div class="sidebar-module-container">
<div class="sidebar-filter">
        <!-- ============================================== SIDEBAR CATEGORY ============================================== -->

<!-- ============================================== SIDEBAR CATEGORY : END ============================================== -->
        <!-- ============================================== PRICE SILDER============================================== -->
<div class="sidebar-widget outer-bottom-xs wow fadeInUp">
<div class="widget-header">
<h4 class="widget-title">Price Slider</h4>
</div>
<div class="sidebar-widget-body m-t-20">
<div class="price-range-holder">
<span class="min-max">
<span class="pull-left">{{$min_price}}</span>
<span class="pull-right">{{$max_price}}</span>
</span>
{{-- <input type="text" id="amount"  style="border:0; color:#666666; font-weight:bold;text-align:center;"> --}}
<form action="{{route('filter_products')}}" method="GET" id="filter-form">
                {{csrf_field()}}
<input type="text" class="price-slider" name="price" id="price" value="" >

{{-- <input id="cate" name="category_id[]" value="{{$category->id}}" class="styled" type="checkbox" {{in_array($category->id,$checked_categories)?"checked":""}}> --}}

</div><!-- /.price-range-holder -->
<a id="filter-price" class="lnk btn btn-primary filter-price" href="{{route('filter_products')}}" onclick="event.preventDefault();
document.getElementById('filter-form').submit();">Show Now</a>
</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== PRICE SILDER : END ============================================== -->
</form>

    </div><!-- /.sidebar-filter -->


</div>