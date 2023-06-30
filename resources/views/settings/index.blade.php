@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">{{trans('lang.general_settings')}}</h3>
        </div>

        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard')}}">{{trans('lang.dashboard')}}</a></li>
                <li class="breadcrumb-item active">{{trans('lang.general_settings')}}</li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">
    
    <div class="row">
            <div class="col-12">
                <div class="card pb-4">
                    <div class="card-body">

                        @if($errors->any())
							<div class="alert alert-danger">
								<ul>
								@foreach($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
								</ul>
							</div>
						@endif

                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                            
                        <form action="{{route('settings.update.general',['id'=>$settings->id])}}" method="post"  enctype="multipart/form-data">
						
                        @csrf

                            <div class="row restaurant_payout_create">
                                <div class="restaurant_payout_create-inner">
                                    <fieldset>
                                        <legend>{{trans('lang.api_settings')}}</legend>

                                        <div class="form-group row width-100">
                                            <label class="col-3 control-label">{{trans('lang.apikey_android_revenuecat')}}</label>
                                            <div class="col-7">
                                                <input type="text" class="form-control" name="apikey_android_revenuecat" value="{{ $settings->apikey_android_revenuecat }}">
                                            </div>
                                        </div>

                                        <div class="form-group row width-100">
                                            <label class="col-3 control-label">{{trans('lang.apikey_ios_revenuecat')}}</label>
                                            <div class="col-7">
                                                <input type="text" class="form-control" name="apikey_ios_revenuecat" value="{{ $settings->apikey_ios_revenuecat }}">
                                            </div>
                                        </div>

                                        <div class="form-group row width-100">
                                            <label class="col-3 control-label">{{trans('lang.openai_api_key')}}</label>
                                            <div class="col-7">
                                                <input type="text" class="form-control" name="openai_api_key" value="{{ $settings->openai_api_key }}">
                                            </div>
                                        </div>
                                        
                                    </fieldset>

                                    <fieldset>
                                        <legend>{{trans('lang.ads_settings')}}</legend>

                                        <div class="form-check  width-50">
                                            @if ($settings->add_is_enabled === "yes")
                                                <input type="checkbox" class="" name="add_is_enabled" id="add_is_enabled" checked="checked">
                                            @else
                                                <input type="checkbox" class="" name="add_is_enabled" id="add_is_enabled">
                                            @endif
                                            <label class="col-3 control-label" for="add_is_enabled">{{trans('lang.add_is_enabled')}}</label>
                                        </div>

                                        <div class="form-group row width-50">
                                            <label class="col-3 control-label">{{trans('lang.android_app_id')}}</label>
                                            <div class="col-7">
                                                <input type="text" class="form-control" name="android_app_id" value="{{ $settings->android_app_id }}">
                                            </div>
                                        </div>

                                        <div class="form-group row width-50">
                                            <label class="col-3 control-label">{{trans('lang.ios_app_id')}}</label>
                                            <div class="col-7">
                                                <input type="text" class="form-control" name="ios_app_id" value="{{ $settings->ios_app_id }}">
                                            </div>
                                        </div>

                                        <div class="form-group row width-50">
                                            <label class="col-3 control-label">{{trans('lang.android_banner_id')}}</label>
                                            <div class="col-7">
                                                <input type="text" class="form-control" name="android_banner_id" value="{{ $settings->android_banner_id }}">
                                            </div>
                                        </div>

                                        <div class="form-group row width-50">
                                            <label class="col-3 control-label">{{trans('lang.ios_banner_id')}}</label>
                                            <div class="col-7">
                                                <input type="text" class="form-control" name="ios_banner_id" value="{{ $settings->ios_banner_id }}">
                                            </div>
                                        </div>

                                        <div class="form-group row width-50">
                                            <label class="col-3 control-label">{{trans('lang.android_interstitial_id')}}</label>
                                            <div class="col-7">
                                                <input type="text" class="form-control" name="android_interstitial_id" value="{{ $settings->android_interstitial_id }}">
                                            </div>
                                        </div>

                                        <div class="form-group row width-50">
                                            <label class="col-3 control-label">{{trans('lang.ios_interstitial_id')}}</label>
                                            <div class="col-7">
                                                <input type="text" class="form-control" name="ios_interstitial_id" value="{{ $settings->ios_interstitial_id }}">
                                            </div>
                                        </div>

                                        <div class="form-group row width-50">
                                            <label class="col-3 control-label">{{trans('lang.android_reward_ads_id')}}</label>
                                            <div class="col-7">
                                                <input type="text" class="form-control" name="android_reward_ads_id" value="{{ $settings->android_reward_ads_id }}">
                                            </div>
                                        </div>

                                        <div class="form-group row width-50">
                                            <label class="col-3 control-label">{{trans('lang.ios_reward_ads_id')}}</label>
                                            <div class="col-7">
                                                <input type="text" class="form-control" name="ios_reward_ads_id" value="{{ $settings->ios_reward_ads_id }}">
                                            </div>
                                        </div>

                                    </fieldset>

                                    <fieldset>
                                        <legend>{{trans('lang.rewards_settings')}}</legend>

                                        <div class="form-group row width-50">
                                            <label class="col-3 control-label">{{trans('lang.writer_limit')}}</label>
                                            <div class="col-7">
                                                <input type="text" class="form-control" name="ads_writer_limit" value="{{ $settings->ads_writer_limit }}">
                                            </div>
                                        </div>

                                        <div class="form-group row width-50">
                                            <label class="col-3 control-label">{{trans('lang.chat_limit')}}</label>
                                            <div class="col-7">
                                                <input type="text" class="form-control" name="ads_chat_limit" value="{{ $settings->ads_chat_limit }}">
                                            </div>
                                        </div>

                                        <div class="form-group row width-50">
                                            <label class="col-3 control-label">{{trans('lang.image_limit')}}</label>
                                            <div class="col-7">
                                                <input type="text" class="form-control" name="ads_image_limit" value="{{ $settings->ads_image_limit }}">
                                            </div>
                                        </div>

                                    </fieldset>

                                    <fieldset>
                                        
                                        <legend>{{trans('lang.support_settings')}}</legend>
                                        
                                        <div class="form-group row width-50">
                                            <label class="col-3 control-label">{{trans('lang.support_email')}}</label>
                                            <div class="col-7">
                                                <input type="text" class="form-control" name="support_email" value="{{ $settings->support_email }}">
                                            </div>
                                        </div>

                                        <div class="form-group row width-50">
                                            <label class="col-3 control-label">{{trans('lang.app_version')}}</label>
                                            <div class="col-7">
                                                <input type="text" class="form-control" name="app_version" value="{{ $settings->app_version }}">
                                            </div>
                                        </div>

                                        <div class="form-group row width-100">
                                            <label class="col-3 control-label">{{trans('lang.privacy_policy')}}</label>
                                            <div class="col-7">
                                                <input type="text" class="form-control" name="privacy_policy" value="{{ $settings->privacy_policy }}">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row width-100">
                                            <label class="col-3 control-label">{{trans('lang.terms_and_conditions')}}</label>
                                            <div class="col-7">
                                                <input type="text" class="form-control" name="terms_and_conditions" value="{{ $settings->terms_and_conditions }}">
                                            </div>
                                        </div>

                                        <div class="form-group row width-100">
                                            <label class="col-3 control-label">{{trans('lang.faq')}}</label>
                                            <div class="col-7">
                                                <input type="text" class="form-control" name="faq" value="{{ $settings->faq }}">
                                            </div>
                                        </div>

                                    </fieldset>    
                                </div>
                            </div>

                            <div class="form-group col-12 text-center btm-btn">
                                <button type="submit" class="btn btn-primary  create_user_btn"><i class="fa fa-save"></i> {{ trans('lang.save')}}</button>
                            </div>

						</form>
	
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection

    @section('scripts')


    @endsection
