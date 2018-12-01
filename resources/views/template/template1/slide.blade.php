<!-- Slid Sec -->
<section class="slid-sec">
  <div class="container">
    <div class="container-fluid">
      <div class="row">
        
        @if(!is_null($slider_images[0]->image)||!is_null($slider_images[1]->image)||!is_null($slider_images[2]->image))

        <!-- Main Slider  -->
        <div class="col-md-12 no-padding">

          <!-- Main Slider Start -->
          <div class="tp-banner-container">
            <div class="tp-banner">
              <ul>
             
                @if(array_key_exists(0,$slider_images) && !is_null($slider_images[0]->image))
                <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
                  <!-- MAIN IMAGE -->
                  <img src="{{asset('images/'.$slider_images[0]->image)}}" alt="slider" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat">   
                 </li>
@endif



@if(array_key_exists(1,$slider_images) && !is_null($slider_images[1]->image))
<li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
  <!-- MAIN IMAGE -->
  <img src="{{asset('images/'.$slider_images[1]->image)}}" alt="slider" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat">           
 </li>
@endif

@if(array_key_exists(2,$slider_images) && !is_null($slider_images[2]->image) )
<li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
  <!-- MAIN IMAGE -->
  <img src="{{asset('images/'.$slider_images[2]->image)}}" alt="slider" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat">   </li>
@endif
              

              </ul>
            </div>
          </div>
        </div>
        @endif 
      </div>
    </div>
  </div>
</section>