<div class="slider-area">
    <div class="bend niceties preview-1">
        <div id="ensign-nivoslider-3" class="slides">
            @foreach($sliders as $key=>$image)
            <img style="height: 400px;" src="{{asset('/upload/slider/'.$image->image)}}" alt="" title="#slider-direction-{{$key}}" />
            @endforeach
        </div>
        <!-- direction 1 -->
        @foreach($sliders as $key=>$content)
        <div id="slider-direction-{{$key}}" class="t-cn slider-direction">
            <!-- layer 1 -->
            <div class="layer-1-1">
                <h3 class="title-1">{{$content->text }}</h3>
            </div>
            <!-- layer 2 -->
            <div class="layer-1-2">
                <a href="{{$content->action_url}}" class="title-2">{{$content->action_name }}</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
