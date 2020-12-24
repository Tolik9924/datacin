     
          <div class="col-sm-6 col-md-2">
          <div class="thumbnail">
             <img src="{{$film->image}}" width="300" height="421" alt="image">
              <div class="caption">
                 <div class="labels">
                  @if($film->isNew())
                    <span class="badge badge-success">@lang('main.new')</span>
                  @endif

                   @if($film->isHit())
                     <span class="badge badge-warning">@lang('main.hit')</span>
                   @endif
                    
                   @if($film->isRecommend())
                    <span class="badge badge-danger">@lang('main.recommend')</span>
                   @endif 
            </div>
                  <h3 >{{$film->__('name')}}</h3>
                  <p>{{$film->mark}}/10</p>
                  <p>
                  <form action="{{route('basket-add', $film)}}" method="POST">
                   @guest
                       <a href="{{route('login')}}"
                         class="btn btn-default"
                         role="button">@lang('main.look')</a>
                   @endguest
                   
                   @auth
                   <a href="{{route('film', [$film->category->code, $film->code])}}"
                         class="btn btn-default"
                         role="button">@lang('main.look')</a>
                   @endauth
                          
                  <button type="submit" class="btn btn-primary" role="button">@lang('main.addshelves')</button>
                         @csrf           
                    </form>
                  </p>
              </div>
          </div>
        </div>
