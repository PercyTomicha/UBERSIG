@extends('layouts.principal')
@section('content')
<div class="content-page">
                <!-- Start content -->
               

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-20 header-title"><b>Markers</b></h4>

                                    <div id="gmaps-markers" class="gmaps"></div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-20 header-title"><b>Overlays</b></h4>

                                    <div id="gmaps-overlay" class="gmaps"></div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-20 header-title"><b>Street View Panoramas</b></h4>

                                    <div id="panorama" class="gmaps-panaroma"></div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-20 header-title"><b>Map Types</b></h4>

                                    <div id="gmaps-types" class="gmaps"></div>
                                </div>
                            </div>
                        </div>
 </div>
@endsection