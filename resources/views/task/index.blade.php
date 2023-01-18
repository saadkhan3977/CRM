@extends('layouts.app')
@section('page-title')
Manage Leaves
@endsection
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
              Task
            </h3>
        </div>
        <div class="row grid-margin">
            <div class="col-12">
                <div class="card card-statistics">
                    <div class="card-body">
                        <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                            <div class="statistics-item">
                                <p>New</p>
                                <h2>12</h2>
                            </div>
                            <div class="statistics-item">
                                <p>In Progress</p>
                                <h2>1</h2>
                                <!-- <label class="badge badge-outline-danger badge-pill">In Progress</label> -->
                            </div>
                            <div class="statistics-item">
                                <p>Testing</p>
                                <h2>35</h2>
                                <!-- <label class="badge badge-outline-success badge-pill">Testing</label> -->
                            </div>
                            <div class="statistics-item">
                                <p>Complete</p>
                                <h2>7500</h2>
                                <!-- <label class="badge badge-outline-success badge-pill">Complete</label> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection