<div class="columns">
        @foreach($barbers as $barber)
            {{$barber->name}}
            @foreach($barber->photos as $photo)
            <div class="column">
                <div class="has-background-dark">
                    {{$photo}}
                </div>
            </div>
        @endforeach
        @endforeach
</div>