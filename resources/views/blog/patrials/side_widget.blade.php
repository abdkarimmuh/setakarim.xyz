<div class="col-lg-4">
    <div class="mt-3 blog_sidebar rounded">
        <div class="bg-white p-4">
            <!-- Search widget-->
            <div class="widget side_widget_search">
                <div class="sidebar_widget_title font-weight-bold text-uppercase">Search</div>
                <img src="/images/divider.html" alt="" class="d-block mt-2 mb-4">
                <form>
                    <input class="form-control" type="search" placeholder="Search...">
                    <button class="search_icon" type="submit">
                        <span class="mdi mdi-magnify"></span>
                    </button>
                </form>
            </div>

            <!-- Categories -->
            <div class="widget mt-5">
                <div class="sidebar_widget_title font-weight-bold text-uppercase">Categories</div>
                <img src="/images/divider.html" alt="" class="d-block mt-2 mb-3">
                <ul class="list-unstyled widget_list row">
                    @foreach ($categories as $category)
                    <li class="col-md-6"><a href="/blog/category/{{$category['id']}}"><i class="mdi mdi-chevron-double-right"></i> {{$category['name']}}</a></li>
                    @endforeach
                </ul>
            </div>

            <!-- Recent Post -->
            <div class="widget mt-5 widget_recent_entries_custom">
                <div class="sidebar_widget_title font-weight-bold text-uppercase">Recent Post</div>
                <img src="/images/divider.html" alt="" class="d-block mt-2 mb-4">
                <ul class="list-unstyled">
                    @foreach ($last_blogs as $blog)
                    <li class="clearfix">
                        <div class="re_post_img">
                            <a href="#">
                                @if ($blog['file'] == null || $blog['file'] == '')
                                <img src="/images/blog/blog-1.jpg" alt="" class="img-fluid rounded">
                                @else
                                <img src="{{$blog['file']}}" alt="" class="img-fluid rounded">
                                @endif
                            </a>
                        </div>
                        <div class="re_post_desc">
                            <a href="/blog/{{$blog['id']}}" class="font-weight-bold">{{str_limit($blog['title'], 24)}}</a> 
                            <span class="post-date fonts-italic">{{$blog['date']}}</span>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>