{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')
<!-- row -->
<div class="container-fluid">
  <div class="row">	
    <div class="col-xl-9 col-xxl-8">	
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header d-md-flex d-block pb-0 border-0">	
              <div class="mr-2 mb-md-0 mb-3">
                <h4 class="text-black fs-20">Maps Route</h4>
                <p class="fs-13 mb-0">Lorem ipsum dolor sit amet, consectetur</p>
              </div>
              <div class="d-flex flex-wrap align-items-center">
                <div class="custom-control check-switch custom-checkbox mr-4 mb-2">
                  <input type="checkbox" class="custom-control-input" id="customCheck9">
                  <label class="custom-control-label" for="customCheck9">Highlighted</label>
                </div>
                <div class="custom-control custom-switch toggle-switch text-right mr-4 mb-2">
                  <input type="checkbox" class="custom-control-input" id="customSwitch11">
                  <label class="custom-control-label" for="customSwitch11">Name</label>
                </div>
                <div class="custom-control custom-switch toggle-switch text-right mb-2">
                  <input type="checkbox" class="custom-control-input" id="customSwitch12">
                  <label class="custom-control-label" for="customSwitch12">Map</label>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="mapouter">
                <div class="gmap_canvas">
                  <iframe class="border-0" height="450" id="gmap_canvas" src="https://maps.google.com/maps?q=&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header d-sm-flex d-block pb-0 border-0">
              <div class="mr-auto pr-3">
                <h4 class="text-black fs-20">Stats</h4>
                <p class="fs-13 mb-0">Lorem ipsum dolor sit amet, consectetur</p>
              </div>
              <div class="card-action card-tabs style-1 mt-2 mb-sm-0 mb-3 mt-sm-0">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#Running" role="tab">
                      <svg class="mr-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                          <path d="M0.988957 17.074C0.328275 17.2006 -0.104585 17.8385 0.0219823 18.4992C0.133362 19.0814 0.644694 19.4864 1.21678 19.4864C1.29272 19.4864 1.37119 19.4788 1.44713 19.4636L6.4592 18.5017C6.74524 18.446 7.00091 18.2916 7.18316 18.0638L9.33481 15.3502L8.61593 14.9832C8.08435 14.7148 7.71475 14.2288 7.58818 13.639L5.55804 16.1982L0.988957 17.074Z" fill="#A639FA"/>
                          <path d="M18.84 6.493C20.3135 6.493 21.508 5.29848 21.508 3.82496C21.508 2.35144 20.3135 1.15692 18.84 1.15692C17.3665 1.15692 16.1719 2.35144 16.1719 3.82496C16.1719 5.29848 17.3665 6.493 18.84 6.493Z" fill="#A639FA"/>
                          <path d="M13.0179 3.15671C12.7369 2.86813 12.4762 2.75422 12.1902 2.75422C12.0864 2.75422 11.9826 2.76941 11.8712 2.79472L7.29203 3.88067C6.6592 4.03002 6.26937 4.66539 6.41872 5.29569C6.54782 5.8374 7.02877 6.20192 7.56289 6.20192C7.65404 6.20192 7.74514 6.19179 7.8363 6.16901L11.7371 5.24507C11.9902 5.52605 13.2584 6.90057 13.4888 7.14358C11.8763 8.86996 10.2639 10.5938 8.65137 12.3202C8.62605 12.3481 8.60329 12.3759 8.58049 12.4037C8.10966 13.0036 8.25397 13.9453 8.96275 14.3022L13.9064 16.826L11.3397 20.985C10.9878 21.5571 11.165 22.3063 11.7371 22.6607C11.9371 22.7848 12.1573 22.843 12.375 22.843C12.7825 22.843 13.1824 22.638 13.4128 22.2658L16.6732 16.9829C16.8529 16.6918 16.901 16.34 16.8074 16.0134C16.7137 15.6843 16.4884 15.411 16.1821 15.2565L12.8331 13.5529L16.3543 9.7863L19.0122 12.0392C19.2324 12.2265 19.5032 12.3176 19.7716 12.3176C20.0601 12.3176 20.3487 12.2113 20.574 12.0038L23.6243 9.16106C24.1002 8.71808 24.128 7.97386 23.685 7.49797C23.4521 7.24989 23.1383 7.12333 22.8244 7.12333C22.5383 7.12333 22.2497 7.22711 22.0245 7.43721L19.7412 9.56101C19.7386 9.56354 14.0178 4.1819 13.0179 3.15671Z" fill="#A639FA"/>
                        </g>
                        <defs>
                          <clipPath id="clip0">
                            <rect width="24" height="24" fill="white"/>
                          </clipPath>
                        </defs>
                      </svg>
                      Running
                      <span class="bg-secondary"></span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Cycling" role="tab">
                      <svg class="mr-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.8586 5.22599L5.87121 10.5543C5.50758 11.0846 5.64394 11.8068 6.17172 12.1679L11.1945 15.6098V18.9558C11.1945 19.5921 11.6995 20.125 12.3359 20.1376C12.9874 20.1477 13.5177 19.625 13.5177 18.976V15.0013C13.5177 14.6174 13.3283 14.2588 13.0126 14.0442L9.79041 11.8346L12.5025 8.95836L13.8914 12.1225C14.0758 12.5442 14.4949 12.817 14.9546 12.817H19.1844C19.8207 12.817 20.3536 12.3119 20.3662 11.6755C20.3763 11.024 19.8536 10.4937 19.2046 10.4937H15.7172C15.2576 9.44824 14.7677 8.41288 14.3409 7.35228C14.1237 6.81693 14.0025 6.5846 13.6036 6.21592C13.5227 6.14016 12.9596 5.62501 12.4571 5.16541C11.995 4.74619 11.2828 4.77397 10.8586 5.22599Z" fill="#FF3282"/>
                        <path d="M15.6162 5.80681C17.0861 5.80681 18.2778 4.61517 18.2778 3.1452C18.2778 1.67523 17.0861 0.483582 15.6162 0.483582C14.1462 0.483582 12.9545 1.67523 12.9545 3.1452C12.9545 4.61517 14.1462 5.80681 15.6162 5.80681Z" fill="#FF3282"/>
                        <path d="M4.89899 23.5164C7.60463 23.5164 9.79798 21.3231 9.79798 18.6174C9.79798 15.9118 7.60463 13.7184 4.89899 13.7184C2.19335 13.7184 0 15.9118 0 18.6174C0 21.3231 2.19335 23.5164 4.89899 23.5164Z" fill="#FF3282"/>
                        <path d="M19.101 23.5164C21.8066 23.5164 24 21.3231 24 18.6174C24 15.9118 21.8066 13.7184 19.101 13.7184C16.3954 13.7184 14.202 15.9118 14.202 18.6174C14.202 21.3231 16.3954 23.5164 19.101 23.5164Z" fill="#FF3282"/>
                      </svg>
                      Cycling
                      <span class="bg-danger"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="card-body pb-0">
              <div class="tab-content">
                <div class="tab-pane fade show active" id="Running" role="tabpanel">
                  <div id="chartBarRunning"></div>
                </div>
                <div class="tab-pane fade" id="Cycling" role="tabpanel">
                  <div id="chartBarCycle"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-xxl-4">	
      <div class="row">
        <div class="col-xl-12 col-md-6">
          <div class="card">
            <div class="card-header border-0 pb-0 p-4">
              <div>
                <h4 class="text-black fs-20">Workout Details</h4>
                <p class="fs-13 mb-0">Lorem ipsum dolor sit amet, consectetur</p>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="d-flex align-items-center bgl-primary p-4">
                <svg class="mr-3" width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect width="51" height="51" rx="25.5" fill="#0B2A97"></rect>
                  <g clip-path="url()">
                    <path d="M23.8586 19.226L18.8712 24.5542C18.5076 25.0845 18.6439 25.8068 19.1717 26.1679L24.1945 29.6098L24.1945 32.9558C24.1945 33.5921 24.6995 34.125 25.3359 34.1376C25.9874 34.1477 26.5177 33.6249 26.5177 32.976L26.5177 29.0012C26.5177 28.6174 26.3283 28.2588 26.0126 28.0442L22.7904 25.8346L25.5025 22.9583L26.8914 26.1225C27.0758 26.5442 27.4949 26.8169 27.9546 26.8169L32.1844 26.8169C32.8207 26.8169 33.3536 26.3119 33.3662 25.6755C33.3763 25.024 32.8536 24.4937 32.2046 24.4937L28.7172 24.4937C28.2576 23.4482 27.7677 22.4129 27.3409 21.3522C27.1237 20.8169 27.0025 20.5846 26.6036 20.2159C26.5227 20.1401 25.9596 19.625 25.4571 19.1654C24.995 18.7462 24.2828 18.7739 23.8586 19.226Z" fill="white"></path>
                    <path d="M28.6162 19.8068C30.0861 19.8068 31.2778 18.6151 31.2778 17.1452C31.2778 15.6752 30.0861 14.4836 28.6162 14.4836C27.1462 14.4836 25.9545 15.6752 25.9545 17.1452C25.9545 18.6151 27.1462 19.8068 28.6162 19.8068Z" fill="white"></path>
                    <path d="M17.899 37.5164C20.6046 37.5164 22.798 35.323 22.798 32.6174C22.798 29.9117 20.6046 27.7184 17.899 27.7184C15.1934 27.7184 13 29.9117 13 32.6174C13 35.323 15.1934 37.5164 17.899 37.5164Z" fill="white"></path>
                    <path d="M32.101 37.5164C34.8066 37.5164 37 35.323 37 32.6174C37 29.9118 34.8066 27.7184 32.101 27.7184C29.3954 27.7184 27.202 29.9118 27.202 32.6174C27.202 35.323 29.3954 37.5164 32.101 37.5164Z" fill="white"></path>
                  </g>
                  <defs>
                    <clipPath id="clip8">
                      <rect width="24" height="24" fill="white" transform="translate(13 14)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                <div>
                  <h6 class="fs-16 text-black mb-0">Cycling</h6>
                  <span class="fs-12">100km target/day</span>
                </div>
              </div>
              <div class="d-flex flex-wrap p-4">
                <div class="mr-5 mb-3">
                  <p class="fs-14 mb-2">Total Distance</p>
                  <span class="fs-20 font-w500 text-black">24km</span>
                </div>
                <div class="mr-5 mb-3">
                  <p class="fs-14 mb-2">Time</p>
                  <span class="fs-20 font-w500 text-black">00:34:53”</span>
                </div>
                <div class="mr-5 mb-3">
                  <p class="fs-14 mb-2">Start Time</p>
                  <span class="fs-20 font-w500 text-black">09:22 AM</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-12 col-md-6">
          <div class="card">
            <div class="card-header d-sm-flex d-block border-0">
              <div class="mr-auto pr-3">
                <h4 class="text-black fs-20">Recent Activities</h4>
                <p class="fs-13 mb-0">Lorem ipsum dolor sit amet, consectetur</p>
              </div>
            </div>
            <div class="card-body loadmore-content height340 dz-scroll height pb-4 pt-0" id="recentActivitiesContent">
              <div class="d-flex py-3 border-bottom align-items-center">
                <span class="activity-icon bg-secondary mr-3">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip3)">
                      <path d="M0.988957 17.0741C0.328275 17.2007 -0.104585 17.8386 0.0219823 18.4993C0.133362 19.0815 0.644694 19.4865 1.21678 19.4865C1.29272 19.4865 1.37119 19.4789 1.44713 19.4637L6.4592 18.5018C6.74524 18.4461 7.00091 18.2917 7.18316 18.0639L9.33481 15.3503L8.61593 14.9832C8.08435 14.7149 7.71475 14.2289 7.58818 13.6391L5.55804 16.1983L0.988957 17.0741Z" fill="#fff"/>
                      <path d="M18.84 6.49306C20.3135 6.49306 21.508 5.29854 21.508 3.82502C21.508 2.3515 20.3135 1.15698 18.84 1.15698C17.3665 1.15698 16.1719 2.3515 16.1719 3.82502C16.1719 5.29854 17.3665 6.49306 18.84 6.49306Z" fill="#fff"/>
                      <path d="M13.0179 3.15677C12.7369 2.86819 12.4762 2.75428 12.1902 2.75428C12.0864 2.75428 11.9826 2.76947 11.8712 2.79479L7.29203 3.88073C6.6592 4.03008 6.26937 4.66545 6.41872 5.29576C6.54782 5.83746 7.02877 6.20198 7.56289 6.20198C7.65404 6.20198 7.74514 6.19185 7.8363 6.16907L11.7371 5.24513C11.9902 5.52611 13.2584 6.90063 13.4888 7.14364C11.8763 8.87002 10.2639 10.5939 8.65137 12.3202C8.62605 12.3481 8.60329 12.3759 8.58049 12.4038C8.10966 13.0037 8.25397 13.9454 8.96275 14.3023L13.9064 16.826L11.3397 20.985C10.9878 21.5571 11.165 22.3064 11.7371 22.6608C11.9371 22.7848 12.1573 22.843 12.375 22.843C12.7825 22.843 13.1824 22.638 13.4128 22.2659L16.6732 16.983C16.8529 16.6919 16.901 16.34 16.8074 16.0135C16.7137 15.6844 16.4884 15.411 16.1821 15.2566L12.8331 13.553L16.3543 9.78636L19.0122 12.0393C19.2324 12.2266 19.5032 12.3177 19.7716 12.3177C20.0601 12.3177 20.3487 12.2114 20.574 12.0038L23.6243 9.16112C24.1002 8.71814 24.128 7.97392 23.685 7.49803C23.4521 7.24996 23.1383 7.12339 22.8244 7.12339C22.5383 7.12339 22.2497 7.22717 22.0245 7.43727L19.7412 9.56107C19.7386 9.56361 14.0178 4.18196 13.0179 3.15677Z" fill="#fff"/>
                    </g>
                    <defs>
                      <clipPath id="clip3">
                        <rect width="24" height="24" fill="white"/>
                      </clipPath>
                    </defs>
                  </svg>
                </span>
                <div>
                  <h6 class="font-w600 fs-16 mb-0"><a href="{!! url('/personal-record'); !!}" class="text-black">Sunday Running</a></h6>
                  <span class="fs-12">2km distances</span>
                </div>
                <a href="{!! url('/personal-record'); !!}" class="ml-auto">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 18L15 12L9 6" fill="#D3D6E4"/>
                  </svg>
                </a>
              </div>
              <div class="d-flex py-3 border-bottom align-items-center">
                <span class="activity-icon bg-secondary mr-3">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip4)">
                      <path d="M0.988957 17.0741C0.328275 17.2007 -0.104585 17.8386 0.0219823 18.4993C0.133362 19.0815 0.644694 19.4865 1.21678 19.4865C1.29272 19.4865 1.37119 19.4789 1.44713 19.4637L6.4592 18.5018C6.74524 18.4461 7.00091 18.2917 7.18316 18.0639L9.33481 15.3503L8.61593 14.9832C8.08435 14.7149 7.71475 14.2289 7.58818 13.6391L5.55804 16.1983L0.988957 17.0741Z" fill="#fff"/>
                      <path d="M18.84 6.49306C20.3135 6.49306 21.508 5.29854 21.508 3.82502C21.508 2.3515 20.3135 1.15698 18.84 1.15698C17.3665 1.15698 16.1719 2.3515 16.1719 3.82502C16.1719 5.29854 17.3665 6.49306 18.84 6.49306Z" fill="#fff"/>
                      <path d="M13.0179 3.15677C12.7369 2.86819 12.4762 2.75428 12.1902 2.75428C12.0864 2.75428 11.9826 2.76947 11.8712 2.79479L7.29203 3.88073C6.6592 4.03008 6.26937 4.66545 6.41872 5.29576C6.54782 5.83746 7.02877 6.20198 7.56289 6.20198C7.65404 6.20198 7.74514 6.19185 7.8363 6.16907L11.7371 5.24513C11.9902 5.52611 13.2584 6.90063 13.4888 7.14364C11.8763 8.87002 10.2639 10.5939 8.65137 12.3202C8.62605 12.3481 8.60329 12.3759 8.58049 12.4038C8.10966 13.0037 8.25397 13.9454 8.96275 14.3023L13.9064 16.826L11.3397 20.985C10.9878 21.5571 11.165 22.3064 11.7371 22.6608C11.9371 22.7848 12.1573 22.843 12.375 22.843C12.7825 22.843 13.1824 22.638 13.4128 22.2659L16.6732 16.983C16.8529 16.6919 16.901 16.34 16.8074 16.0135C16.7137 15.6844 16.4884 15.411 16.1821 15.2566L12.8331 13.553L16.3543 9.78636L19.0122 12.0393C19.2324 12.2266 19.5032 12.3177 19.7716 12.3177C20.0601 12.3177 20.3487 12.2114 20.574 12.0038L23.6243 9.16112C24.1002 8.71814 24.128 7.97392 23.685 7.49803C23.4521 7.24996 23.1383 7.12339 22.8244 7.12339C22.5383 7.12339 22.2497 7.22717 22.0245 7.43727L19.7412 9.56107C19.7386 9.56361 14.0178 4.18196 13.0179 3.15677Z" fill="#fff"/>
                    </g>
                    <defs>
                      <clipPath id="clip4">
                        <rect width="24" height="24" fill="white"/>
                      </clipPath>
                    </defs>
                  </svg>
                </span>
                <div>
                  <h6 class="font-w600 fs-16 mb-0"><a href="{!! url('/personal-record'); !!}" class="text-black">Saturday Running</a></h6>
                  <span class="fs-12">2km distances</span>
                </div>
                <a href="{!! url('/personal-record'); !!}" class="ml-auto">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 18L15 12L9 6" fill="#D3D6E4"/>
                  </svg>
                </a>
              </div>
              <div class="d-flex py-3 border-bottom align-items-center">
                <span class="activity-icon bg-danger mr-3">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip5)">
                      <path d="M10.8586 5.22593L5.87121 10.5542C5.50758 11.0845 5.64394 11.8067 6.17172 12.1678L11.1945 15.6098L11.1945 18.9557C11.1945 19.5921 11.6995 20.1249 12.3359 20.1376C12.9874 20.1476 13.5177 19.6249 13.5177 18.976L13.5177 15.0012C13.5177 14.6173 13.3283 14.2588 13.0126 14.0441L9.79041 11.8345L12.5025 8.9583L13.8914 12.1224C14.0758 12.5441 14.4949 12.8169 14.9546 12.8169L19.1844 12.8169C19.8207 12.8169 20.3536 12.3118 20.3662 11.6755C20.3763 11.0239 19.8536 10.4936 19.2046 10.4936L15.7172 10.4936C15.2576 9.44818 14.7677 8.41282 14.3409 7.35222C14.1237 6.81686 14.0025 6.58454 13.6036 6.21585C13.5227 6.1401 12.9596 5.62495 12.4571 5.16535C11.995 4.74613 11.2828 4.77391 10.8586 5.22593Z" fill="#fff"/>
                      <path d="M15.6162 5.80675C17.0861 5.80675 18.2778 4.61511 18.2778 3.14514C18.2778 1.67517 17.0861 0.483521 15.6162 0.483521C14.1462 0.483521 12.9545 1.67517 12.9545 3.14514C12.9545 4.61511 14.1462 5.80675 15.6162 5.80675Z" fill="#fff"/>
                      <path d="M4.89899 23.5163C7.60463 23.5163 9.79798 21.323 9.79798 18.6174C9.79798 15.9117 7.60463 13.7184 4.89899 13.7184C2.19335 13.7184 -1.81927e-07 15.9117 -2.13831e-07 18.6174C-2.45735e-07 21.323 2.19335 23.5163 4.89899 23.5163Z" fill="#fff"/>
                      <path d="M19.101 23.5163C21.8066 23.5163 24 21.323 24 18.6174C24 15.9117 21.8066 13.7184 19.101 13.7184C16.3954 13.7184 14.202 15.9117 14.202 18.6174C14.202 21.323 16.3954 23.5163 19.101 23.5163Z" fill="#fff"/>
                    </g>
                    <defs>
                      <clipPath id="clip5">
                        <rect width="24" height="24" fill="white"/>
                      </clipPath>
                    </defs>
                  </svg>
                </span>
                <div>
                  <h6 class="font-w600 fs-16 mb-0"><a href="{!! url('/personal-record'); !!}" class="text-black">Friday Cycling</a></h6>
                  <span class="fs-12">2km distances</span>
                </div>
                <a href="{!! url('/personal-record'); !!}" class="ml-auto">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 18L15 12L9 6" fill="#D3D6E4"/>
                  </svg>
                </a>
              </div>
              <div class="d-flex py-3 border-bottom align-items-center">
                <span class="activity-icon bg-secondary mr-3">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip6)">
                      <path d="M0.988957 17.0741C0.328275 17.2007 -0.104585 17.8386 0.0219823 18.4993C0.133362 19.0815 0.644694 19.4865 1.21678 19.4865C1.29272 19.4865 1.37119 19.4789 1.44713 19.4637L6.4592 18.5018C6.74524 18.4461 7.00091 18.2917 7.18316 18.0639L9.33481 15.3503L8.61593 14.9832C8.08435 14.7149 7.71475 14.2289 7.58818 13.6391L5.55804 16.1983L0.988957 17.0741Z" fill="#fff"/>
                      <path d="M18.84 6.49306C20.3135 6.49306 21.508 5.29854 21.508 3.82502C21.508 2.3515 20.3135 1.15698 18.84 1.15698C17.3665 1.15698 16.1719 2.3515 16.1719 3.82502C16.1719 5.29854 17.3665 6.49306 18.84 6.49306Z" fill="#fff"/>
                      <path d="M13.0179 3.15677C12.7369 2.86819 12.4762 2.75428 12.1902 2.75428C12.0864 2.75428 11.9826 2.76947 11.8712 2.79479L7.29203 3.88073C6.6592 4.03008 6.26937 4.66545 6.41872 5.29576C6.54782 5.83746 7.02877 6.20198 7.56289 6.20198C7.65404 6.20198 7.74514 6.19185 7.8363 6.16907L11.7371 5.24513C11.9902 5.52611 13.2584 6.90063 13.4888 7.14364C11.8763 8.87002 10.2639 10.5939 8.65137 12.3202C8.62605 12.3481 8.60329 12.3759 8.58049 12.4038C8.10966 13.0037 8.25397 13.9454 8.96275 14.3023L13.9064 16.826L11.3397 20.985C10.9878 21.5571 11.165 22.3064 11.7371 22.6608C11.9371 22.7848 12.1573 22.843 12.375 22.843C12.7825 22.843 13.1824 22.638 13.4128 22.2659L16.6732 16.983C16.8529 16.6919 16.901 16.34 16.8074 16.0135C16.7137 15.6844 16.4884 15.411 16.1821 15.2566L12.8331 13.553L16.3543 9.78636L19.0122 12.0393C19.2324 12.2266 19.5032 12.3177 19.7716 12.3177C20.0601 12.3177 20.3487 12.2114 20.574 12.0038L23.6243 9.16112C24.1002 8.71814 24.128 7.97392 23.685 7.49803C23.4521 7.24996 23.1383 7.12339 22.8244 7.12339C22.5383 7.12339 22.2497 7.22717 22.0245 7.43727L19.7412 9.56107C19.7386 9.56361 14.0178 4.18196 13.0179 3.15677Z" fill="#fff"/>
                    </g>
                    <defs>
                      <clipPath id="clip6">
                        <rect width="24" height="24" fill="white"/>
                      </clipPath>
                    </defs>
                  </svg>
                </span>
                <div>
                  <h6 class="font-w600 fs-16 mb-0"><a href="{!! url('/personal-record'); !!}" class="text-black">Monday Running</a></h6>
                  <span class="fs-12">2km distances</span>
                </div>
                <a href="{!! url('/personal-record'); !!}" class="ml-auto">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 18L15 12L9 6" fill="#D3D6E4"/>
                  </svg>
                </a>
              </div>
            </div>
            <div class="card-footer style-1 text-center border-0 pt-0 pb-4">
              <a class="text-primary dz-load-more fa fa-chevron-down" id="recentActivities" href="javascript:void(0);" rel="recent-activities">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection			