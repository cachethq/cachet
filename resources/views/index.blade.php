@extends('layouts.master')

@section('content')
    <section>
        <div class="inset-x-0 pb-2 sm:pb-5">
          <div class="max-w-screen-xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="p-2 rounded-lg bg-red-600 shadow-lg sm:p-3">
              <div class="flex items-center justify-between flex-wrap">
                <div class="w-0 flex-1 flex items-center">
                  <span class="flex p-2 rounded-lg bg-red-800">
                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="text-white w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016zM12 9v2m0 4h.01"/>
                    </svg>
                  </span>
                  <p class="ml-3 font-medium text-white truncate">
                    <span>
                      {{ __("Sorry, we're experiencing major outages.") }}
                    </span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section>
        <div class="max-w-6xl mx-auto pb-12 px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden sm:rounded-lg sm:shadow">
                <div class="bg-gray-300 px-4 py-5 border-b border-gray-200 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-black">{!! __('Laravel Services') !!}</h3>
                </div>
                <ul>
                    <li>
                        <a href="#" class="block hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition duration-150 ease-in-out">
                            <div class="px-4 py-4 sm:px-6">
                                <div class="flex items-center justify-between">
                                    <div class="text-sm leading-5 font-medium text-indigo-600 truncate">
                                        Laravel Forge
                                    </div>
                                    <div class="ml-2 flex-shrink-0 flex">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Operational
                                        </span>
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div class="sm:flex">
                                        <div class="mr-6 flex items-center text-sm leading-5 text-gray-500">
                                            https://forge.laravel.com
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition duration-150 ease-in-out">
                            <div class="px-4 py-4 sm:px-6">
                                <div class="flex items-center justify-between">
                                    <div class="text-sm leading-5 font-medium text-indigo-600 truncate">
                                        Laravel Vapor
                                    </div>
                                    <div class="ml-2 flex-shrink-0 flex">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                            Minor Issues
                                        </span>
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div class="sm:flex">
                                        <div class="mr-6 flex items-center text-sm leading-5 text-gray-500">
                                            https://vapor.laravel.com
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition duration-150 ease-in-out">
                            <div class="px-4 py-4 sm:px-6">
                                <div class="flex items-center justify-between">
                                    <div class="text-sm leading-5 font-medium text-indigo-600 truncate">
                                        Envoyer
                                    </div>
                                    <div class="ml-2 flex-shrink-0 flex">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                            Major Outage
                                        </span>
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div class="sm:flex">
                                        <div class="mr-6 flex items-center text-sm leading-5 text-gray-500">
                                            https://envoyer.io
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section>
        <div class="max-w-6xl mx-auto pb-12 px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden sm:rounded-lg sm:shadow">
                <div class="bg-gray-300 px-4 py-5 border-b border-gray-200 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-black">{!! __('Past Incidents') !!}</h3>
                </div>
                <a href="#" class="block hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition duration-150 ease-in-out">
                    <div class="px-4 py-4 sm:px-6">
                        <div class="text-sm leading-5 text-gray-600 truncate">{{ date('jS M Y') }}</div>
                        <div class="flex justify-between">
                            <div class="sm:flex">
                                <div class="mr-6 flex items-center leading-5 text-gray-800 text-lg font-semibold">
                                    API Performance Degradation Issues
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
</div>
@stop
