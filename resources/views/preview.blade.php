@extends('layouts.main')
@include('layouts.header')
@section('content')
     <section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">{{ $campaign->title }}
        <br class="hidden lg:inline-block">
      </h1>
      <p class="mb-8 leading-relaxed">{{ $campaign->description }}</p>
      <div class="bg-white border-r-4 border-blue-400 w-full p-4">
        <div>
          <p class="text-gray-600 text-sm"><b>2500 XAF raised of </b>{{ $campaign->amount}}  XAF</p>
        </div>
      </div>
      <div class="shadow" role="alert">
    <div class="flex">
         <div>
        </div>
</div>
   <p class="text-gray-600 mb-8 text-sm"><b>Organize by</b> {{ Auth::user()->name }}</p>
      <div class="flex justify-center">
           <a href="/donate" type="button" class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-bold leading-6 text-white bg-indigo-600 border border-transparent rounded-full md:w-auto hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
                        Donate
                    </a>

                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>

      </div>
         <div class="bg-blue-500 w-16 text-center p-2 mt-8">
      </div>
    </div>
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
      <img class="object-cover object-center rounded" alt="hero" src="https://images.unsplash.com/photo-1459183885421-5cc683b8dbba?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80">
    </div>
  </div>
</section>
@include('layouts.footer')
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60660bdb0d2b07ca"></script>

@endsection
