{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')
<!-- row -->
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-12">
      <div class="card">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-xl-5 col-xxl-12 mr-auto">
              <div class="d-sm-flex d-block align-items-center">
                <img src="{{ asset('images/illustration.png') }}" alt="" class="mw-100 mr-3">
                <div>
                  <h4 class="fs-20 text-black">Generate your workout report for now </h4>
                  <p class="fs-14 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                </div>
              </div>
            </div>
            <div class="col-xl-7 col-xxl-12 mt-3">
              <a href="{!! url('/workoutplan'); !!}" class="btn btn-outline-primary btn-md mb-2">May 28th, 2020<i class="las la-calendar ml-3 scale5"></i></a>
              <svg class="ml-2 mr-2" width="14" height="3" viewBox="0 0 14 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="14" height="3" rx="1.5" fill="#2B2B2B"/>
              </svg>
              <a href="{!! url('/workoutplan'); !!}" class="btn btn-outline-primary mr-3 btn-md  mb-2">June 28th, 2020<i class="las la-calendar ml-3 scale5"></i></a>
              <a href="{!! url('/workoutplan'); !!}" class="btn btn-primary btn-md mb-2">Generate Report<i class="las la-angle-right ml-3 scale5"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-xxl-6 col-lg-6">
      <div class="card">
        <div class="card-header bg-white">
          <div class="d-flex mr-3 align-items-center">
            <span class="p-sm-3 p-2 mr-sm-3 mr-2 rounded-circle bg-secondary">
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip1)">
                  <path d="M1.70023 22.6666C0.850779 22.8294 0.294244 23.6495 0.456974 24.499C0.600176 25.2476 1.2576 25.7683 1.99314 25.7683C2.09078 25.7683 2.19167 25.7585 2.28931 25.739L8.73339 24.5023C9.10116 24.4307 9.42987 24.2321 9.66421 23.9392L12.4306 20.4503L11.5063 19.9784C10.8229 19.6334 10.3477 19.0085 10.1849 18.2502L7.57476 21.5406L1.70023 22.6666Z" fill="#fff"/>
                  <path d="M24.6515 9.06246C26.5461 9.06246 28.0819 7.52664 28.0819 5.63212C28.0819 3.7376 26.5461 2.20178 24.6515 2.20178C22.757 2.20178 21.2212 3.7376 21.2212 5.63212C21.2212 7.52664 22.757 9.06246 24.6515 9.06246Z" fill="#fff"/>
                  <path d="M17.166 4.77294C16.8048 4.40191 16.4696 4.25546 16.1018 4.25546C15.9683 4.25546 15.8349 4.27498 15.6917 4.30753L9.80418 5.70375C8.99054 5.89577 8.48933 6.71267 8.68135 7.52306C8.84733 8.21954 9.46571 8.68821 10.1524 8.68821C10.2696 8.68821 10.3868 8.67519 10.504 8.6459L15.5193 7.45797C15.8447 7.81923 17.4753 9.58647 17.7714 9.89891C15.6983 12.1185 13.6251 14.3349 11.5519 16.5545C11.5194 16.5904 11.4901 16.6261 11.4608 16.6619C10.8554 17.4333 11.041 18.644 11.9522 19.1029L18.3084 22.3477L15.0083 27.695C14.5559 28.4306 14.7837 29.3939 15.5192 29.8495C15.7763 30.009 16.0595 30.0839 16.3394 30.0839C16.8634 30.0839 17.3776 29.8202 17.6738 29.3418L21.8657 22.5495C22.0968 22.1752 22.1586 21.7228 22.0382 21.303C21.9178 20.8799 21.6281 20.5284 21.2343 20.3299L16.9285 18.1395L21.4556 13.2967L24.8729 16.1933C25.1561 16.4341 25.5043 16.5513 25.8493 16.5513C26.2203 16.5513 26.5914 16.4146 26.881 16.1477L30.8028 12.4928C31.4147 11.9233 31.4504 10.9664 30.8809 10.3546C30.5815 10.0356 30.1779 9.87288 29.7743 9.87288C29.4066 9.87288 29.0355 10.0063 28.7459 10.2764L25.8102 13.007C25.8069 13.0103 18.4516 6.09104 17.166 4.77294Z" fill="#fff"/>
                </g>
                <defs>
                  <clipPath id="clip1">
                    <rect width="30.8571" height="30.8571" fill="white" transform="translate(0.428711 0.714233)"/>
                  </clipPath>
                </defs>
              </svg>
            </span>
            <h4 class="fs-20 text-black mb-0">Running</h4>
          </div>
          <div class="dropdown">
            <button type="button" class="btn btn-primary light btn-md" data-toggle="dropdown" aria-expanded="false">
              Newest
              <i class="fa fa-chevron-down ml-2" aria-hidden="true"></i>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Edit</a>
              <a class="dropdown-item" href="#">Delete</a>
            </div>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table shadow-hover">
              <thead>
                <tr>
                  <th><span class="font-w600 text-black fs-16">Date</span></th>
                  <th><span class="font-w600 text-black fs-16">Distance</span></th>
                  <th><span class="font-w600 text-black fs-16">Time</span></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <p class="text-black mb-1 font-w600">Sunday</p>
                    <span class="fs-14">September 2, 2020</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">14,2 Km</p>
                    <span class="fs-14">Target 15Km</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">00:53:22”</p>
                    <span class="fs-14">Target 40mins</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="text-black mb-1 font-w600">Monday</p>
                    <span class="fs-14">September 3, 2020</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">14,2 Km</p>
                    <span class="fs-14">Target 15Km</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">00:53:22”</p>
                    <span class="fs-14">Target 40mins</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="text-black mb-1 font-w600">Tuesday</p>
                    <span class="fs-14">September 4, 2020</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">14,2 Km</p>
                    <span class="fs-14">Target 15Km</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">00:53:22”</p>
                    <span class="fs-14">Target 40mins</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="text-black mb-1 font-w600">Wednesday</p>
                    <span class="fs-14">September 5, 2020</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">14,2 Km</p>
                    <span class="fs-14">Target 15Km</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">00:53:22”</p>
                    <span class="fs-14">Target 40mins</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="text-black mb-1 font-w600">Thursday</p>
                    <span class="fs-14">September 8, 2020</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">14,2 Km</p>
                    <span class="fs-14">Target 15Km</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">00:53:22”</p>
                    <span class="fs-14">Target 40mins</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="text-black mb-1 font-w600">Friday</p>
                    <span class="fs-14">September 7, 2020</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">14,2 Km</p>
                    <span class="fs-14">Target 15Km</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">00:53:22”</p>
                    <span class="fs-14">Target 40mins</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="text-black mb-1 font-w600">Saturday</p>
                    <span class="fs-14">September 8, 2020</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">14,2 Km</p>
                    <span class="fs-14">Target 15Km</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">00:53:22”</p>
                    <span class="fs-14">Target 40mins</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="text-black mb-1 font-w600">Sunday</p>
                    <span class="fs-14">September 9, 2020</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">14,2 Km</p>
                    <span class="fs-14">Target 15Km</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">00:53:22”</p>
                    <span class="fs-14">Target 40mins</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-xxl-6 col-lg-6">
      <div class="card">
        <div class="card-header bg-white">
          <div class="d-flex mr-3 align-items-center">
            <span class="p-sm-3 p-2 mr-sm-3 mr-2 rounded-circle bg-danger">
              <svg width="32" height="32" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.5732 6.5325L7.33902 13.1929C6.88447 13.8557 7.05492 14.7585 7.71465 15.2099L13.9931 19.5123V23.6948C13.9931 24.4902 14.6244 25.1563 15.4198 25.1721C16.2342 25.1846 16.8971 24.5312 16.8971 23.72V18.7516C16.8971 18.2718 16.6604 17.8236 16.2658 17.5553L12.238 14.7933L15.6282 11.198L17.3643 15.1531C17.5947 15.6803 18.1187 16.0212 18.6932 16.0212H23.9805C24.7759 16.0212 25.442 15.3899 25.4577 14.5944C25.4704 13.78 24.817 13.1171 24.0057 13.1171H19.6465C19.072 11.8103 18.4596 10.5161 17.9262 9.19036C17.6547 8.52117 17.5032 8.23077 17.0044 7.76991C16.9034 7.67521 16.1995 7.03127 15.5714 6.45678C14.9937 5.93276 14.1035 5.96748 13.5732 6.5325Z" fill="#fff"/>
                <path d="M19.5202 7.25853C21.3577 7.25853 22.8472 5.76898 22.8472 3.93151C22.8472 2.09405 21.3577 0.604492 19.5202 0.604492C17.6827 0.604492 16.1932 2.09405 16.1932 3.93151C16.1932 5.76898 17.6827 7.25853 19.5202 7.25853Z" fill="#fff"/>
                <path d="M6.12374 29.3955C9.50578 29.3955 12.2475 26.6538 12.2475 23.2718C12.2475 19.8897 9.50578 17.1481 6.12374 17.1481C2.74169 17.1481 0 19.8897 0 23.2718C0 26.6538 2.74169 29.3955 6.12374 29.3955Z" fill="#fff"/>
                <path d="M23.8763 29.3955C27.2583 29.3955 30 26.6538 30 23.2718C30 19.8897 27.2583 17.1481 23.8763 17.1481C20.4942 17.1481 17.7525 19.8897 17.7525 23.2718C17.7525 26.6538 20.4942 29.3955 23.8763 29.3955Z" fill="#fff"/>
              </svg>
            </span>
            <h4 class="fs-20 text-black mb-0">Cycling</h4>
          </div>
          <div class="dropdown">
            <button type="button" class="btn btn-primary light btn-md" data-toggle="dropdown" aria-expanded="false">
              Newest
              <i class="fa fa-chevron-down ml-2" aria-hidden="true"></i>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Edit</a>
              <a class="dropdown-item" href="#">Delete</a>
            </div>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table shadow-hover">
              <thead>
                <tr>
                  <th><span class="font-w600 text-black fs-16">Date</span></th>
                  <th><span class="font-w600 text-black fs-16">Distance</span></th>
                  <th><span class="font-w600 text-black fs-16">Time</span></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <p class="text-black mb-1 font-w600">Sunday</p>
                    <span class="fs-14">September 2, 2020</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">14,2 Km</p>
                    <span class="fs-14">Target 15Km</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">00:53:22”</p>
                    <span class="fs-14">Target 40mins</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="text-black mb-1 font-w600">Monday</p>
                    <span class="fs-14">September 3, 2020</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">14,2 Km</p>
                    <span class="fs-14">Target 15Km</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">00:53:22”</p>
                    <span class="fs-14">Target 40mins</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="text-black mb-1 font-w600">Tuesday</p>
                    <span class="fs-14">September 4, 2020</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">14,2 Km</p>
                    <span class="fs-14">Target 15Km</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">00:53:22”</p>
                    <span class="fs-14">Target 40mins</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="text-black mb-1 font-w600">Wednesday</p>
                    <span class="fs-14">September 5, 2020</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">14,2 Km</p>
                    <span class="fs-14">Target 15Km</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">00:53:22”</p>
                    <span class="fs-14">Target 40mins</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="text-black mb-1 font-w600">Thursday</p>
                    <span class="fs-14">September 8, 2020</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">14,2 Km</p>
                    <span class="fs-14">Target 15Km</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">00:53:22”</p>
                    <span class="fs-14">Target 40mins</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="text-black mb-1 font-w600">Friday</p>
                    <span class="fs-14">September 7, 2020</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">14,2 Km</p>
                    <span class="fs-14">Target 15Km</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">00:53:22”</p>
                    <span class="fs-14">Target 40mins</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="text-black mb-1 font-w600">Saturday</p>
                    <span class="fs-14">September 8, 2020</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">14,2 Km</p>
                    <span class="fs-14">Target 15Km</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">00:53:22”</p>
                    <span class="fs-14">Target 40mins</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="text-black mb-1 font-w600">Sunday</p>
                    <span class="fs-14">September 9, 2020</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">14,2 Km</p>
                    <span class="fs-14">Target 15Km</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">00:53:22”</p>
                    <span class="fs-14">Target 40mins</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-xxl-12 col-lg-12">
      <div class="card">
        <div class="card-header bg-white">
          <div class="d-flex align-items-center mr-3">
            <span class="p-sm-3 p-2 mr-sm-3 mr-2 rounded-circle bg-warning">
              <svg width="32" height="32" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip2)">
                  <path d="M14.9993 7.49987C17.0704 7.49987 18.7493 5.82097 18.7493 3.74993C18.7493 1.6789 17.0704 0 14.9993 0C12.9283 0 11.2494 1.6789 11.2494 3.74993C11.2494 5.82097 12.9283 7.49987 14.9993 7.49987Z" fill="#fff"/>
                  <path d="M22.2878 27.2871L17.6697 29.0191L19.9663 29.8803C20.9546 30.2473 22.021 29.7388 22.3804 28.7826C22.5718 28.2725 22.5152 27.7381 22.2878 27.2871Z" fill="#fff"/>
                  <path d="M6.28312 20.7436C5.31545 20.3847 4.23328 20.8718 3.86895 21.8412C3.50549 22.8108 3.99715 23.891 4.96658 24.2554L6.98941 25.0139L12.3298 23.011L6.28312 20.7436Z" fill="#fff"/>
                  <path d="M26.1303 21.8413C25.7659 20.8717 24.6838 20.3847 23.7162 20.7436L8.71647 26.3685C7.74692 26.7329 7.25532 27.8132 7.61878 28.7827C7.97813 29.7386 9.0443 30.2474 10.033 29.8804L25.0326 24.2555C26.0022 23.8911 26.4938 22.8108 26.1303 21.8413Z" fill="#fff"/>
                  <path d="M28.1244 14.9997H23.6585L20.4268 8.53623C20.0909 7.86516 19.4077 7.48284 18.7036 7.49989L14.9993 7.49987L11.2954 7.49989C10.5914 7.48284 9.90912 7.86522 9.5725 8.53623L6.34077 14.9997H1.87494C0.83953 14.9997 0 15.8392 0 16.8746C0 17.9101 0.83953 18.7496 1.87494 18.7496H7.49981C8.21026 18.7496 8.85936 18.3486 9.177 17.7132L11.2497 13.5679V20.6038L14.9995 22.0099L18.7496 20.6034V13.5679L20.8222 17.7132C21.1399 18.3486 21.789 18.7496 22.4994 18.7496H28.1243C29.1597 18.7496 29.9992 17.9101 29.9992 16.8746C29.9992 15.8392 29.1598 14.9997 28.1244 14.9997Z" fill="#fff"/>
                </g>
                <defs>
                  <clipPath id="clip2">
                    <rect width="30" height="30" fill="white"/>
                  </clipPath>
                </defs>
              </svg>
            </span>
            <h4 class="fs-20 text-black mb-0">Yoga</h4>
          </div>
          <div class="dropdown">
            <button type="button" class="btn btn-primary light btn-md" data-toggle="dropdown" aria-expanded="false">
              Newest
              <i class="fa fa-chevron-down ml-2" aria-hidden="true"></i>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Edit</a>
              <a class="dropdown-item" href="#">Delete</a>
            </div>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table shadow-hover">
              <thead>
                <tr>
                  <th><span class="font-w600 text-black fs-16">Date</span></th>
                  <th><span class="font-w600 text-black fs-16">Distance</span></th>
                  <th><span class="font-w600 text-black fs-16">Time</span></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <p class="text-black mb-1 font-w600">Sunday</p>
                    <span class="fs-14">September 2, 2020</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">14,2 Km</p>
                    <span class="fs-14">Target 15Km</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">00:53:22”</p>
                    <span class="fs-14">Target 40mins</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="text-black mb-1 font-w600">Monday</p>
                    <span class="fs-14">September 3, 2020</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">14,2 Km</p>
                    <span class="fs-14">Target 15Km</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">00:53:22”</p>
                    <span class="fs-14">Target 40mins</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="text-black mb-1 font-w600">Tuesday</p>
                    <span class="fs-14">September 4, 2020</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">14,2 Km</p>
                    <span class="fs-14">Target 15Km</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">00:53:22”</p>
                    <span class="fs-14">Target 40mins</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="text-black mb-1 font-w600">Wednesday</p>
                    <span class="fs-14">September 5, 2020</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">14,2 Km</p>
                    <span class="fs-14">Target 15Km</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">00:53:22”</p>
                    <span class="fs-14">Target 40mins</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="text-black mb-1 font-w600">Thursday</p>
                    <span class="fs-14">September 8, 2020</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">14,2 Km</p>
                    <span class="fs-14">Target 15Km</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">00:53:22”</p>
                    <span class="fs-14">Target 40mins</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="text-black mb-1 font-w600">Friday</p>
                    <span class="fs-14">September 7, 2020</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">14,2 Km</p>
                    <span class="fs-14">Target 15Km</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">00:53:22”</p>
                    <span class="fs-14">Target 40mins</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="text-black mb-1 font-w600">Saturday</p>
                    <span class="fs-14">September 8, 2020</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">14,2 Km</p>
                    <span class="fs-14">Target 15Km</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">00:53:22”</p>
                    <span class="fs-14">Target 40mins</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="text-black mb-1 font-w600">Sunday</p>
                    <span class="fs-14">September 9, 2020</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">14,2 Km</p>
                    <span class="fs-14">Target 15Km</span>
                  </td>
                  <td>
                    <p class="text-black mb-1 font-w600">00:53:22”</p>
                    <span class="fs-14">Target 40mins</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection			