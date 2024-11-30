<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details | Vitacare</title>
    <link rel="shortcut icon" href="{{asset('assets/svgs/logo-mark.svg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <body>
    <!-- Topbar -->
    <section class="relative flex items-center justify-between gap-5 wrapper">
      <a href="{{ route('front.index') }}" class="p-2 bg-white rounded-full">
        <img src="{{asset('assets/svgs/ic-arrow-left.svg')}}" class="size-5" alt="">
      </a>
      <p class="absolute text-base font-semibold translate-x-1/2 -translate-y-1/2 top-1/2 right-1/2">
        Details
      </p>
      <button type="button" class="p-2 bg-white rounded-full">
        <img src="{{asset('assets/svgs/ic-triple-dots.svg')}}" class="size-5" alt="">
      </button>
    </section>

    <img src="{{ Storage::url($product->photo) }}" class="h-[220px] w-auto mx-auto relative z-10" alt="">
    <section class="bg-white rounded-t-[60px] pt-[60px] px-6 pb-5 -mt-9 flex flex-col gap-5 max-w-[425px] mx-auto">
      <div style="padding-bottom: 7rem">
        <div class="flex items-center justify-between">
          <div class="flex flex-col gap-1">
            <p class="font-bold text-[22px]">
              {{ $product->name }}
            </p>
            <div class="flex items-center gap-1.5">
              <img src="{{ Storage::url($product->category->icon) }}" class="size-[30px]" alt="">
              <p class="font-semibold text-balance">
                {{ $product->category->name }}
              </p>
            </div>
          </div>
          <div class="flex items-center gap-1">
            <img src="{{asset('assets/svgs/star.svg')}}" class="size-6" alt="">
            <p class="font-semibold text-balance">
              4.5/5
            </p>
          </div>
        </div>
        <div id="About" class="flex flex-col gap-1 mt-7">
          <h2 class="font-semibold">About</h2>
          <p class="leading-[30px]">{{ $product->about }}</p>
        </div>
        <div id="Benefits" class="flex flex-col gap-3 mt-5">
          <h2 class="font-semibold">Benefits</h2>
          <div class="grid grid-cols-2 gap-4">
            <div
              class="flex p-[18px_14px] outline outline-1 outline-[#EDEEF0] rounded-2xl overflow-hidden justify-start">
              <div class="flex gap-3 items-center">
                <div class="size-6 flex shrink-0">
                  <img src="{{ asset('assets/svgs/note-favorite.svg') }}" alt="icon" class="size-full" />
                </div>
                <p class="text-sm leading-[21px] font-semibold text-nowrap">Original 100%</p>
              </div>
            </div>
            <div
              class="flex p-[18px_14px] outline outline-1 outline-[#EDEEF0] rounded-2xl overflow-hidden justify-start">
              <div class="flex gap-3 items-center">
                <div class="size-6 flex shrink-0">
                  <img src="{{ asset('assets/svgs/dollar-circle.svg') }}" alt="icon" class="size-full" />
                </div>
                <p class="text-sm leading-[21px] font-semibold text-nowrap">Cheapest</p>
              </div>
            </div>
            <div
              class="flex p-[18px_14px] outline outline-1 outline-[#EDEEF0] rounded-2xl overflow-hidden justify-start">
              <div class="flex gap-3 items-center">
                <div class="size-6 flex shrink-0">
                  <img src="{{ asset('assets/svgs/location.svg') }}" alt="icon" class="size-full" />
                </div>
                <p class="text-sm leading-[21px] font-semibold text-nowrap">Fast Service</p>
              </div>
            </div>
            <div
              class="flex p-[18px_14px] outline outline-1 outline-[#EDEEF0] rounded-2xl overflow-hidden justify-start">
              <div class="flex gap-3 items-center">
                <div class="size-6 flex shrink-0">
                  <img src="{{ asset('assets/svgs/shield-tick.svg') }}" alt="icon" class="size-full" />
                </div>
                <p class="text-sm leading-[21px] font-semibold text-nowrap">Protected</p>
              </div>
            </div>
          </div>
        </div>
        <a id="promo" href="#" class="px-1 mt-[17px]">
          <div class="w-full aspect-[353/100] flex shrink-0 overflow-hidden rounded-2xl">
            <img src="{{asset('assets/images/banner-detail.svg')}}" class="w-full h-full object-cover" alt="promo" />
          </div>
        </a>
        <div id="Testimonials" class="flex flex-col gap-[14px]">
          <h2 class="font-semibold mt-2">Testimonials</h2>
          <div class="flex flex-col gap-4">
            <!-- Testi -->
            
            <div class="pb-4 border-b border-[#EDEEF0]">
              <div class="flex gap-3">
                <!-- photo -->
                <div class="size-[50px] flex shrink-0 rounded-full overflow-hidden">
                  <img src="{{asset('assets/svgs/avatar.svg')}}" alt="icon" class="size-full" />
                </div>
                <div class="flex flex-col gap-[6px] w-full">
                  <div class="flex items-center justify-between mb-1">
                    <p class="text-sm leading-[21px] font-semibold">vanica</p>
                    <div class="flex gap-[2px]">
                      <div class="size-5 flex shrink-0">
                        <img src="{{asset('assets/svgs/star.svg')}}" alt="icon" class="size-full" />
                      </div>
                      <div class="size-5 flex shrink-0">
                        <img src="{{asset('assets/svgs/star.svg')}}" alt="icon" class="size-full" />
                      </div>
                      <div class="size-5 flex shrink-0">
                        <img src="{{asset('assets/svgs/star.svg')}}" alt="icon" class="size-full" />
                      </div>
                      <div class="size-5 flex shrink-0">
                        <img src="{{asset('assets/svgs/star.svg')}}" alt="icon" class="size-full" />
                      </div>
                      <div class="size-5 flex shrink-0">
                        <img src="{{asset('assets/svgs/star.svg')}}" alt="icon" class="size-full" />
                      </div>
                    </div>
                  </div>
                  <p class="text-xs leading-5 text-[#6E6E70]">lorem ipsum dolor sit amet constrectur</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <section class="wrapper !px-0 flex flex-col gap-2.5">
          <div id="proudctsSlider" class="relative">
                    @forelse ($randomProducts as $product)
                        <div class="rounded-2xl bg-gray-100 py-3.5 pl-4 pr-[22px] inline-flex flex-col gap-4 items-start mr-4 relative w-[158px]">
                            <img src="{{ Storage::url($product->photo) }}" class="h-[100px] w-full object-contain" alt="">
                            <div>
                                <a href="{{ route('front.product.details', $product->slug) }}" class="text-base font-semibold w-[120px] truncate stretched-link block">
                                    {{ $product->name }}
                                </a>
                                <p class="text-sm truncate text-grey">
                                    Rp. {{ number_format($product->price, 0, ',', '.') }}
                                </p>
                            </div>
                        </div>
                    @empty
                        <p>
                            Belum Ada Product Tersedia
                        </p>
                    @endforelse
          </div>
        </section>
      </div>
      

      <!-- Price and Add to cart -->
      <div class="fixed z-50 bottom-[30px] bg-black rounded-3xl p-5 left-1/2 -translate-x-1/2 w-[calc(100dvw-32px)] max-w-[425px]">
        <div class="flex items-center justify-between gap-5">
          <div class="flex flex-col gap-0.5">
            <p class="text-lg min-[350px]:text-2xl font-bold text-white">
              Rp.{{ number_format($product->price, 0, ',', '.') }}
            </p>
          </div>
          <form action="{{ route('carts.store', $product->id) }}" method="POST">
            @csrf
            <button type="submit" class="inline-flex w-max text-white font-bold text-base bg-primary rounded-full px-[30px] py-3 justify-center items-center whitespace-nowrap">
              Add to Cart
            </button>
        </form>
        </div>
      </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <script src="{{asset('scripts/sliderConfig.js')}}" type="module"></script>
  </body>

</html>