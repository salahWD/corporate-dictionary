@extends('layout/layout')

@section('content')
  <div class="bg-white py-6 min-h-screen flex place-items-center">
    <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
      <div class="flex flex-row flex-wrap">
        <div class="flex-shrink max-w-full w-full">
          <div class="p-10 text-center">
            <div class="mb-4 text-center">
              <h1 class="text-9xl text-gray-800 font-bold mb-2">Search</h1>
              <span class="inline-block h-0.5 w-20 bg-red-600"></span>
            </div>
            <h3 class="text-4xl mb-2">for any corporate by field or geographical location</h3>
            <span>enter field and/or geographical location to search for corporates at.</span>
          </div>
        </div>
      </div>
      <div class="flex flex-row flex-wrap">
        <div class="flex-shrink max-w-full w-full">
          <div class="p-10">

            <form class="max-w-md mx-auto relative">
              <div class="flex">
                <button id="dropdown-button-1" data-dropdown-toggle="dropdown-search-city"
                  class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-500 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100"
                  type="button">
                  <svg aria-hidden="true" class="h-3 me-2" viewBox="0 0 15 12" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" width="14" height="12" rx="2" fill="white" />
                    <mask id="mask0_12694_49953" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                      width="15" height="12">
                      <rect x="0.5" width="14" height="12" rx="2" fill="white" />
                    </mask>
                    <g mask="url(#mask0_12694_49953)">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M14.5 0H0.5V0.8H14.5V0ZM14.5 1.6H0.5V2.4H14.5V1.6ZM0.5 3.2H14.5V4H0.5V3.2ZM14.5 4.8H0.5V5.6H14.5V4.8ZM0.5 6.4H14.5V7.2H0.5V6.4ZM14.5 8H0.5V8.8H14.5V8ZM0.5 9.6H14.5V10.4H0.5V9.6ZM14.5 11.2H0.5V12H14.5V11.2Z"
                        fill="#D02F44" />
                      <rect x="0.5" width="6" height="5.6" fill="#46467F" />
                      <g filter="url(#filter0_d_12694_49953)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M1.83317 1.20005C1.83317 1.42096 1.68393 1.60005 1.49984 1.60005C1.31574 1.60005 1.1665 1.42096 1.1665 1.20005C1.1665 0.979135 1.31574 0.800049 1.49984 0.800049C1.68393 0.800049 1.83317 0.979135 1.83317 1.20005ZM3.1665 1.20005C3.1665 1.42096 3.01727 1.60005 2.83317 1.60005C2.64908 1.60005 2.49984 1.42096 2.49984 1.20005C2.49984 0.979135 2.64908 0.800049 2.83317 0.800049C3.01727 0.800049 3.1665 0.979135 3.1665 1.20005ZM4.1665 1.60005C4.3506 1.60005 4.49984 1.42096 4.49984 1.20005C4.49984 0.979135 4.3506 0.800049 4.1665 0.800049C3.98241 0.800049 3.83317 0.979135 3.83317 1.20005C3.83317 1.42096 3.98241 1.60005 4.1665 1.60005ZM5.83317 1.20005C5.83317 1.42096 5.68393 1.60005 5.49984 1.60005C5.31574 1.60005 5.1665 1.42096 5.1665 1.20005C5.1665 0.979135 5.31574 0.800049 5.49984 0.800049C5.68393 0.800049 5.83317 0.979135 5.83317 1.20005ZM2.1665 2.40005C2.3506 2.40005 2.49984 2.22096 2.49984 2.00005C2.49984 1.77913 2.3506 1.60005 2.1665 1.60005C1.98241 1.60005 1.83317 1.77913 1.83317 2.00005C1.83317 2.22096 1.98241 2.40005 2.1665 2.40005ZM3.83317 2.00005C3.83317 2.22096 3.68393 2.40005 3.49984 2.40005C3.31574 2.40005 3.1665 2.22096 3.1665 2.00005C3.1665 1.77913 3.31574 1.60005 3.49984 1.60005C3.68393 1.60005 3.83317 1.77913 3.83317 2.00005ZM4.83317 2.40005C5.01726 2.40005 5.1665 2.22096 5.1665 2.00005C5.1665 1.77913 5.01726 1.60005 4.83317 1.60005C4.64908 1.60005 4.49984 1.77913 4.49984 2.00005C4.49984 2.22096 4.64908 2.40005 4.83317 2.40005ZM5.83317 2.80005C5.83317 3.02096 5.68393 3.20005 5.49984 3.20005C5.31574 3.20005 5.1665 3.02096 5.1665 2.80005C5.1665 2.57914 5.31574 2.40005 5.49984 2.40005C5.68393 2.40005 5.83317 2.57914 5.83317 2.80005ZM4.1665 3.20005C4.3506 3.20005 4.49984 3.02096 4.49984 2.80005C4.49984 2.57914 4.3506 2.40005 4.1665 2.40005C3.98241 2.40005 3.83317 2.57914 3.83317 2.80005C3.83317 3.02096 3.98241 3.20005 4.1665 3.20005ZM3.1665 2.80005C3.1665 3.02096 3.01727 3.20005 2.83317 3.20005C2.64908 3.20005 2.49984 3.02096 2.49984 2.80005C2.49984 2.57914 2.64908 2.40005 2.83317 2.40005C3.01727 2.40005 3.1665 2.57914 3.1665 2.80005ZM1.49984 3.20005C1.68393 3.20005 1.83317 3.02096 1.83317 2.80005C1.83317 2.57914 1.68393 2.40005 1.49984 2.40005C1.31574 2.40005 1.1665 2.57914 1.1665 2.80005C1.1665 3.02096 1.31574 3.20005 1.49984 3.20005ZM2.49984 3.60005C2.49984 3.82096 2.3506 4.00005 2.1665 4.00005C1.98241 4.00005 1.83317 3.82096 1.83317 3.60005C1.83317 3.37913 1.98241 3.20005 2.1665 3.20005C2.3506 3.20005 2.49984 3.37913 2.49984 3.60005ZM3.49984 4.00005C3.68393 4.00005 3.83317 3.82096 3.83317 3.60005C3.83317 3.37913 3.68393 3.20005 3.49984 3.20005C3.31574 3.20005 3.1665 3.37913 3.1665 3.60005C3.1665 3.82096 3.31574 4.00005 3.49984 4.00005ZM5.1665 3.60005C5.1665 3.82096 5.01726 4.00005 4.83317 4.00005C4.64908 4.00005 4.49984 3.82096 4.49984 3.60005C4.49984 3.37913 4.64908 3.20005 4.83317 3.20005C5.01726 3.20005 5.1665 3.37913 5.1665 3.60005ZM5.49984 4.80005C5.68393 4.80005 5.83317 4.62096 5.83317 4.40005C5.83317 4.17913 5.68393 4.00005 5.49984 4.00005C5.31574 4.00005 5.1665 4.17913 5.1665 4.40005C5.1665 4.62096 5.31574 4.80005 5.49984 4.80005ZM4.49984 4.40005C4.49984 4.62096 4.3506 4.80005 4.1665 4.80005C3.98241 4.80005 3.83317 4.62096 3.83317 4.40005C3.83317 4.17913 3.98241 4.00005 4.1665 4.00005C4.3506 4.00005 4.49984 4.17913 4.49984 4.40005ZM2.83317 4.80005C3.01727 4.80005 3.1665 4.62096 3.1665 4.40005C3.1665 4.17913 3.01727 4.00005 2.83317 4.00005C2.64908 4.00005 2.49984 4.17913 2.49984 4.40005C2.49984 4.62096 2.64908 4.80005 2.83317 4.80005ZM1.83317 4.40005C1.83317 4.62096 1.68393 4.80005 1.49984 4.80005C1.31574 4.80005 1.1665 4.62096 1.1665 4.40005C1.1665 4.17913 1.31574 4.00005 1.49984 4.00005C1.68393 4.00005 1.83317 4.17913 1.83317 4.40005Z"
                          fill="url(#paint0_linear_12694_49953)" />
                      </g>
                    </g>
                    <defs>
                      <filter id="filter0_d_12694_49953" x="1.1665" y="0.800049" width="4.6665" height="5"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                          result="hardAlpha" />
                        <feOffset dy="1" />
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.06 0" />
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12694_49953" />
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12694_49953" result="shape" />
                      </filter>
                      <linearGradient id="paint0_linear_12694_49953" x1="1.1665" y1="0.800049" x2="1.1665"
                        y2="4.80005" gradientUnits="userSpaceOnUse">
                        <stop stop-color="white" />
                        <stop offset="1" stop-color="#F0F0F0" />
                      </linearGradient>
                    </defs>
                  </svg>
                  USA
                  <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 1 4 4 4-4" />
                  </svg>
                </button>
                <div id="dropdown-search-city"
                  class="z-10 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 hidden"
                  style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0, 45px);"
                  data-popper-placement="bottom">
                  <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdown-button-2">
                    <li>
                      <button type="button" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 "
                        role="menuitem">
                        <div class="inline-flex items-center">
                          <svg aria-hidden="true" class="h-3.5 w-3.5 rounded-full me-2" xmlns="http://www.w3.org/2000/svg"
                            id="flag-icon-css-us" viewBox="0 0 512 512">
                            <g fill-rule="evenodd">
                              <g stroke-width="1pt">
                                <path fill="#bd3d44"
                                  d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                  transform="scale(3.9385)"></path>
                                <path fill="#fff"
                                  d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                  transform="scale(3.9385)"></path>
                              </g>
                              <path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)"></path>
                              <path fill="#fff"
                                d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z"
                                transform="scale(3.9385)"></path>
                            </g>
                          </svg>
                          United States
                        </div>
                      </button>
                    </li>
                    <li>
                      <button type="button"
                        class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 " role="menuitem">
                        <div class="inline-flex items-center">
                          <svg aria-hidden="true" class="h-3.5 w-3.5 rounded-full me-2"
                            xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-de" viewBox="0 0 512 512">
                            <path fill="#ffce00" d="M0 341.3h512V512H0z"></path>
                            <path d="M0 0h512v170.7H0z"></path>
                            <path fill="#d00" d="M0 170.7h512v170.6H0z"></path>
                          </svg>
                          Germany
                        </div>
                      </button>
                    </li>
                    <li>
                      <button type="button"
                        class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 " role="menuitem">
                        <div class="inline-flex items-center">
                          <svg aria-hidden="true" class="h-3.5 w-3.5 rounded-full me-2"
                            xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-it" viewBox="0 0 512 512">
                            <g fill-rule="evenodd" stroke-width="1pt">
                              <path fill="#fff" d="M0 0h512v512H0z"></path>
                              <path fill="#009246" d="M0 0h170.7v512H0z"></path>
                              <path fill="#ce2b37" d="M341.3 0H512v512H341.3z"></path>
                            </g>
                          </svg>
                          Italy
                        </div>
                      </button>
                    </li>
                    <li>
                      <button type="button"
                        class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 " role="menuitem">
                        <div class="inline-flex items-center">
                          <svg aria-hidden="true" class="h-3.5 w-3.5 rounded-full me-2"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            id="flag-icon-css-cn" viewBox="0 0 512 512">
                            <defs>
                              <path id="a" fill="#ffde00" d="M1-.3L-.7.8 0-1 .6.8-1-.3z"></path>
                            </defs>
                            <path fill="#de2910" d="M0 0h512v512H0z"></path>
                            <use width="30" height="20" transform="matrix(76.8 0 0 76.8 128 128)"
                              xlink:href="#a">
                            </use>
                            <use width="30" height="20" transform="rotate(-121 142.6 -47) scale(25.5827)"
                              xlink:href="#a"></use>
                            <use width="30" height="20" transform="rotate(-98.1 198 -82) scale(25.6)"
                              xlink:href="#a">
                            </use>
                            <use width="30" height="20" transform="rotate(-74 272.4 -114) scale(25.6137)"
                              xlink:href="#a"></use>
                            <use width="30" height="20" transform="matrix(16 -19.968 19.968 16 256 230.4)"
                              xlink:href="#a"></use>
                          </svg>
                          China
                        </div>
                      </button>
                    </li>
                  </ul>
                </div>
                <button id="dropdown-button-2" data-dropdown-toggle="dropdown-search-field"
                  class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-500 bg-gray-100 border border-gray-300 rounded-none hover:bg-gray-200 focus:ring-0 focus:outline-none"
                  type="button">
                  <svg fill="currentColor" width="20" height="20" viewBox="0 -8 72 72"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M27.69,34.62l-4.85-7.84.37-.36,1.6,1.37a1.5,1.5,0,0,0,.53,1.93,1.54,1.54,0,0,0,.81.23,1.49,1.49,0,0,0,.87-.27L37,38.2a.62.62,0,0,0,.44.18.64.64,0,0,0,.47-.21.65.65,0,0,0,0-.91L27.8,28.66l5-7.88a1.49,1.49,0,0,0,0-1.62,2.26,2.26,0,0,0-.25-.29L26.74,12a1.5,1.5,0,0,0-1.24-.66h0l-7.67.07a1.22,1.22,0,0,0-1.07.69l-2.37,5.09-.63-.54a.63.63,0,0,0-.9,0,.64.64,0,0,0,0,.91l.93.8-.24.53a1.52,1.52,0,0,0,.59,2,1.42,1.42,0,0,0,.74.2,1.51,1.51,0,0,0,1.27-.7l.78.67L13.4,24.87a2.37,2.37,0,0,0-.76,1.66l-.26,8.58L10.05,45.19A2.35,2.35,0,0,0,11.81,48a2.48,2.48,0,0,0,.54.06,2.35,2.35,0,0,0,2.29-1.83l2.44-10.53.23-7.63,1.4,1,4,6.49-4.38,9.15a2.35,2.35,0,1,0,4.25,2L27.76,36A1.37,1.37,0,0,0,27.69,34.62Z" />
                    <circle cx="33.46" cy="12.22" r="4.3" />
                    <path
                      d="M61.39,45.33c-1.44-2.1-8.34-15.16-10.12-17s-3.36-2.08-4.44-1.64a6.94,6.94,0,0,0-3,2.24c-1.27,1.73-3,6.91-4.44,9.23a11.08,11.08,0,0,0-.8,1l-.08.06c-1.06.64-4,1.19-5.19,2.4a15.63,15.63,0,0,0-1.92,2.6l-.18.25a8.22,8.22,0,0,1-3.93,3.27l0,.32H60.43C60.66,48.08,63.15,47.9,61.39,45.33Z" />
                  </svg>
                  Construction
                  <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 1 4 4 4-4" />
                  </svg>
                </button>
                <div id="dropdown-search-field"
                  class="z-10 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 hidden"
                  style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(100px, 45px);"
                  data-popper-placement="bottom">
                  <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdown-button-2">
                    <li>
                      <button type="button"
                        class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 " role="menuitem">
                        <div class="inline-flex items-center">
                          <svg fill="currentColor" width="30" height="30" viewBox="0 -8 72 72"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M27.69,34.62l-4.85-7.84.37-.36,1.6,1.37a1.5,1.5,0,0,0,.53,1.93,1.54,1.54,0,0,0,.81.23,1.49,1.49,0,0,0,.87-.27L37,38.2a.62.62,0,0,0,.44.18.64.64,0,0,0,.47-.21.65.65,0,0,0,0-.91L27.8,28.66l5-7.88a1.49,1.49,0,0,0,0-1.62,2.26,2.26,0,0,0-.25-.29L26.74,12a1.5,1.5,0,0,0-1.24-.66h0l-7.67.07a1.22,1.22,0,0,0-1.07.69l-2.37,5.09-.63-.54a.63.63,0,0,0-.9,0,.64.64,0,0,0,0,.91l.93.8-.24.53a1.52,1.52,0,0,0,.59,2,1.42,1.42,0,0,0,.74.2,1.51,1.51,0,0,0,1.27-.7l.78.67L13.4,24.87a2.37,2.37,0,0,0-.76,1.66l-.26,8.58L10.05,45.19A2.35,2.35,0,0,0,11.81,48a2.48,2.48,0,0,0,.54.06,2.35,2.35,0,0,0,2.29-1.83l2.44-10.53.23-7.63,1.4,1,4,6.49-4.38,9.15a2.35,2.35,0,1,0,4.25,2L27.76,36A1.37,1.37,0,0,0,27.69,34.62Z" />
                            <circle cx="33.46" cy="12.22" r="4.3" />
                            <path
                              d="M61.39,45.33c-1.44-2.1-8.34-15.16-10.12-17s-3.36-2.08-4.44-1.64a6.94,6.94,0,0,0-3,2.24c-1.27,1.73-3,6.91-4.44,9.23a11.08,11.08,0,0,0-.8,1l-.08.06c-1.06.64-4,1.19-5.19,2.4a15.63,15.63,0,0,0-1.92,2.6l-.18.25a8.22,8.22,0,0,1-3.93,3.27l0,.32H60.43C60.66,48.08,63.15,47.9,61.39,45.33Z" />
                          </svg>
                          Construction
                        </div>
                      </button>
                    </li>
                    <li>
                      <button type="button"
                        class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 " role="menuitem">
                        <div class="inline-flex items-center">
                          <svg fill="currentColor" width="30" height="30" viewBox="0 -8 72 72"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M27.69,34.62l-4.85-7.84.37-.36,1.6,1.37a1.5,1.5,0,0,0,.53,1.93,1.54,1.54,0,0,0,.81.23,1.49,1.49,0,0,0,.87-.27L37,38.2a.62.62,0,0,0,.44.18.64.64,0,0,0,.47-.21.65.65,0,0,0,0-.91L27.8,28.66l5-7.88a1.49,1.49,0,0,0,0-1.62,2.26,2.26,0,0,0-.25-.29L26.74,12a1.5,1.5,0,0,0-1.24-.66h0l-7.67.07a1.22,1.22,0,0,0-1.07.69l-2.37,5.09-.63-.54a.63.63,0,0,0-.9,0,.64.64,0,0,0,0,.91l.93.8-.24.53a1.52,1.52,0,0,0,.59,2,1.42,1.42,0,0,0,.74.2,1.51,1.51,0,0,0,1.27-.7l.78.67L13.4,24.87a2.37,2.37,0,0,0-.76,1.66l-.26,8.58L10.05,45.19A2.35,2.35,0,0,0,11.81,48a2.48,2.48,0,0,0,.54.06,2.35,2.35,0,0,0,2.29-1.83l2.44-10.53.23-7.63,1.4,1,4,6.49-4.38,9.15a2.35,2.35,0,1,0,4.25,2L27.76,36A1.37,1.37,0,0,0,27.69,34.62Z" />
                            <circle cx="33.46" cy="12.22" r="4.3" />
                            <path
                              d="M61.39,45.33c-1.44-2.1-8.34-15.16-10.12-17s-3.36-2.08-4.44-1.64a6.94,6.94,0,0,0-3,2.24c-1.27,1.73-3,6.91-4.44,9.23a11.08,11.08,0,0,0-.8,1l-.08.06c-1.06.64-4,1.19-5.19,2.4a15.63,15.63,0,0,0-1.92,2.6l-.18.25a8.22,8.22,0,0,1-3.93,3.27l0,.32H60.43C60.66,48.08,63.15,47.9,61.39,45.33Z" />
                          </svg>
                          Construction
                        </div>
                      </button>
                    </li>
                    <li>
                      <button type="button"
                        class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 " role="menuitem">
                        <div class="inline-flex items-center">
                          <svg fill="currentColor" width="30" height="30" viewBox="0 -8 72 72"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M27.69,34.62l-4.85-7.84.37-.36,1.6,1.37a1.5,1.5,0,0,0,.53,1.93,1.54,1.54,0,0,0,.81.23,1.49,1.49,0,0,0,.87-.27L37,38.2a.62.62,0,0,0,.44.18.64.64,0,0,0,.47-.21.65.65,0,0,0,0-.91L27.8,28.66l5-7.88a1.49,1.49,0,0,0,0-1.62,2.26,2.26,0,0,0-.25-.29L26.74,12a1.5,1.5,0,0,0-1.24-.66h0l-7.67.07a1.22,1.22,0,0,0-1.07.69l-2.37,5.09-.63-.54a.63.63,0,0,0-.9,0,.64.64,0,0,0,0,.91l.93.8-.24.53a1.52,1.52,0,0,0,.59,2,1.42,1.42,0,0,0,.74.2,1.51,1.51,0,0,0,1.27-.7l.78.67L13.4,24.87a2.37,2.37,0,0,0-.76,1.66l-.26,8.58L10.05,45.19A2.35,2.35,0,0,0,11.81,48a2.48,2.48,0,0,0,.54.06,2.35,2.35,0,0,0,2.29-1.83l2.44-10.53.23-7.63,1.4,1,4,6.49-4.38,9.15a2.35,2.35,0,1,0,4.25,2L27.76,36A1.37,1.37,0,0,0,27.69,34.62Z" />
                            <circle cx="33.46" cy="12.22" r="4.3" />
                            <path
                              d="M61.39,45.33c-1.44-2.1-8.34-15.16-10.12-17s-3.36-2.08-4.44-1.64a6.94,6.94,0,0,0-3,2.24c-1.27,1.73-3,6.91-4.44,9.23a11.08,11.08,0,0,0-.8,1l-.08.06c-1.06.64-4,1.19-5.19,2.4a15.63,15.63,0,0,0-1.92,2.6l-.18.25a8.22,8.22,0,0,1-3.93,3.27l0,.32H60.43C60.66,48.08,63.15,47.9,61.39,45.33Z" />
                          </svg>
                          Construction
                        </div>
                      </button>
                    </li>
                  </ul>
                </div>
                <button type="submit"
                  class="h-full p-3 text-sm font-medium text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                  </svg>
                  <span class="sr-only">Search</span>
                </button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
  <script>
    // select dropdown buttons
    const cityDdBtn = document.getElementById("dropdown-button-1");
    const fieldDdBtn = document.getElementById("dropdown-button-2");
    [cityDdBtn, fieldDdBtn].forEach(item => {
      item.addEventListener("click", function() {
        const dd = document.getElementById(this.dataset.dropdownToggle)
        dd.classList.toggle("hidden");
      })
    })
  </script>
@endsection
