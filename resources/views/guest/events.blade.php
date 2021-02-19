         <div class="row">
@if (count($events) > 0)
               @foreach ($events as $event)
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="news-box">
                        <figure><img src="{{ asset(str_replace(app_path(),'',$event->image_path))}}" alt="img" /></figure>
                        <h3>{{ $event->title }}</h3>
                        <span> {{$event->start_time}}</span><span>Comment</span>
                        <p><?php echo \Illuminate\Support\Str::limit($event->description, 300, $end='...') ?><a class="btn btn-dark btn-sm" href="{{ route('events.show', $event->id) }}">Attend</a></p>
                    </div>
                </div>

                @endforeach

                 @endif
                 </div>
                 <div class="row">
                  <div class="col-md-12">
                      <div class="titlepage">

                          <span>  {{ $events->links() }} </span>
                      </div>
                  </div>
              </div>
