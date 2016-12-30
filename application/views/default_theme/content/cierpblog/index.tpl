       <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('{$imgpath}/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>{$page->title}</h1>
                        <hr class="small">
                        <span class="subheading">{$page->body}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    {foreach from=$articlelist item=i}
                    <a href="{$base_url}article/{$i->url}">
                        <h2 class="post-title">
                            {$i->title}
                        </h2>
                    </a>
                    <p class="post-meta">Posted {$i->publishdate}</p>
                    {/foreach}
                </div>
                <hr>
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>