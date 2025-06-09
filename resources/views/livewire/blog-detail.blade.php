<div>
    <div class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="mb-5">
                        <h2 class="mb-4" style="line-height:1.5">{{$blogPost->title}}</h2>
                        <span>{{ $blogPost->created_at->format('d M Y') }} <span class="mx-2">/</span> </span>
                        <p class="list-inline-item">Category : <a href="#!" class="ml-1">{{ $blogPost->category->name }} </a>
                        </p>
                        <p class="list-inline-item">Author : <a href="#!" class="ml-1">{{ $blogPost->author }} </a>
                        </p>
                    </div>
                    <div class="mb-5 text-center">
                        <div class="post-slider rounded overflow-hidden">
                            @if (!empty($blogPost->image))
                            <img loading="lazy" decoding="async" src="{{ asset('storage/' . $blogPost->image) }}"
                                alt="Post Thumbnail">
                            @else
                                <img loading="lazy" decoding="async" src="{{ asset('front/images/blog/post-4.jpg') }}" alt="Post Thumbnail">
                            @endif
                        </div>
                    </div>
                    <div class="content">
                        {!! $blogPost->content !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
