@extends('dashboard.layouts.dashbord')

@section('body')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">{{ __('words.dashboard') }}</li>
        <li class="breadcrumb-item"><a href="#">{{ __('words.dashboard') }}</a></li>
        <li class="breadcrumb-item active">داشبرد</li>


    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <form action="{{Route('dashboard.settings.update',$settings)}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="row">
                @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="card">

                    <div class="card-header">
                        <strong>{{ __('words.settings') }}form</strong>
                    </div>

                    <div class="card-block">
                        {{-- display logo
                        <div class="form-group col-md-6">
                            <label>{{ __('words.logo') }}</label>
                            <img src="{{asset($settings->logo)}}" alt="logo" >
                        </div>
                        --}}

                        {{-- change logo of website --}}
                        <div class="form-group col-md-6">
                            <label>{{ __('words.logo') }}</label>
                            <input type="file" name="logo" class="form-control" placeholder="Enter Logo..">
                        </div>
                        {{-- display favicon image
                        <div class="form-group col-md-6">
                            <label>{{ __('words.favicon') }}</label>
                            <img src="{{asset($settings->favicon)}}" alt="" height="60px">
                        </div>

                        -- }}
                        {{-- change logo of favicon --}}
                        <div class="form-group col-md-6">
                            <label>{{ __('words.favicon') }}</label>
                            <input type="file" name="favicon" class="form-control" placeholder='{{ __("words.favicon")}}'>
                        </div>
                        {{-- change link of facebook --}}
                        <div class="form-group col-md-6">
                            <label>{{ __('words.facebook') }}</label>
                            <input type="text" name="facebook" class="form-control"
                                placeholder="{{ __('words.facebook') }}" value="{{$settings->facebook}}">
                        </div>
                        {{-- change link of instagram --}}
                        <div class="form-group col-md-6">
                            <label>{{ __('words.instagram') }}</label>
                            <input type="text" name="instagram" class="form-control"
                                placeholder="{{ __('words.instagram') }}"value="{{$settings->instagram}}">
                        </div>
                        {{-- change link of phone --}}
                        <div class="form-group col-md-6">
                            <label>{{ __('words.phone') }}</label>
                            <input type="text" name="phone" class="form-control" placeholder="{{ __('words.phone') }}"
                                value="{{$settings->phone}}">
                        </div>
                        {{-- change email of website --}}
                        <div class="form-group col-md-6">
                            <label>{{ __('words.email') }}</label>
                            <input type="text" name="email" class="form-control" placeholder="{{ __('words.email') }}"
                                value="{{$settings->email}}">
                        </div>

                    </div>


                    <div class="card">
                        <div class="card-header">
                            <strong>{{ __('words.translations') }}</strong>
                        </div>

                        <div class="card-block">
                            {{-- system tabs --}}
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                @foreach (config('app.languages') as $key => $lang)
                                    <li class="nav-item">
                                        <a class="nav-link @if ($loop->index == 0) active @endif" id="home-tab"
                                            data-toggle="tab" href="#{{ $key }}" role="tab"
                                            aria-controls="home" aria-selected="true">{{ $lang }}</a>
                                    </li>
                                @endforeach

                            </ul>
                            <div class="tab-content" id="myTabContent">
                                @foreach (config('app.languages') as $key => $lang)
                                    <div class="tab-pane fade @if ($loop->index == 0) show active in @endif"
                                        id="{{ $key }}" role="tabpanel" aria-labelledby="home-tab">
                                        <br>

                                        {{-- title of website --}}
                                        <div class="form-group mt-2 col-md-12">
                                            <label>{{ __('words.title') }}</label>
                                            <input type='text' name="{{$key}}[title]" class="form-control"
                                                placeholder="{{ __('words.title') }}" value="{{$settings->translate($key)->title}}">
                                        </div>

                                        {{-- content of website --}}
                                        <div class="form-group col-md-12">
                                            <label>{{ __('words.content') }}</label>
                                            <input type='text' name="{{$key}}[content]" class="form-control"
                                                placeholder="{{ __('words.content') }}"value="{{$settings->translate($key)->content}}" >
                                        </div>

                                        {{-- title of address --}}
                                        <div class="form-group col-md-12">
                                            <label>{{ __('words.address') }}</label>
                                            <input type='text' name="{{$key}}[address]" class="form-control"
                                                placeholder="{{ __('words.address') }}" value="{{$settings->translate($key)->address}}">
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>


                    <div class="card-footer">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i>
                            Submit</button>
                        <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i>
                            Reset</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection
