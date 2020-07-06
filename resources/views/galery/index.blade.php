<div class="columns">
    @foreach($photos as $photo)
        {{$photo['created_at']}}
    @endforeach
</div>