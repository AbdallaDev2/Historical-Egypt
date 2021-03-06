
  @foreach($replies->reverse() as $reply)
  <li class="media media-replied pull-right"
      style="width: 80%">
      <a class="pull-left" href="#">
          <img class="media-object img-circle"
               src="https://s3.amazonaws.com/uifaces/faces/twitter/ManikRathee/128.jpg"
               alt="profile">
      </a>
      <div class="media-body">
          <div class="well well-lg">
              <h3 class="media-heading text-uppercase reviews">
                  <span class="glyphicon glyphicon-share-alt"></span>
                  {{$reply->user_name}}</h3>
              <ul class="media-date text-uppercase reviews list-inline">
                  <li class="dd">{{$reply->created_at->diffForHumans()}}</li>

              </ul>
              <p class="media-comment">
                  {{$reply->reply}}
              </p>
              @if(auth()->check())

                  @if(auth()->user()->id == $reply->user_id)

                      <div class=" btn-circle text-uppercase"
                           style="float: right;">

                          <form >
                              <meta name="csrf-token-r" content="{{ csrf_token() }}">





                              <button type="submit" reply_id="{{$reply->id}}"
                                  comment_id="{{$comment->id }}"
                              class="btn btn-danger reply-delete">
                                  DELETE
                              </button>
                          </form>

                      </div>
                      <div style="clear: both;"></div>
                  @endif
              @endif

          </div>

      </div>
  </li>
@endforeach

<script src="{{asset('front/js/coptic.js')}}"></script>
