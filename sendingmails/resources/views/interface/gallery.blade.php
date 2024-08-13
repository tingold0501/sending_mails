<div class="card-group gap-4">
    @foreach ($gallery_templates as $gallery_template)
    <div class="card cursor-pointer w-[300px] h-[300px] hover:bg-slate-400">
        <img class="card-img-top" src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$gallery_template->title}}</h5>
          <p class="card-text">{{$gallery_template->content}}</p>
          <p class="card-text"><small class="text-muted">{{$gallery_template->created_at}}</small></p>
        </div>
      </div>
    @endforeach
</div>