@foreach($posts as $post)
<div class="card" style="margin-bottom:20px;">
    <div class="card-header">
        <h3><a href="#">{{ $post->post_title}}</a></h3>
    </div>
    <div class="card-body">
        <p>{{$post->post_description}}</p>
        <div class="text-center">
            <button type="button" class="btn btn-success">Read More</button>
        </div>
    </div>
</div>
@endforeach