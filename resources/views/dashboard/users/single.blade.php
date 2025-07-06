@extends('dashboard.layout')

@section('meta')
  @php $page_title = config("app.name") . " | " . __('Manage User') @endphp
  <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')

  <div class="container">
    <div class="row mt-lg-4">
      <div class="col-12 col-xl-8">
        <div class="card card-body border-0 shadow mb-4">
          <h2 class="h5 mb-4">{{ __('General information') }}</h2>
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <form method="POST"
            action="{{ isset($user) && !empty($user) ? route('user_edit', $user->id) : route('user_create') }}">
            @csrf
            <div class="row">
              <div class="col-md-6 mb-3">
                <div class="form-group">
                  <label for="username" class="capitalize">{{ __('username') }}</label>
                  <input class="form-control @error('name') is-invalid @enderror" name="name"
                    placeholder="{{ __('unique username') }}"
                    value="{{ old('name') ?? (isset($user) && !empty($user) ? $user->name : '') }}" id="username"
                    required>
                  @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="form-group">
                  <label for="permission">{{ __('Permission / Rank') }}</label>
                  <select class="form-control form-select @error('permission') is-invalid @enderror" name="permission"
                    id="permission" aria-label="Default select example" required>
                    <option @if (!isset($user) || (isset($user) && !empty($user) && $user?->permission == 0)) selected @endif value="0">{{ __('user') }}</option>
                    <option @if (isset($user) && !empty($user) && $user?->permission == 1) selected @endif value="1">{{ __('admin') }}</option>
                  </select>
                  @error('permission')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
            </div>
            <hr>
            <h2 class="h5 my-4">{{ __('Login Info') }}</h2>
            <div class="row">
              <div class="col-md-6 mb-3">
                <div class="form-group">
                  <label for="email">{{ __('Email') }}</label>
                  <input class="form-control @error('email') is-invalid @enderror" id="email"
                    value="{{ old('email') ?? (isset($user) && !empty($user) ? $user->email : '') }}" type="email"
                    name="email" placeholder="{{ __('Enter User Email') }}" required>
                  @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="password">{{ __('Password') }}</label>
                <div class="input-group">
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                    name="password" placeholder="{{ __('Password') }}" aria-label="Password">
                  @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                  <span class="input-group-text" id="basic-addon3">
                    <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </span>
                </div>
              </div>
            </div>
            <div class="mt-3">
              <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">{{ __('Save all') }}</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-12 col-xl-4">
        <div class="row">
          <div class="col-12 mb-4">
            <div class="card shadow border-0 text-center p-0">
              <div class="card-body pb-5">
                <img
                  src="{{ isset($user) && !empty($user) ? $user->image_url() : 'https://static.vecteezy.com/system/resources/thumbnails/009/292/244/small/default-avatar-icon-of-social-media-user-vector.jpg' }}"
                  class="avatar-xl rounded-circle mx-auto mt-3 mb-4" alt="{{ __('User Image') }}">
                <h4 class="h3">{{ isset($user) && !empty($user) ? $user->username : 'New User' }}
                  <span
                    class="badge font-small px-2 py-1 ms-2 fw-bold bg-dark">{{ isset($user) && $user->is_admin() ? __('admin') : __('user') }}</span>
                </h4>
                <h6 class="fw-normal mb-3">{{ isset($user) ? $user->name : '' }}</h6>
                <hr>
                <a class="btn btn-sm btn-danger d-inline-flex align-items-center" data-bs-toggle="tooltip"
                  data-bs-placement="top" title="{{ __('Delete User') }}" href="#">
                  <svg class="icon icon-xs" fill="currentColor" data-slot="icon" fill="none" stroke-width="1.5"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0">
                    </path>
                  </svg>
                </a>
                <a class="btn btn-sm btn-warning d-inline-flex mx-3 align-items-center" data-bs-toggle="tooltip"
                  data-bs-placement="top" title="{{ __('Disable / Inactivate User') }}" href="#">
                  <svg class="icon icon-xs" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M18.364 18.364A9 9 0 0 0 5.636 5.636m12.728 12.728A9 9 0 0 1 5.636 5.636m12.728 12.728L5.636 5.636">
                    </path>
                  </svg>
                </a>
                <a class="btn btn-sm btn-info d-inline-flex align-items-center" data-bs-toggle="tooltip"
                  data-bs-placement="top" title="{{ __('Send Message') }}" href="#">
                  <svg class="icon icon-xs" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5">
                    </path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('jslibs')
  <script src="{{ url('libs/dashboard/sweetalert2.all.min.js') }}"></script>
@endsection

@section('scripts')
  <script>
    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-primary',
        cancelButton: 'btn btn-gray'
      },
      buttonsStyling: false
    });
    let all = document.querySelectorAll('.report-comment-btn');
    all.forEach(el => {
      el.addEventListener('click', function() {

        Swal.fire({
          title: "What Is The Violation ?",
          input: "text",
          customClass: {
            confirmButton: 'btn btn-warning me-4',
            cancelButton: 'btn btn-primary'
          },
          buttonsStyling: false,
          inputAttributes: {
            autocapitalize: "off"
          },
          showCancelButton: true,
          confirmButtonText: "Report",
          showLoaderOnConfirm: false,
          inputValidator: (value) => {
            if (!value) {
              return "You need to specify the violation!";
            }
          },
          preConfirm: async (violation) => {
            try {
              const Url = `{{ url('/app-request/comments/report/') }}/${el.dataset.id}`;
              let data = new FormData();
              data.append("violation", violation);
              data.append("user_id", {{ isset($user) && !empty($user) ? $user->id : '' }});
              const response = await fetch(Url, {
                method: "POST",
                body: data,
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
              });
              if (!response.ok) {
                return Swal.showValidationMessage(`
                    ${JSON.stringify(await response.json())}
                  `);
              }
              return response.json();
            } catch (error) {
              Swal.showValidationMessage(`
                  Request failed: ${error}
                `);
            }
          },
        }).then((result) => {
          console.log(result)
          if (result.isConfirmed) {
            Swal.fire({
              title: `Comment Reported Successfully`,
              customClass: {
                confirmButton: 'btn btn-warning me-4',
                cancelButton: 'btn btn-primary'
              },
              buttonsStyling: false,
            });
          }
        });

      });
    });
  </script>
@endsection
