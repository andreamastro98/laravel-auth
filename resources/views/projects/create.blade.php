@extends('layouts.app')

@section('content')

<section class="py-5">
                <div class="container px-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Create Project</span></h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-11 col-xl-9 col-xxl-8">
                            <!-- form project-->
                            <form action="{{ route( 'admin.project.store' ) }}" method="POST" >
                            
                                @csrf
                            
                                <div class="form-group mb-3">
                                    <label for="project-title" class="form-label">Title</label>
                                    <input type="text" id="comic-title" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Inserisci title">
                                    {{-- @error('title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror --}}
                                </div>

                                <div class="form-group mb-3">
                                    <label for="project-customer" class="form-label">Customer</label>
                                    <input type="text" id="project-customer" name="customer"  class="form-control">
                                </div>
                            
                                <div class="form-group mb-3">
                                    <label for="project-description" class="form-label">Description</label>
                                    <textarea class="form-control" name="description" id="project-description" cols="30" rows="10"></textarea>
                                </div>

                                 <button type="submit" class="btn btn-primary mt-5">Create Project</button>

                            </form>                         
                        </div>
                    </div>
                </div>
            </section>

@endsection