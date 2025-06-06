    <div class="col-xl-3 col-lg-4 col-md-6 mt-4">
        <div class="card bg-transparent border-0 text-center">
            <div class="card-img">
                @if ($member->image)
                    <img loading="lazy" decoding="async" src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}"
                        class="rounded w-100" width="300" height="332">
                @else
                    <img loading="lazy" decoding="async" src="{{ asset('front/images/about/team-1.jpg') }}" alt="{{ $member->name }}"
                        class="rounded w-100" width="300" height="332">
                @endif
                <ul class="card-social list-inline">
                    @if ($member->linkedin_url)
                        <li class="list-inline-item">
                            <a class="linkedin" target="_blank" href="{{ $member->linkedin_url }}">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                    @endif
                    @if ($member->fb_url)
                    <li class="list-inline-item">
                        <a class="facebook" target="_blank" href="{{ $member->fb_url }}">
                            <i class="fab fa-facebook"></i>
                            </a>
                    </li>
                    @endif
                    @if ($member->twitter_url)
                    <li class="list-inline-item">
                        <a class="twitter" target="_blank" href="{{ $member->twitter_url }}">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    @endif
                    @if ($member->instagram_url)
                    <li class="list-inline-item">
                        <a class="instagram" target="_blank" href="{{ $member->instagram_url }}">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
            <div class="card-body">
                <h3>{{ $member->name }}</h3>
                <p>{{ $member->designation }}</p>
            </div>
        </div>
    </div>
