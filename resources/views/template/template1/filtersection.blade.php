<!-- Shop Side Bar -->
<div class="col-md-3">
    <div class="shop-side-bar">

        <!-- Categories -->
        <h6>Categories</h6>
        <div class="checkbox checkbox-primary">
            <form action="{{route('filter_products')}}" method="GET" id="filter-form">
                {{csrf_field()}}
                <ul>

                    @foreach($categories as $category) @if(count($category->products))
                    <li>
                        <input id="cate" name="category_id[]" value="{{$category->id}}" class="styled" type="checkbox" {{in_array($category->id,$checked_categories)?"checked":""}}>
                        <label for="cate1"> {{$category->name}}</label>

                    </li>
                    @endif @endforeach


                </ul>

                <input type="hidden" name="min_price">
                <input type="hidden" name="max_price">

            </form>
        </div>

        <!-- Categories -->
        <h6>Price</h6>
        <!-- PRICE -->
        <div class="cost-price-content">
            <div id="price-range" class="price-range"></div>
            <span id="price-min" class="price-min">20</span> <span id="price-max" class="price-max">80</span> <a href="#."
                class="btn-round" id="filter-price">Filter</a> </div>

        <!-- Featured Brands -->
        {{--
        <h6>Featured Brands</h6>
        <div class="checkbox checkbox-primary">
            <ul>
                <li>
                    <input id="brand1" class="styled" type="checkbox">
                    <label for="brand1"> Apple <span>(217)</span> </label>
                </li>
                <li>
                    <input id="brand2" class="styled" type="checkbox">
                    <label for="brand2"> Acer <span>(79)</span> </label>
                </li>
                <li>
                    <input id="brand3" class="styled" type="checkbox">
                    <label for="brand3"> Asus <span>(283)</span> </label>
                </li>
                <li>
                    <input id="brand4" class="styled" type="checkbox">
                    <label for="brand4">Samsung <span>(116)</span> </label>
                </li>
                <li>
                    <input id="brand5" class="styled" type="checkbox">
                    <label for="brand5"> LG <span>(29)</span> </label>
                </li>
                <li>
                    <input id="brand6" class="styled" type="checkbox">
                    <label for="brand6"> Electrolux <span>(179)</span> </label>
                </li>
                <li>
                    <input id="brand7" class="styled" type="checkbox">
                    <label for="brand7"> Toshiba <span>(38)</span> </label>
                </li>
                <li>
                    <input id="brand8" class="styled" type="checkbox">
                    <label for="brand8"> Sharp <span>(205)</span> </label>
                </li>
                <li>
                    <input id="brand9" class="styled" type="checkbox">
                    <label for="brand9"> Sony <span>(35)</span> </label>
                </li>
                <li>
                    <input id="brand10" class="styled" type="checkbox">
                    <label for="brand10"> HTC <span>(59)</span> </label>
                </li>
                <li>
                    <input id="brand11" class="styled" type="checkbox">
                    <label for="brand11"> Lenovo <span>(68)</span> </label>
                </li>
                <li>
                    <input id="brand12" class="styled" type="checkbox">
                    <label for="brand12">Sanyo  (19) </label>
                </li>
            </ul>
        </div> --}}

        <!-- Colors -->
        {{--
        <h6>Size</h6>
        <div class="rating">
            <ul>
                <li><a href="#."><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i> <span>(218)</span></a></li>
                <li><a href="#."><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i> <span>(178)</span></a></li>
                <li><a href="#."><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i> <span>(79)</span></a></li>
                <li><a href="#."><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i> <span>(188)</span></a></li>
            </ul>
        </div> --}}

        <!-- Colors -->
        {{--
        <h6>Size</h6>
        <div class="sizes"> <a href="#.">S</a> <a href="#.">M</a> <a href="#.">L</a> <a href="#.">XL</a> </div> --}}

        <!-- Colors -->
        {{--
        <h6>Colors</h6>
        <div class="checkbox checkbox-primary">
            <ul>
                <li>
                    <input id="colr1" class="styled" type="checkbox">
                    <label for="colr1"> Red <span>(217)</span> </label>
                </li>
                <li>
                    <input id="colr2" class="styled" type="checkbox">
                    <label for="colr2"> Yellow <span> (179) </span> </label>
                </li>
                <li>
                    <input id="colr3" class="styled" type="checkbox">
                    <label for="colr3"> Black <span>(79)</span> </label>
                </li>
                <li>
                    <input id="colr4" class="styled" type="checkbox">
                    <label for="colr4">Blue <span>(283) </span></label>
                </li>
                <li>
                    <input id="colr5" class="styled" type="checkbox">
                    <label for="colr5"> Grey <span> (116)</span> </label>
                </li>
                <li>
                    <input id="colr6" class="styled" type="checkbox">
                    <label for="colr6"> Pink<span> (29) </span></label>
                </li>
                <li>
                    <input id="colr7" class="styled" type="checkbox">
                    <label for="colr7"> White <span> (38)</span> </label>
                </li>
                <li>
                    <input id="colr8" class="styled" type="checkbox">
                    <label for="colr8">Green <span>(205)</span></label>
                </li>
            </ul>
        </div> --}}
    </div>
</div>