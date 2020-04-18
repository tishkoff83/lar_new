<div class="col-md-6">
    <article class="entry card">
        <div class="entry__img-holder card__img-holder">
            <a href="single-post.html">
                <div class="thumb-container thumb-70">
                    <img src="{{ asset('/uploads/0/'. $one->image) }}" class="entry__img lazyload" alt="" />
                </div>
            </a>
            <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet"> {{ $categories->title }} </a>
        </div>

        <div class="entry__body card__body">
            <div class="entry__header">

                <h2 class="entry__title">
                    <a href="single-post.html"> {{ $one->title}} </a>
                </h2>
                <ul class="entry__meta">
                    <li class="entry__meta-author">
                        <span>by</span>
                        <a href="#">DeoThemes</a>
                    </li>
                    <li class="entry__meta-date">
                        {{ $one->time }}
                    </li>
                </ul>
            </div>
            <div class="entry__excerpt">
                <p>{{ Str::limit($one->body, 90) }}</p>
            </div>
        </div>
    </article>
</div>

