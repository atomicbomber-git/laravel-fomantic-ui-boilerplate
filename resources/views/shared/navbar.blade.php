<div class="ui inverted top fixed huge menu">
    <div class="ui container">
        <a class="item" href="{{ route('home') }}">
            <i class="home icon"></i>
            Halaman Utama
        </a>

        <div class="right menu">
            @auth
            <div class="item">
                <form method="POST" action="{{ route("logout") }}" class="ui form">
                    @csrf
                    <div class="t-a:r">
                        <button class="ui button negative tiny">
                            <i class="sign out alternate icon"></i>
                            Keluar
                        </button>
                    </div>
                </form>
            </div>
            @endauth
        </div>
    </div>
</div>