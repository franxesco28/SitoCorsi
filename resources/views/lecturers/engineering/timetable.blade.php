
@forelse($data as $item)

    <div class="car mb-4" style="width: 100%">
        <div class="car-body">
            <p class="lecturer_timeslot">{{$item->day}} | {{$item->time}} |
                <span class="badge bg-secondary">{{$item->room}} </span></p>
            <h4 class="card-title lecturer_name">{{$item->course}}</h4>
            <h5 class="card-title lecturer_course"> {{$item->course}}</h5>
            <a href="/lecturers/{{$item->slug}}" class="mb-2 d-block days-a">
                <span class="badge bg-primary">Calendar</span>
            </a>
            <p class="card-text">
                @if(!is_null($item->info) )
                    @foreach($item->info->teachers as $teacher)
                        {{$teacher->name}} |
                        <a href="mailto:{{$teacher->email}}" target="_blank">{{$teacher->email}}</a>
                        <br>
                        @isset($teacher->profile)
                            <small><a href="{{$teacher->profile}}"
                                      target="_blank">{{$teacher->profile}}</a></small>
                            <br>
                        @endisset

                        @if($loop->remaining > 0)
                            <br>
                        @endif
                    @endforeach
                @endif
            </p>
        </div>
    </div>
@empty
    <div class="d-flex justify-content-center bg-primary ali-content-center opacity-25" style="width: 100% ">
        <h4>NO CORSI</h4>
    </div>
@endforelse
