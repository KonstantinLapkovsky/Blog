<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="/">Home</a>

            @if (auth()->check())
                <a class="nav-link" href="/posts/create">Publish post</a>
            @endif

            <a class="nav-link" href="#">New features</a>
            <a class="nav-link" href="#">Press</a>
            <a class="nav-link" href="#">New hires</a>
            <a class="nav-link" href="#">About</a>

            @if (! auth()->check())
                <a class="nav-link ml-auto" href="/login">Login</a>
                <a class="nav-link" href="/registration">Register</a>
            @endif

            @if (auth()->check())
                <a class="nav-link ml-auto" href="#">{{ auth()->user()->name }}</a>
                <a class="nav-link" href="/logout">Logout</a>
            @endif

        </nav>
    </div>
</div>