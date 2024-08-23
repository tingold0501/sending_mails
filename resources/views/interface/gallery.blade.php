<div class="row row-cols-4 gap-6">
    @foreach ($gallery_templates as $gallery_template)
    <div class="card cursor-pointer w-[300px] h-[300px] hover:bg-slate-400">
        <img class="card-img-top" src="{{$gallery_template->image}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$gallery_template->title}}</h5>
          <p class="card-text">{{$gallery_template->content}}</p>
          <p class="card-text"><small class="text-muted">{{$gallery_template->created_at}}</small></p>
        </div>
      </div>
    @endforeach
</div>