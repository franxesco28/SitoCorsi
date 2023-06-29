<div >
    @foreach($courses as $course)
        <div>
        <button type="button" class="btn btn-outline-light"
                style="margin-right:1rem; margin-top: 1rem; font-size: 1.5rem;">
            {{$course->name}}
        </button>
            </div
    @endforeach
            @foreach($lectures as $lecture)
                <div>
                <button type="button" class="btn btn-outline-light"
                        style="margin-right:1rem; margin-top: 1rem; font-size: 1.5rem;">
            {{$lecture->room}}
                </button>
                </div>
            @endforeach
</div>
