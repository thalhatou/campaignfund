@extends('layouts.main')

@section('content')

<!-- Section 1 -->
<section class="w-full bg-white">
    <div class="mx-auto max-w-7xl">
        <div class="flex flex-col lg:flex-row">
            <div class="relative w-full bg-cover lg:w-6/12 xl:w-7/12 bg-gradient-to-r from-white via-white to-gray-100">
                <div class="relative flex flex-col items-center justify-center w-full h-full px-10 my-20 lg:px-16 lg:my-0">
                    <div class="flex flex-col items-start space-y-8 tracking-tight lg:max-w-3xl">
                        <div class="relative">
                            <p class="mb-2 font-medium text-gray-700 uppercase">Campaign Form</p>
                            <h2 class="text-5xl font-bold text-gray-900 xl:text-6xl">You Can update the Form to edit your Campaign</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full bg-white lg:w-6/12 xl:w-5/12">
                <div class="flex flex-col items-start justify-start w-full h-full p-10 lg:p-16 xl:p-24">
                    <h4 class="w-full text-3xl font-bold">Campaign Form</h4>
                    <form action="{{ route('campaign.update',$campaign->id) }}" method="post"  class="relative w-full mt-10 space-y-8">
                         @csrf
                         @method('PUT')
                        <div class="relative">
                            <label for="title" class="font-medium text-gray-900">Campaign Name</label>
                            <input type="text" name="title" class="block w-full px-4 py-4 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50" value="{{$campaign->title}}">
                        </div>
                        <div class="relative">
                            <label for="description" class="font-medium text-gray-900">Description</label>
                            <textarea class="block w-full px-4 py-4 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50" name="description">{{$campaign->description}}
                            </textarea>
                        </div>
                        <div class="relative">
                            <label for="amount" class="font-medium text-gray-900">Goal Amount</label>
                            <input type="text" name="amount" class="block w-full px-4 py-4 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50" value="{{$campaign->amount}}">
                        </div>
                        <div class="relative">
                            <label for="duration" class="font-medium text-gray-900">Duration</label>
                            <input type="text" name="duration" class="block w-full px-4 py-4 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50" value="{{$campaign->duration}}">
                        </div>
                        <div class="relative py-8">
                            <button type="submit" class="inline-block w-full px-5 py-4 text-lg font-medium text-center text-white transition duration-200 bg-blue-600 rounded-lg hover:bg-blue-700 ease">Update Campaign</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>


@endsection
