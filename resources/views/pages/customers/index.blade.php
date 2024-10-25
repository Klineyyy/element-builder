<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">{{ __('Customer Information') }}</x-slot>
    <x-slot name="subHeader">{{ __('You can manage your customer and register new customer here.') }}</x-slot>
    <x-slot name="btn">
        <div class="toggle-wrap nk-block-tools-toggle">
            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                    class="icon ni ni-more-v"></em></a>
            <div class="toggle-expand-content" data-content="pageMenu">
                <ul class="nk-block-tools g-3">
                    <li class="nk-block-tools-opt">
                        <button class="btn btn-primary btn-round" data-bs-toggle="modal" data-bs-target="#registration">
                            <em class="icon ni ni-plus-circle"></em>&ensp;
                            Register New Customer
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </x-slot>

    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-inner">
                        @if ($errors->any())
                            <div class="alert alert-pro alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <table class="datatable-init-export table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="registration">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal">
                    <em class="icon ni ni-cross-sm"></em>
                </a>
                <div class="modal-body">
                    <h1 class="nk-block-title page-title text-2xl">
                        Personal Information
                    </h1>
                    <p>You can create new customer to monitor.</p>
                    <hr class="mt-2 mb-2">

                    <form action=""> 
                        @csrf
                        <div class="row mt-2 align-center">
                            <div class="col-lg-5">
                                
                                <div class="form-group">
                                    <label class="form-label" for="inp_fn">First Name <b class="text-danger">*</b></label>
                                    <span class="form-note">Specify the First Name here.</span>
                                </div>
                                               
                            </div>
                            <div class="col-lg-7">
                                
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-info"></em>
                                    </div>
                                    <input type="text"  class="form-control" id="inp_fn" name="inp_fn" placeholder="Enter (Optional) First Name here.. ">
                                </div>
                                
                            </div>
                        </div>    
                        <div class="row mt-2 align-center">
                            <div class="col-lg-5">
                                
                                <div class="form-group">
                                    <label class="form-label" for="inp_ln">Last Name <b class="text-danger">*</b></label>
                                    <span class="form-note">Specify the Last Name here.</span>
                                </div>
                                               
                            </div>
                            <div class="col-lg-7">
                                
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-info"></em>
                                    </div>
                                    <input type="text"  class="form-control" id="inp_ln" name="inp_ln" placeholder="Enter (Optional) Last Name here.. ">
                                </div>
                                
                            </div>
                        </div>    
                        <div class="row mt-2 align-center">
                            <div class="col-lg-5">
                                
                                <div class="form-group">
                                    <label class="form-label" for="inp_gender">Gender <b class="text-danger">*</b></label>
                                    <span class="form-note">Specify the Gender here.</span>
                                </div>
                                               
                            </div>
                            <div class="col-lg-7">
                                
                                <select class="form-select">
                                    <option value="" data-select2-id="3" style="text-transform: uppercase !important;">-- SELECT GENDER --</option>
                                        <option value="Male" data-select2-id="16">Male</option>
                                    <option value="Female" data-select2-id="16">Female</option>
                                </select>
                                    
                            </div>
                        </div>    
                        <div class="row mt-2 align-center">
                            <div class="col-lg-5">
                                
                                <div class="form-group">
                                    <label class="form-label" for="inp_region">Region <b class="text-danger">*</b></label>
                                    <span class="form-note">Specify the Region here.</span>
                                </div>
                                               
                            </div>
                            <div class="col-lg-7">
                                
                                <select class="form-select">
                                    <option value="" data-select2-id="3" style="text-transform: uppercase !important;">-- SELECT REGION --</option>
                                    </select>
                                    
                            </div>
                        </div>    
                        <div class="row mt-2 align-center">
                            <div class="col-lg-5">
                                
                                <div class="form-group">
                                    <label class="form-label" for="inp_province">Province <b class="text-danger">*</b></label>
                                    <span class="form-note">Specify the Province here.</span>
                                </div>
                                               
                            </div>
                            <div class="col-lg-7">
                                
                                <select class="form-select">
                                    <option value="" data-select2-id="3" style="text-transform: uppercase !important;">-- SELECT PROVINCE --</option>
                                    </select>
                                    
                            </div>
                        </div>    
                        <div class="row mt-2 align-center">
                            <div class="col-lg-5">
                                
                                <div class="form-group">
                                    <label class="form-label" for="inp_citymun">City/Municipality <b class="text-danger">*</b></label>
                                    <span class="form-note">Specify the City/Municipality here.</span>
                                </div>
                                               
                            </div>
                            <div class="col-lg-7">
                                
                                <select class="form-select">
                                    <option value="" data-select2-id="3" style="text-transform: uppercase !important;">-- SELECT CITY/MUNICIPALITY --</option>
                                    </select>
                                    
                            </div>
                        </div>    
                        <div class="row mt-2 align-center">
                            <div class="col-lg-5">
                                
                                <div class="form-group">
                                    <label class="form-label" for="inp_barangay">Barangay <b class="text-danger">*</b></label>
                                    <span class="form-note">Specify the Barangay here.</span>
                                </div>
                                               
                            </div>
                            <div class="col-lg-7">
                                
                                <select class="form-select">
                                    <option value="" data-select2-id="3" style="text-transform: uppercase !important;">-- SELECT BARANGAY --</option>
                                    </select>
                                    
                            </div>
                        </div>    
                        <div class="row mt-2 align-center">
                            <div class="col-lg-5">
                                
                                <div class="form-group">
                                    <label class="form-label" for="inp_pc">Postal Code <b class="text-danger">*</b></label>
                                    <span class="form-note">Specify the Postal Code here.</span>
                                </div>
                                               
                            </div>
                            <div class="col-lg-7">
                                
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-info"></em>
                                    </div>
                                    <input type="text"  class="form-control" id="inp_pc" name="inp_pc" placeholder="Enter (Optional) Postal Code here.. ">
                                </div>
                                
                            </div>
                        </div>    
                                    
                        <div class="col-lg-5">
                        </div>
                        <div class="col-lg-7" style="float: right">
                            <hr>
                        </div>
                    
                        <div class="col-lg-5">
                        </div>
                        <div class="col-lg-7 justify-end" style="float: right">
                            <hr>
                            <div class="form-group mt-2 mb-2 justify-end">
                                <button type="reset" class="btn btn-light bg-white mx-3">
                                    <em class="icon ni ni-repeat"></em>
                                     Reset
                                </button>
                                <button  type="submit" class="btn btn-light bg-white">
                                    <em class="icon ni ni-save"></em>
                                     Submit Record
                                </button>
                            </div>
                        </div>
                            
                    </form>
                    


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
