<header class="bg-white  border-bottom border-2 flex item center">
  <div>
  logo
  </div>

  <div>
  @auth
  <form action="{{ route('site.logout') }}" method="POST">
    @csrf
    <button type="submit" class="text-blue-500 hover:text-blue-700">
      logout
    </button>
  </form>
  @endauth

  @guest
   <a href="{{ route('site.login') }}" class="text-blue-500 hover:text-blue-700">
    login
  </a>
   

  @endguest
  </div>

</header>