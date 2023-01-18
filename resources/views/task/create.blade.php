@extends('layouts.app')

@section('page-title')
Create Task
@endsection

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="content-wrapper">
         <section class="content-header">
          <h1>Create Task</h1>
        </section>
        <section class="content">    
          <form name="formAdd" id="formAdd" method="POST" action="{{route('task.store')}}" enctype="multipart/form-data">
            @csrf
            
            <div class="box box-primary">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-grouap {{ $errors->has('project') ? 'has-error' : null }}">
                            <label for="Project">Project <span class="text text-red">*</span></label>
                            <input type="text" name="project_id" class="form-control" id="project" placeholder="Project">
                        </div>
                    </div>
                    
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group {{ $errors->has('title') ? 'has-error' : null }}">
                            <label for="Project">Title <span class="text text-red">*</span></label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                        </div>
                    </div>
                    
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group {{ $errors->has('title') ? 'has-error' : null }}">
                            <label for="Project">Status <span class="text text-red">*</span></label>
                            <select name="status" style="width:100%" id="exampleSelectGender" required class="form-control">
                                <option>::select status::</option>
                                <option value="New">New</option>
                                <option value="In Progress">In Progress</option>
                                <option value="Testing">Testing</option>
                                <option value="Awaiting Feedback">Awaiting Feedback</option>
                                <option value="Completed">Completed</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group {{ $errors->has('title') ? 'has-error' : null }}">
                            <label for="Project">Priority <span class="text text-red">*</span></label>
                            <select name="priority" style="width:100%" id="exampleSelectGender" required class="form-control">
                                <option>::select priority::</option>
                                <option value="Normal">Normal</option>
                                <option value="High">High</option>
                                <option value="Urgent">Urgent</option>
                                <option value="Low">Low</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group {{ $errors->has('start_date') ? 'has-error' : null }}">
                            <label for="Project">Start Date  <span class="text text-red">*</span></label>
                            <input type="date" name="start_date" class="form-control" id="title" placeholder="">
                        </div>
                    </div>
                    
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group {{ $errors->has('end_date') ? 'has-error' : null }}">
                            <label for="Project">End Date  <span class="text text-red">*</span></label>
                            <input type="date" name="end_date" class="form-control" id="title" placeholder="">
                        </div>
                    </div>
                    
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div id="bloodhound" class="form-group {{ $errors->has('title') ? 'has-error' : null }}">
                            <label for="Project">Assign Users  <span class="text text-red">*</span></label>
                            <select class="js-example-basic-single w-100" name="user_id" id="assign_user">
                                <option value="">::select user::</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group {{ $errors->has('title') ? 'has-error' : null }}">
                            <label for="Project">Assign Client  <span class="text text-red">*</span></label>
                            <select class="js-example-basic-single w-100" id="client_id">
                                <option value="">::select client::</option>
                            </select>
                        </div>
                    </div> -->
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group {{ $errors->has('title') ? 'has-error' : null }}">
                            <label for="Project">Description  <span class="text text-red">*</span></label>
                            <textarea  name="description" class="form-control summernoteExample" id="summernoteExample"  rows="6"></textarea>
                        </div>
                    </div>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" onclick="window.location='{{ URL::previous() }}'" class="btn btn-danger">Cancel</button>
              </div>
            </div>
          </form>    
        </section>
        </div>
    </div>

  @endsection