@extends('layout.asset-app')
@section('content')

 <main id="js-page-content" role="main" class="page-content">
        <ol class="breadcrumb page-breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">DIU Community</a></li>
            <li class="breadcrumb-item active">DIU Community</li>
            <li class="breadcrumb-item active">Edit</li>
            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
        </ol>
        <div class="subheader">
            <h1 class="subheader-title">
                <i class='subheader-icon fal fa-globe'></i>DIU Event Community
            </h1>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xl-6 order-lg-3 order-xl-2">
                                <div class="card border mb-g">
                    <div class="card-body pl-4 pt-4 pr-4 pb-0">
                        <div class="d-flex flex-column">
                        <div class="border-0 flex-1 position-relative shadow-top">
                            <form action="{{ url('/event-update',$editevent->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <label class="form-label" for="example-textarea">Create Event Post</label>

                                <div class="form-group">
                                    <input class="form-control" type="date" name="time" required value="{{ $editevent->time }}">
                                </div>

                                <div class="form-group">
                                    <select class="form-control" id="example-select" name="eventType" required>
                                        <option>{{ $editevent->eventType }}</option>
                                        <option>Programming</option>
                                        <option>Machine Learning</option>
                                        <option>Artificial Intelligence</option>
                                        <option>Study in Abroad</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <textarea class="form-control" id="example-textarea" rows="5" name="description" required>{{ $editevent->description }}</textarea>
                                </div>

                                <div class="height-8 d-flex flex-row align-items-center flex-wrap flex-shrink-0">
                                    <button type="submit" class="btn btn-info shadow-0 ml-auto">Update</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


@endsection