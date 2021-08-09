{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
  <div class="page-titles">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
      <li class="breadcrumb-item active"><a href="javascript:void(0)">Popover</a></li>
    </ol>
  </div>
  <!-- row -->
  
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Bootstrap popover</h4>
        </div>
        <div class="card-body">
          
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam laborum dolorum culpa a maiores officia ab. Cumque necessitatibus voluptates soluta, ullam numquam nulla. Et a architecto veritatis sint, autem cupiditate
            iure illo pariatur eum, praesentium numquam ea quaerat ipsam? Corrupti nobis illo itaque quae, qui numquam vero ipsa, reiciendis sit repudiandae molestiae natus vel voluptatibus exercitationem ducimus neque harum ad,
            commodi excepturi repellat eos fugiat minus eius. Doloremque itaque repudiandae saepe quia temporibus? Vitae, reprehenderit aliquam facilis qui at quis provident in maiores illo laborum, voluptatem recusandae cupiditate
            nemo. Nulla iusto ad consequatur reprehenderit quod accusamus, vitae, blanditiis quae ut tenetur nobis animi dolorum consectetur dignissimos amet illo provident nam obcaecati eligendi molestias tempora? Ad nam nobis
            eaque consequatur tempore tenetur eius ipsum reprehenderit dignissimos inventore. Id recusandae nemo dicta rerum. Distinctio itaque, veniam dolore inventore aliquid assumenda neque. Deserunt!
          </p>
          <div class="bootstrap-popover-wrapper">
            <div class="bootstrap-popover d-inline-block">
              <button type="button" class="btn btn-primary btn-sm px-4 " data-container="body" data-toggle="popover" data-placement="left" data-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor." title="Popover in Left">Left</button>
            </div>
            <div class="bootstrap-popover d-inline-block">
              <button type="button" class="btn btn-primary btn-sm px-4 " data-container="body" data-toggle="popover" data-placement="top" data-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor." title="Popover in Right">Top</button>
            </div>
            <div class="bootstrap-popover d-inline-block">
              <button type="button" class="btn btn-primary btn-sm px-4 " data-container="body" data-toggle="popover" data-placement="bottom" data-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor." title="Popover in Bottom">Bottom</button>
            </div>
            <div class="bootstrap-popover d-inline-block">
              <button type="button" class="btn btn-primary btn-sm px-4 " data-container="body" data-toggle="popover" data-placement="right" data-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor." title="Popover in Right">Right</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection