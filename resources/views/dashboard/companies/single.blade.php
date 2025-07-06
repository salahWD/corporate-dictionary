@extends('dashboard.layout')

@section('meta')
  @php $page_title = config("app.name") . " | " . __('Edit Company') @endphp
  <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')

  <div class="container">
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
    <div class="row mt-lg-4">
      <div class="col-12 col-xl-8">
        <div class="card card-body border-0 shadow mb-4">
          <h2 class="h5 mb-4">{{ __('Company information') }}</h2>
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <form method="POST" enctype="multipart/form-data" id="company-form"
            action="{{ isset($company->id) ? route('company_edit', $company->id) : route('company_create') }}">
            @csrf
            <div class="row">
              <div class="col-md-6 mb-3">
                <div class="form-group">
                  <label for="title" class="capitalize">{{ __('title') }}</label>
                  <input class="form-control @error('title') is-invalid @enderror" name="title"
                    placeholder="{{ __('brand title') }}"
                    value="{{ old('title') ?? (isset($company) ? $company->title : '') }}" id="title" required>
                  @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="form-group">
                  <label for="parent">{{ __('parent company') }}</label>
                  <select class="form-select mb-0 @error('parent') is-invalid @enderror" id="parent" name="parent"
                    aria-label="parent company">
                    <option value="">- - -</option>
                    @foreach ($companies as $comp)
                      <option value="{{ $comp->id }}">{{ $comp->title }}</option>
                    @endforeach
                  </select>
                  @error('parent')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="row">
              <div class="mb-3">
                <div class="form-group">
                  <label for="overview">{{ __('about the company') }}</label>
                  <textarea class="form-control @error('overview') is-invalid @enderror" id="overview" name="overview"
                    style="min-height: 10rem" placeholder="{{ __('Enter company overview') }}" required>{{ old('overview') ?? (isset($company->overview) ? $company->overview : '') }}</textarea>
                  @error('overview')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 mb-3">
                <div class="form-group">
                  <label for="country">{{ __('country') }}</label>
                  <select class="form-select mb-0 @error('country') is-invalid @enderror" id="country" name="country"
                    aria-label="company country">
                    <option value="">- - -</option>
                    @foreach ($countries as $country)
                      <option @if (isset($company) && $country->id == $company->country_id) selected @endif value="{{ $country->id }}">
                        {{ $country->title }}</option>
                    @endforeach
                  </select>
                  @error('country')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <div class="form-group">
                  <label for="city">{{ __('city') }}</label>
                  <select class="form-select mb-0 @error('city') is-invalid @enderror" id="city" name="city"
                    aria-label="company city">
                    <option value="">- - -</option>
                    @foreach ($cities as $city)
                      <option @if (isset($company) && $city->id == $company->city_id) selected @endif value="{{ $city->id }}">
                        {{ $city->title }}</option>
                    @endforeach
                  </select>
                  @error('city')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <div class="form-group">
                  <label for="neighborhood">{{ __('neighborhood') }}</label>
                  <input type="search" name="neighborhood" id="neighborhood-search" list="neighborhoods-list"
                    class="form-select mb-0 @error('neighborhood') is-invalid @enderror" placeholder="Search Neighborhood"
                    value="{{ isset($company) ? $company?->neighborhood()->first()?->title : '' }}">
                  <datalist id="neighborhoods-list"></datalist>
                  @error('neighborhood')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <div class="form-group">
                  <label for="address">{{ __('address') }}</label>
                  <input class="form-control @error('address') is-invalid @enderror" name="address"
                    placeholder="{{ __('company address') }}"
                    value="{{ old('address') ?? (isset($company) ? $company->address : '') }}" id="address">
                  @error('address')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-4 mb-3">
                <div class="form-group">
                  <label for="email">{{ __('email') }}</label>
                  <input class="form-control @error('email') is-invalid @enderror" name="email"
                    placeholder="{{ __('company email') }}"
                    value="{{ old('email') ?? (isset($company) ? $company->email : '') }}" id="email">
                  @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <div class="form-group">
                  <label for="website">{{ __('website') }}</label>
                  <input class="form-control @error('website') is-invalid @enderror" name="website"
                    placeholder="{{ __('company website') }}"
                    value="{{ old('website') ?? (isset($company) ? $company->website : '') }}" id="website">
                  @error('website')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <div class="form-group">
                  <label for="phone">{{ __('phone') }}</label>
                  <input class="form-control @error('phone') is-invalid @enderror" name="phone"
                    placeholder="{{ __('company phone') }}"
                    value="{{ old('phone') ?? (isset($company) ? $company->phone : '') }}" id="phone">
                  @error('phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
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
                  src="{{ isset($company) ? $company->image_url() : 'https://www.talentxchange.my/_assets/images/default_logo.png' }}"
                  class="rounded mx-auto mt-3 mb-4" alt="{{ __('company Image') }}" id="company-image">
                <h4 class="h4 mb-3">{{ __((isset($company) ? 'Change' : 'Add') . ' image') }}</h4>
                <div style="display: flex; align-items: center; justify-content: center;">
                  <label for="dropzone-file"
                    style="padding-inline:20px;display: flex;flex-direction:column;align-items:center;justify-content:center;height:11rem;border:2px dashed #d1d5db;border-radius:0.5rem;cursor:pointer;background-color:#f9fafb;transition:background-color 0.2s;"
                    onmouseover="this.style.backgroundColor='#f3f4f6'"
                    onmouseout="this.style.backgroundColor='#f9fafb'">
                    <div
                      style="display:flex;flex-direction:column;align-items:center;justify-content:center;padding-top:1.25rem;padding-bottom:1.5rem;">
                      <svg style="width:3rem;height:3rem;margin-bottom:1rem;color:#6b7280;" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                      </svg>
                      <p style="margin-bottom: 0.5rem; font-size: 0.875rem; color: #6b7280;">
                        <span style="font-weight: 600;">Click to upload</span> or drag and drop
                      </p>
                      <p style="font-size: 0.75rem; color: #6b7280;">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                    </div>
                    <input id="dropzone-file" type="file" style="display: none;" name="image"
                      form="company-form"
                      onchange="console.log(window.URL.createObjectURL(this.files[0]));document.getElementById('company-image').src = window.URL.createObjectURL(this.files[0])" />
                  </label>
                </div>

                <hr>
                <form method="POST"
                  action="{{ isset($company) ? route('company_edit', $company->id) : route('company_create') }}">
                  @csrf
                  @method('DELETE')

                  <button class="btn btn-sm btn-danger d-inline-flex align-items-center" data-bs-toggle="tooltip"
                    data-bs-placement="top" title="{{ __('Delete company') }}" type="submit">
                    {{ __('delete') }}
                    <svg class="icon icon-xs" fill="currentColor" data-slot="icon" fill="none" stroke-width="1.5"
                      stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0">
                      </path>
                    </svg>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('jslibraries')
  <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
@endsection

@section('scripts')
  <script>
    const neighborSearch = document.getElementById("neighborhood-search");
    let lastSearchInput;
    neighborSearch.addEventListener("input", function() {
      clearTimeout(lastSearchInput);
      let search = this.value
      if (this.value.length > 1) {
        lastSearchInput = setTimeout(() => {
          try {
            let data = new FormData();
            data.append("search", search);
            const response = fetch(`{{ url('/app-request/address') }}`, {
              method: "POST",
              body: data,
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            }).then(response => {
              if (!response.ok) {
                return Swal.showValidationMessage(`
                ${JSON.stringify(response.json())}
                `);
              }

              let value = response.json();
              return value;
            }).then(values => {
              let optionsList = document.getElementById("neighborhoods-list");
              optionsList.innerHTML = '';
              values.forEach(neighbor => {
                console.log(neighbor)
                let option = document.createElement("option");
                option.value = neighbor.title;
                optionsList.append(option);
              });
            });
          } catch (error) {
            console.console.warn(error);
            Swal.showValidationMessage(`
              Request failed: ${error}
            `);
          }
        }, 1000);
      }
    })
    // const swalWithBootstrapButtons = Swal.mixin({
    //   customClass: {
    //     confirmButton: 'btn btn-primary',
    //     cancelButton: 'btn btn-gray'
    //   },
    //   buttonsStyling: false
    // });
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
              data.append("company_id", {{ isset($company) ? $company->id : '' }});
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
    @if (Session::has('company-saved') && Session::get('company-saved'))
      Swal.fire({
        title: "company Saved Successfully",
        customClass: {
          confirmButton: 'btn btn-success me-4',
        },
        buttonsStyling: false,
        inputAttributes: {
          autocapitalize: "off"
        },
        showCancelButton: false,
        confirmButtonText: "ok",
        showLoaderOnConfirm: false,
      })
    @endif
  </script>
@endsection
