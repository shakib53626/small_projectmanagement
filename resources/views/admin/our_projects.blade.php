@extends('admin.admin_master')
@section('main')
@php
    $i = 1;
    $e = 1;
    $projectData = App\Models\Our_Projects::all();
@endphp
<div class="page-content">
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Our Projects</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Service Key</a></li>
                            <li class="breadcrumb-item active">Projects</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                    <span class="d-none d-sm-block">All Projects</span>    
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                    <span class="d-none d-sm-block">Incomplete Projects</span>    
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#messages" role="tab">
                                    <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                    <span class="d-none d-sm-block">New Projects</span>    
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content p-3 text-muted">
                            <div class="tab-pane active" id="home" role="tabpanel">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                        
                                                
                                                <div class="d-flex justify-content-between">
                                                        
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="EditProject" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            
                                                            <form  action="{{ route('update.project') }}">
                                                                <div class="modal-dialog modal-xl">
                                                                    <input type="hidden" name="id" id="id">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Add a New Project</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form action="">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="row mb-3">
                                                                                            <label for="example-text-input" >Domain Name</label>
                                                                                            <div class="col-sm-11">
                                                                                                <input class="form-control" name="domain_name" type="text" placeholder="Enter Domain Name" id="domain_name">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="row mb-3">
                                                                                            <label for="example-text-input">Type</label>
                                                                                            <div class="col-sm-11">
                                                                                                <select class="form-control" name="type" id="type">
                                                                                                    <option value="0">Landig Page</option>
                                                                                                    <option value="1">Website</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="row mb-3">
                                                                                            <label for="example-text-input" >End Date</label>
                                                                                            <div class="col-sm-11">
                                                                                                <input class="form-control" type="date" name="end_date" placeholder="Enter Domain Name" id="end_date">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                
                                
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="row mb-3">
                                                                                            <label for="example-text-input" >WhatsApp Group Name</label>
                                                                                            <div class="col-sm-11">
                                                                                                <input class="form-control" type="text" name="whatsapp_group_name" placeholder="Enter Domain Name" id="whatsapp_group_name">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="row mb-3">
                                                                                            <label for="example-text-input" >Phone Number</label>
                                                                                            <div class="col-sm-11">
                                                                                                <input class="form-control" type="text" name="phone_number" placeholder="Enter Phone Number" id="phone_number">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="row mb-3">
                                                                                            <label for="example-text-input">Develop By</label>
                                                                                            <div class="col-sm-11">
                                                                                                <select class="form-control" name="develop_by" id="develop_by">
                                                                                                    <option value="shakib">Shakib</option>
                                                                                                    <option value="hafijur">Hafijur</option>
                                                                                                    <option value="dayal">Dayal</option>
                                                                                                    <option value="albab">Albab</option>
                                                                                                    <option value="ripon">Ripon</option>
                                                                                                    <option value="rony">Rony</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                
                                
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="row mb-3">
                                                                                            <label for="example-text-input" >Project Information</label>
                                                                                            <div class="col-sm-11">
                                                                                                <textarea class="form-control" name="project_information" id="project_information" cols="90" rows="5" placeholder="Enter Your Project Information"></textarea>
                                                                                                
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="row mb-3">
                                                                                            <label for="example-text-input" >What We Do?</label>
                                                                                            <div class="col-sm-11">
                                                                                                <input type="checkbox" value=""><span class="me-2"> Full Landing Page </span>
                                                                                                <input type="checkbox" value=""><span class="me-2"> Full Website </span>
                                                                                                <input type="checkbox" value=""><span class="me-2"> Landing Page Transfer </span>
                                                                                                <input type="checkbox" value=""><span class="me-2"> Website Transfer </span>
                                                                                                <input type="checkbox" value=""><span class="me-2"> Data Plugin Setup </span>
                                                                                                <input type="checkbox" value=""><span class="me-2"> Streetfast Setup </span>
                                                                                                <input type="checkbox" value=""><span class="me-2"> Logo Design </span>
                                                                                                <input type="checkbox" value=""><span class="me-2"> Change Desing </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-info">Update</button>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                            </form>

                                                        </div>
                                                </div>
                        
                                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead class="bg-dark text-light">
                                                    <tr>
                                                        <th>SL</th>
                                                        <th>Domain Name</th>
                                                        <th>Landig/website</th>
                                                        <th>WhatsApp Group Name</th>
                                                        <th>Start date</th>
                                                        <th>Develop By</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                        
                        
                                                    <tbody>

                                                    @foreach ($projectData as $data)
                                                        <tr>
                                                            <td>{{ $e++ }}</td>
                                                            <td><a href="https://{{ $data->domain_name }}/" target="blanck">{{ $data->domain_name }}</a></td>
                                                            <td>
                                                                @if ($data->type == 0)
                                                                    Landing Page
                                                                @else
                                                                    Website
                                                                @endif
                                                            </td>
                                                            <td>{{ $data->whatsapp_group_name }}</td>
                                                            <td>{{ $data->created_at }}</td>
                                                            <td>
                                                                
                                                                    @if ($data->develop_by == 'shakib')
                                                                            <div class="badge bg-info" style="font-size: 14px;">Shakib</div>
                                                                        @elseif ($data->develop_by == 'hafijur')
                                                                            <div class="badge bg-danger" style="font-size: 14px;">Hafijur</div>
                                                                        @elseif ($data->develop_by == 'rony')
                                                                            <div class="badge bg-primary" style="font-size: 14px;">Rony</div>
                                                                        @elseif ($data->develop_by == 'albab')
                                                                            <div class="badge bg-secondary" style="font-size: 14px;">albab</div>
                                                                        @elseif ($data->develop_by == 'dayal')
                                                                            <div class="badge bg-dark" style="font-size: 14px;">Dayal</div>
                                                                        @elseif ($data->develop_by == 'ripon')
                                                                            <div class="badge bg-success" style="font-size: 14px;">Ripon</div>
                                                                    @endif
                                                                
                                                            </td>
                                                            <td>
                                                                <div class="badge bg-danger" style="font-size: 14px;">10%</div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex justify-content-center">
                                                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                                        <button  class="btn btn-info">View</button>
                                                                        <a href="{{ route('delete.project', $data->id) }}" id="delete" class="btn btn-danger">Delete</a>
                                                                        <button type="button" value="{{ $data->id }}"  class="btn btn-info editbtn" data-bs-toggle="modal" data-bs-target="#EditProject">Edit</button>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div>
                            <div class="tab-pane" id="profile" role="tabpanel">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                        
                                                
                                                <div class="d-flex justify-content-between">
                                                        
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-xl">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Add a New Project</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="">
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="row mb-3">
                                                                                    <label for="example-text-input" >Domain Name</label>
                                                                                    <div class="col-sm-11">
                                                                                        <input class="form-control" type="text" placeholder="Enter Domain Name" id="example-text-input">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="row mb-3">
                                                                                    <label for="example-text-input">Type</label>
                                                                                    <div class="col-sm-11">
                                                                                        <select class="form-control" name="" id="">
                                                                                            <option value="">Landig Page</option>
                                                                                            <option value="">Website</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="row mb-3">
                                                                                    <label for="example-text-input" >End Date</label>
                                                                                    <div class="col-sm-11">
                                                                                        <input class="form-control" type="date" placeholder="Enter Domain Name" id="example-text-input">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                        
                        
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="row mb-3">
                                                                                    <label for="example-text-input" >WhatsApp Group Name</label>
                                                                                    <div class="col-sm-11">
                                                                                        <input class="form-control" type="text" placeholder="Enter Domain Name" id="example-text-input">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="row mb-3">
                                                                                    <label for="example-text-input" >Phone Number</label>
                                                                                    <div class="col-sm-11">
                                                                                        <input class="form-control" type="text" placeholder="Enter Phone Number" id="example-text-input">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="row mb-3">
                                                                                    <label for="example-text-input">Develop By</label>
                                                                                    <div class="col-sm-11">
                                                                                        <select class="form-control" name="" id="">
                                                                                            <option value="">Shakib</option>
                                                                                            <option value="">Hafijur</option>
                                                                                            <option value="">Dayal</option>
                                                                                            <option value="">Albab</option>
                                                                                            <option value="">Ripon</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                        
                        
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="row mb-3">
                                                                                    <label for="example-text-input" >Project Information</label>
                                                                                    <div class="col-sm-11">
                                                                                        <textarea class="form-control" name="" id="" cols="90" rows="5" placeholder="Enter Your Project Information"></textarea>
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="row mb-3">
                                                                                    <label for="example-text-input" >What We Do?</label>
                                                                                    <div class="col-sm-11">
                                                                                        <input type="checkbox" value=""><span class="me-2"> Full Landing Page </span>
                                                                                        <input type="checkbox" value=""><span class="me-2"> Full Website </span>
                                                                                        <input type="checkbox" value=""><span class="me-2"> Site Transfer </span>
                                                                                        <input type="checkbox" value=""><span class="me-2"> Data Plugin Setup </span>
                                                                                        <input type="checkbox" value=""><span class="me-2"> Streetfast Setup </span>
                                                                                        <input type="checkbox" value=""><span class="me-2">  </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                </div>
                        
                                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead class="bg-dark text-light">
                                                    <tr>
                                                        <th>SL</th>
                                                        <th>Domain Name</th>
                                                        <th>Landig/website</th>
                                                        <th>WhatsApp Group Name</th>
                                                        <th>Start date</th>
                                                        <th>Develop By</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                        
                        
                                                    <tbody>
                                                    <tr>
                                                        <td>01</td>
                                                        <td><a href="https://rutab.xyz/" target="blanck">rutab.xyz</a></td>
                                                        <td>Landing Page</td>
                                                        <td>Rutab Lan Project</td>
                                                        <td>07/31/2023</td>
                                                        <td>
                                                            <div class="badge bg-info" style="font-size: 14px;">Shakib</div>
                                                        </td>
                                                        <td>
                                                            <div class="badge bg-danger" style="font-size: 14px;">10% Complete</div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-center">
                                                                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                                    <button type="button" class="btn btn-info">View</button>
                                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                                    <button type="button" class="btn btn-info">Edit</button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>01</td>
                                                        <td><a href="https://rutab.xyz/" target="blanck">rutab.xyz</a></td>
                                                        <td>Landing Page</td>
                                                        <td>Rutab Lan Project</td>
                                                        <td>07/31/2023</td>
                                                        <td>
                                                            <div class="badge bg-info" style="font-size: 14px;">Shakib</div>
                                                        </td>
                                                        <td>
                                                            <div class="badge bg-danger" style="font-size: 14px;">10% Complete</div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-center">
                                                                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                                    <button type="button" class="btn btn-info">View</button>
                                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                                    <button type="button" class="btn btn-info">Edit</button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>02</td>
                                                        <td><a href="https://rutab.xyz/" target="blanck">rutab.xyz</a></td>
                                                        <td>Landing Page</td>
                                                        <td>Rutab Lan Project</td>
                                                        <td>07/31/2023</td>
                                                        <td>
                                                            <div class="badge bg-info" style="font-size: 14px;">Shakib</div>
                                                        </td>
                                                        <td>
                                                            <div class="badge bg-danger" style="font-size: 14px;">10% Complete</div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-center">
                                                                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                                    <button type="button" class="btn btn-info">View</button>
                                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                                    <button type="button" class="btn btn-info">Edit</button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>03</td>
                                                        <td><a href="https://rutab.xyz/" target="blanck">rutab.xyz</a></td>
                                                        <td>Landing Page</td>
                                                        <td>Rutab Lan Project</td>
                                                        <td>07/31/2023</td>
                                                        <td>
                                                            <div class="badge bg-info" style="font-size: 14px;">Shakib</div>
                                                        </td>
                                                        <td>
                                                            <div class="badge bg-danger" style="font-size: 14px;">10% Complete</div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-center">
                                                                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                                    <button type="button" class="btn btn-info">View</button>
                                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                                    <button type="button" class="btn btn-info">Edit</button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>04</td>
                                                        <td><a href="https://rutab.xyz/" target="blanck">rutab.xyz</a></td>
                                                        <td>Landing Page</td>
                                                        <td>Rutab Lan Project</td>
                                                        <td>07/31/2023</td>
                                                        <td>
                                                            <div class="badge bg-info" style="font-size: 14px;">Shakib</div>
                                                        </td>
                                                        <td>
                                                            <div class="badge bg-danger" style="font-size: 14px;">10% Complete</div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-center">
                                                                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                                    <button type="button" class="btn btn-info">View</button>
                                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                                    <button type="button" class="btn btn-info">Edit</button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>05</td>
                                                        <td><a href="https://rutab.xyz/" target="blanck">rutab.xyz</a></td>
                                                        <td>Landing Page</td>
                                                        <td>Rutab Lan Project</td>
                                                        <td>07/31/2023</td>
                                                        <td>
                                                            <div class="badge bg-info" style="font-size: 14px;">Shakib</div>
                                                        </td>
                                                        <td>
                                                            <div class="badge bg-danger" style="font-size: 14px;">10% Complete</div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-center">
                                                                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                                    <button type="button" class="btn btn-info">View</button>
                                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                                    <button type="button" class="btn btn-info">Edit</button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>06</td>
                                                        <td><a href="https://rutab.xyz/" target="blanck">rutab.xyz</a></td>
                                                        <td>Landing Page</td>
                                                        <td>Rutab Lan Project</td>
                                                        <td>07/31/2023</td>
                                                        <td>
                                                            <div class="badge bg-info" style="font-size: 14px;">Shakib</div>
                                                        </td>
                                                        <td>
                                                            <div class="badge bg-danger" style="font-size: 14px;">10% Complete</div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-center">
                                                                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                                    <button type="button" class="btn btn-info">View</button>
                                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                                    <button type="button" class="btn btn-info">Edit</button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div>
                            <div class="tab-pane" id="messages" role="tabpanel">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                        
                                                <div class="d-flex justify-content-between mb-4">
                                                    <h4 class="card-title">All Projects List</h4>
                                                    <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            Add Project
                                                        </button>
                                                        
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <form method="POST" action="{{ route('add.project') }}">
                                                                @csrf

                                                                <div class="modal-dialog modal-xl">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Add a New Project</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="row mb-3">
                                                                                            <label for="example-text-input" >Domain Name</label>
                                                                                            <div class="col-sm-11">
                                                                                                <input class="form-control" name="domain_name" type="text" placeholder="Enter Domain Name" id="example-text-input">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="row mb-3">
                                                                                            <label for="example-text-input">Type</label>
                                                                                            <div class="col-sm-11">
                                                                                                <select class="form-control" name="type" id="">
                                                                                                    <option value="0">Landig Page</option>
                                                                                                    <option value="1">Website</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="row mb-3">
                                                                                            <label for="example-text-input" >End Date</label>
                                                                                            <div class="col-sm-11">
                                                                                                <input class="form-control" name="end_date" type="date" placeholder="Enter Domain Name" id="example-text-input">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                
                                
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="row mb-3">
                                                                                            <label for="example-text-input" >WhatsApp Group Name</label>
                                                                                            <div class="col-sm-11">
                                                                                                <input class="form-control" name="whatsapp_group_name" type="text" placeholder="Enter Domain Name" id="example-text-input">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="row mb-3">
                                                                                            <label for="example-text-input" >Phone Number</label>
                                                                                            <div class="col-sm-11">
                                                                                                <input class="form-control" name="phone_number" type="text" placeholder="Enter Phone Number" id="example-text-input">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="row mb-3">
                                                                                            <label for="example-text-input">Develop By</label>
                                                                                            <div class="col-sm-11">
                                                                                                <select class="form-control" name="develop_by" id="">
                                                                                                    <option value="shakib">Shakib</option>
                                                                                                    <option value="hafijur">Hafijur</option>
                                                                                                    <option value="dayal">Dayal</option>
                                                                                                    <option value="albab">Albab</option>
                                                                                                    <option value="ripon">Ripon</option>
                                                                                                    <option value="rony">Rony</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                
                                
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="row mb-3">
                                                                                            <label for="example-text-input" >Project Information</label>
                                                                                            <div class="col-sm-11">
                                                                                                <textarea class="form-control" name="project_information" id="" cols="90" rows="5" placeholder="Enter Your Project Information"></textarea>
                                                                                                
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="row mb-3">
                                                                                            <label for="example-text-input" >What We Do?</label>
                                                                                            <div class="col-sm-11">
                                                                                                <input type="checkbox" value=""><span class="me-2"> Full Landing Page </span>
                                                                                                <input type="checkbox" value=""><span class="me-2"> Full Website </span>
                                                                                                <input type="checkbox" value=""><span class="me-2"> Landing Page Transfer </span>
                                                                                                <input type="checkbox" value=""><span class="me-2"> Website Transfer </span>
                                                                                                <input type="checkbox" value=""><span class="me-2"> Data Plugin Setup </span>
                                                                                                <input type="checkbox" value=""><span class="me-2"> Streetfast Setup </span>
                                                                                                <input type="checkbox" value=""><span class="me-2"> Logo Design </span>
                                                                                                <input type="checkbox" value=""><span class="me-2"> Change Desing </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-info">Add Project</button>
                                                                        </div>
                                                                    </div>
                                                                </div>  
                                                            </form>
                                                        </div>
                                                </div>
                                                
                        
                                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead class="bg-dark text-light">
                                                    <tr>
                                                        <th>SL</th>
                                                        <th>Domain Name</th>
                                                        <th>Landig/website</th>
                                                        <th>WhatsApp Group Name</th>
                                                        <th>Start date</th>
                                                        <th>Develop By</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                        
                        
                                                    <tbody>

                                                        @foreach ($projectData as $data)
                                                            <tr>
                                                                <td>{{ $i++ }}</td>
                                                                <td><a href="https://{{ $data->domain_name }}/" target="blanck">{{ $data->domain_name }}</a></td>
                                                                <td>
                                                                    @if ($data->type == 0)
                                                                        Landing Page
                                                                    @else
                                                                        Website
                                                                    @endif
                                                                </td>
                                                                <td>{{ $data->whatsapp_group_name }}</td>
                                                                <td>{{ $data->created_at }}</td>
                                                                <td>
                                                                    
                                                                        @if ($data->develop_by == 'shakib')
                                                                                <div class="badge bg-info" style="font-size: 14px;">Shakib</div>
                                                                            @elseif ($data->develop_by == 'hafijur')
                                                                                <div class="badge bg-danger" style="font-size: 14px;">Hafijur</div>
                                                                            @elseif ($data->develop_by == 'rony')
                                                                                <div class="badge bg-primary" style="font-size: 14px;">Rony</div>
                                                                            @elseif ($data->develop_by == 'albab')
                                                                                <div class="badge bg-secondary" style="font-size: 14px;">albab</div>
                                                                            @elseif ($data->develop_by == 'dayal')
                                                                                <div class="badge bg-dark" style="font-size: 14px;">Dayal</div>
                                                                            @elseif ($data->develop_by == 'ripon')
                                                                                <div class="badge bg-success" style="font-size: 14px;">Ripon</div>
                                                                        @endif
                                                                    
                                                                </td>
                                                                <td>
                                                                    <div class="badge bg-danger" style="font-size: 14px;">10%</div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex justify-content-center">
                                                                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                                            <button type="button" class="btn btn-info">View</button>
                                                                            <button type="button" class="btn btn-danger">Delete</button>
                                                                            <button type="button" class="btn btn-info">Edit</button>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    
                                                    
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </div>
    
</div>
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $(document).on('click', '.editbtn', function(){
                var project_id = $(this).val();
                $.ajax({
                    type: "GET",
                    url: "/edit_project/"+project_id,
                    success: function (response){
                        $('#domain_name').val(response.project.domain_name);
                        $('#type').val(response.project.type);
                        $('#project_information').val(response.project.project_information);
                        $('#develop_by').val(response.project.develop_by);
                        $('#phone_number').val(response.project.phone_number);
                        $('#whatsapp_group_name').val(response.project.whatsapp_group_name);
                        $('#end_date').val(response.project.end_date);
                        $('#id').val(response.project.id);
                    }
                });
            });
        });
    </script>
@endsection