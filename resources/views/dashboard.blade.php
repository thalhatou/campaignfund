@extends('layouts.main')
@section('content')
 @include('layouts.navigation')
  <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                 {{ Auth::user()->name }} You're Welcome  !
                </div>
            </div>
        </div>
    </div>
   {{-- <div class="container">
        <div class="row">
        <div class="col-lg-12 margin-tb m-4">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('campaign.create') }}"> Create New Campaign</a>
            </div>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Amount</th>
            <th>Duration</th>
            <th>Date and Time Created</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ( $campaigns as $campaign)
        <tr>
            <td>{{ $campaign->title }}</td>
            <td>{{ $campaign->description }}</td>
            <td>{{ $campaign->amount }}</td>
            <td>{{ $campaign->duration}}</td>
            <td>{{ $campaign->created_at}}</td>
            <td>
                <form action="{{ route('campaign.destroy',$campaign->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('campaign.show',$campaign->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('campaign.edit',$campaign->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
   </div> --}}
   <div class="container">
       <div class="col-lg-12 margin-tb m-4">
            <div class="pull-right">
                <a class="inline-flex items-center w-full px-6 py-3 text-sm font-medium leading-4 text-white bg-indigo-600 md:px-3 md:w-auto md:rounded-full lg:px-5 hover:bg-indigo-500 focus:outline-none md:focus:ring-2 focus:ring-0 focus:ring-offset-2 focus:ring-indigo-600" href="{{ route('campaign.create') }}"> Create New Campaign</a>
            </div>
        </div>
   <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
              <table class="w-full whitespace-no-wrap">
                <thead>
                  <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">Campaign Title</th>
                    <th class="px-4 py-3">Description</th>
                    <th class="px-4 py-3">Amount</th>
                    <th class="px-4 py-3">Duration</th>
                    <th class="px-4 py-3">Date-created</th>
                    <th class="px-4 py-3">Actions</th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                       @foreach ($campaigns as $campaign)
                  <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3">
                       {{ $campaign->title }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                    {{ $campaign->description }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                     {{ $campaign->amount }}
                    </td>
                    <td class="px-4 py-3 text-xs">
                      <span
                        class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                        {{ $campaign->duration }}
                      </span>
                    </td>
                    <td class="px-4 py-3 text-sm">
                     {{ $campaign->created_at }}
                    </td>
                    <td class="px-4 py-3">
                          <form action="{{ route('campaign.destroy',$campaign->id) }}" method="POST">
                         <div class="flex items-center space-x-4 text-sm">
                          <a class="inline-flex items-center w-full px-6 py-3 text-sm font-medium leading-4 text-white bg-indigo-600 md:px-3 md:w-auto md:rounded-full lg:px-5 hover:bg-indigo-500 focus:outline-none md:focus:ring-2 focus:ring-0 focus:ring-offset-2 focus:ring-indigo-600" href="{{ route('campaign.show',$campaign->id) }}">Preview</a>
                        <a href="{{ route('campaign.edit',$campaign->id) }}"
                          class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                          aria-label="Edit">
                          <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path
                              d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                            </path>
                          </svg>
                        </a>
                            @csrf
                          @method('DELETE')
                        <button type="submit"
                          class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-red-500 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                          aria-label="Delete">
                          <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                              d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                              clip-rule="evenodd"></path>
                          </svg>
                        </button>
                      </div>
                         </form>
                    </td>
                  </tr>
                     @endforeach
                <tbody>
              </table>
            </div>
          </div>
   </div>

@endsection
