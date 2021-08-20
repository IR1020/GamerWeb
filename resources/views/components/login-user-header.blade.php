<x-components-head css="header" />

<nav class="navbar navbar-expand-lg blue-gradation navbar-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}">
        <i class="fas fa-dice"></i>
            GamerWeb
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/write_report') }}">
                        <i class="fas fa-pencil-alt fa-fw"></i>
                        記事を投稿
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-cog fa-fw"></i>
                        設定
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('/logout') }}">ログアウト</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ url('/delete_user') }}">退会</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" action="{{url('/search_report')}}" method="get">
                <input class="form-control me-2" name="search_word" type="search" placeholder="記事を検索" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit"><i class="fas fa-search fa-fw"></i></button>
            </form>
        </div>
    </div>
</nav>