{{--
  Template Name: HOME
--}}
@extends('layouts.default')

@section('content')
<nav class="flex items-center justify-between flex-wrap bg-grey-darkest p-6">
  
  
  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
    <div class="text-sm lg:flex-grow">
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white mr-4">
     Home
      </a>
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white mr-4">
      About
      </a>
      <a href="#responsive-header" class="block mt-4 mr-4 lg:inline-block lg:mt-0 text-white">
     Shop
      </a>
      <a href="#responsive-header" class="block mt-4 mr-4 lg:inline-block lg:mt-0 text-white">
        Contact
         </a>
    </div>
    <div>
      <a href="#" class="inline-block text-sm px-4 py-2 leading-none  rounded text-white  bg-blue mt-4 lg:mt-0">Download</a>
    </div>
  </div>
</nav>
<div class="py-10 px-10 bg-black">
<h2 class="text-2xl text-font-hairline text-white">A Simple Solution<h2>
  <p class="text-white text-sm">Create your beautiful website today</p>
</div>
@if (!have_posts())
<div class="alert alert-warning">
  {{ __('Sorry, no results were found.', 'sage') }}
</div>
{!! get_search_form(false) !!}
@endif
 @while($allpost->have_posts()) @php $allpost->the_post() @endphp
 <div class="m-6 px-4 py-6 rounded-lg border-b  shadow-lg">
 <h1>{{ the_title() }}</h1>
 <p>{{ the_content() }}</p>
</div>
@endwhile

<nav class="flex items-center justify-between flex-wrap bg-grey-darkest p-6">
  
  
  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
    <div class="text-sm lg:flex-grow">
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white mr-4">
     Home
      </a>
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white mr-4">
      About
      </a>
      <a href="#responsive-header" class="block mt-4 mr-4 lg:inline-block lg:mt-0 text-white">
     Shop
      </a>
      <a href="#responsive-header" class="block mt-4 mr-4 lg:inline-block lg:mt-0 text-white">
        Contact
         </a>
    </div>
    <div>
      <a href="#" class="inline-block text-sm px-4 py-2 leading-none  rounded text-white  bg-blue mt-4 lg:mt-0">Download</a>
    </div>
  </div>
</nav>
<div class="py-10 px-10 bg-black">
  <h2 class="text-2xl text-font-hairline text-white">A Simple Solution<h2>
    <p class="text-white text-sm">Create your beautiful website today</p>
  </div>
  
@endsection