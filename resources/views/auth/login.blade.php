<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In | Vitacare</title>
    <link rel="shortcut icon" href="{{asset('assets/svgs/logo-mark.svg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <body>

    <div class="flex flex-col items-center px-6 py-10 min-h-dvh">
      <img src="{{asset('assets/images/vitacare.png')}}" class="mb-[53px]" alt="">
      <a href="{{ route('socialiteRedirect', 'google') }}"
      class="flex hover:bg-[#DDA0DD] max-w-[311px] transition-all duration-300 text-white w-full bg-[#FD915A] gap-2 items-center justify-center border border-gray-300 px-4 py-2 text-sm font-medium rounded-full dark:text-white shadow-sm disabled:cursor-wait disabled:opacity-50">
      <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
          <clipPath id="p.0">
              <path d="m0 0l20.0 0l0 20.0l-20.0 0l0 -20.0z" clip-rule="nonzero"></path>
          </clipPath>
          <g clip-path="url(#p.0)">
              <path fill="currentColor" fill-opacity="0.0" d="m0 0l20.0 0l0 20.0l-20.0 0z"
                  fill-rule="evenodd"></path>
              <path fill="currentColor"
                  d="m19.850197 8.270351c0.8574047 4.880001 -1.987587 9.65214 -6.6881847 11.218641c-4.700598 1.5665016 -9.83958 -0.5449295 -12.08104 -4.963685c-2.2414603 -4.4187555 -0.909603 -9.81259 3.1310139 -12.6801605c4.040616 -2.867571 9.571754 -2.3443127 13.002944 1.2301085l-2.8127813 2.7000687l0 0c-2.0935059 -2.1808972 -5.468274 -2.500158 -7.933616 -0.75053835c-2.4653416 1.74962 -3.277961 5.040613 -1.9103565 7.7366734c1.3676047 2.6960592 4.5031037 3.9843292 7.3711267 3.0285425c2.868022 -0.95578575 4.6038647 -3.8674583 4.0807285 -6.844941z"
                  fill-rule="evenodd"></path>
              <path fill="currentColor" d="m10.000263 8.268785l9.847767 0l0 3.496233l-9.847767 0z"
                  fill-rule="evenodd"></path>
          </g>
      </svg>
      <span class="">Sign in with Google</span>
  </a>
      <form action="{{ route('login') }}" method="POST" class="mx-auto max-w-[345px] w-full p-6 bg-white rounded-3xl mt-[15px]" id="deliveryForm">
        @csrf
        <div class="flex flex-col gap-5">
          <p class="text-[22px] font-bold">
            Sign In
          </p>
          <!-- Email Address -->
          <div class="flex flex-col gap-2.5">
            <label for="email" class="text-base font-semibold" >Email Address</label>
            <input type="email" name="email" id="email__" style="background-image: url('{{asset('assets/svgs/ic-email.svg')}}') "
              class="form-input " placeholder="Your email address">
          </div>
          <!-- Password -->
          <div class="flex flex-col gap-2.5">
            <label for="password" class="text-base font-semibold">Password</label>
            <input type="password" name="password" id="password__" style="background-image: url('{{asset('assets/svgs/ic-lock.svg')}}') "
              class="form-input " placeholder="Protect your password">
          </div>
          <button type="submit" class="inline-flex text-white font-bold text-base bg-primary rounded-full whitespace-nowrap px-[30px] py-3 justify-center items-center">
            Sign In
          </button>
        </div>
      </form>
      <a href="{{ route('register') }}" class="font-semibold text-base mt-[30px] underline">
        Create New Account
      </a>
      <nav class="fixed z-50 bottom-[30px] bg-black rounded-[50px] pt-[18px] px-10 left-1/2 -translate-x-1/2 w-80">
        <div class="flex items-center justify-center gap-5 flex-nowrap">
          <a href="{{ route('front.index') }}" class="flex flex-col items-center justify-center gap-1 px-1 group is-active">
            <img src="{{asset('assets/svgs/ic-grid.svg')}}" class="filter-to-grey group-[.is-active]:filter-to-primary" alt="">
            <p
              class="border-b-4 border-transparent group-[.is-active]:border-primary pb-3 text-xs text-center font-semibold text-grey group-[.is-active]:text-primary">
              Home
            </p>
          </a>
          <a href="#" class="flex flex-col items-center justify-center gap-1 px-1 group">
            <img src="{{asset('assets/svgs/ic-location.svg')}}" class="filter-to-grey group-[.is-active]:filter-to-primary"
              alt="">
            <p
              class="border-b-4 border-transparent group-[.is-active]:border-primary pb-3 text-xs text-center font-semibold text-grey group-[.is-active]:text-primary">
              Stores
            </p>
          </a>
          <a href="#" class="flex flex-col items-center justify-center gap-1 px-1 group">
            <img src="{{asset('assets/svgs/ic-note.svg')}}" class="filter-to-grey group-[.is-active]:filter-to-primary" alt="">
            <p
              class="border-b-4 border-transparent group-[.is-active]:border-primary pb-3 text-xs text-center font-semibold text-grey group-[.is-active]:text-primary">
              Orders
            </p>
          </a>
          <a href="{{ route('dashboard') }}" class="flex flex-col items-center justify-center gap-1 px-1 group">
            <img src="{{asset('assets/svgs/ic-profile.svg')}}" class="filter-to-grey group-[.is-active]:filter-to-primary"
              alt="">
            <p
              class="border-b-4 border-transparent group-[.is-active]:border-primary pb-3 text-xs text-center font-semibold text-grey group-[.is-active]:text-primary">
              Profile
            </p>
          </a>
        </div>
      </nav>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
      integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  </body>

</html>