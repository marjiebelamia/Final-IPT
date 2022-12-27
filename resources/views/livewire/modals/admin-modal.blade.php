<div>
    {{-- add modal for roles --}}
    <div wire:ignore.self class="modal fade" id="modal-roles" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm " role="document">
            <div class="modal-content ">
            <div class="modal-header" style="background-color: #303235">
                <h5 class="modal-title title1 text-light" id="exampleModalLabel">Adding roles...</h5>
                <button type="button"  style="background-color:maroon; color:white;"  data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent="addRoles">
            <div class="modal-body bg-secondary text-light">
                    @csrf
                <div class="form-group">
                    <label for="name" class="col-form-label">Role</label>
                    <input type="text" class="form-control" id="name" wire:model.defer="name" required="">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="modal-footer bg-light">
                <button type="submit" class="btn " style="background-color: #303235; color:white;"> Add Role</button>
            </div>
            </form>
            </div>
        </div>
    </div>
    {{-- end add modal for roles --}}

    {{-- modal update for roles --}}
    <div wire:ignore.self class="modal fade" id="update-modal-roles" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
            <div class="modal-header" style="background-color: #303235; color:white;">
                <h5 class="modal-title title2" id="exampleModalLabel">Updating role...</h5>
                <button type="button" style="background-color:maroon; color:white;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent="updateRoles">
            <div class="modal-body bg-secondary text-light">
                    @csrf
                <div class="form-group">
                    <label for="name" class="col-form-label">Role</label>
                    <input type="text" class="form-control" id="name" wire:model.defer="name" required="">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="modal-footer">
                   
                    <button type="submit" class="btn " style="background-color: #303235; color:white;"> Update Roles</button>
                </div>
            </div>
            </form>
            </div>
        </div>
    </div>
    {{-- end modal update for roles --}}

    {{-- delete roles modal --}}
    <div wire:ignore.self class="modal fade" id="delete-modal-roles" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
            <div class="modal-header bg-danger text-light">
                <h5 class="modal-title title3" id="exampleModalLabel" style="font-weight: 400;">Are you sure you want to delete this role?</h5>
                <button type="button" style="background-color:maroon; color:white;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
           
            <div class="modal-footer bg-light">
                <button type="submit" class="btn btn-danger text-light" wire:click="deleteRoles()"> Delete Role</button>
            </div>
            </div>
        </div>
    </div>
    {{-- end delete roles modal --}}

    {{-- modal for permissions --}}
    <div wire:ignore.self class="modal fade" id="modal-permissions" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #303235; color:white;">
                <h5 class="modal-title title1" id="exampleModalLabel">Adding permissions...</h5>
                <button type="button" style="background-color:maroon; color:white;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <form wire:submit.prevent="addPermissions">
                <div class="modal-body bg-secondary text-light">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Permission</label>
                        <input type="text" class="form-control" id="recipient-name" wire:model.defer="name" required="">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer bg-light text-dark">
              
                <button type="submit" class="btn " style="background-color: #303235; color:white;"> Add Permission</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end modal for permissions --}}

    {{-- modal update for permissions --}}
    <div wire:ignore.self class="modal fade" id="update-modal-permissions" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #303235; color:white">
                <h5 class="modal-title title2" id="exampleModalLabel">Updating permission...</h5>
                <button type="button" style="background-color:maroon; color:white;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <form wire:submit.prevent="addPermissions">
                <div class="modal-body bg-secondary text-light">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Permission</label>
                        <input type="text" class="form-control" id="recipient-name" wire:model.defer="name" required="">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer bg-light text-dark">
            
                <button type="submit" class="btn" style="background-color: #303235; color:white;" wire:click="updatePermissions()"> Update Permission</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end modal update for permissions --}}

    {{-- delete permissions modal --}}
    <div wire:ignore.self class="modal fade" id="delete-modal-permissions" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
            <div class="modal-header bg-danger" style=" color:white;">
                <h5 class="modal-title" id="exampleModalLabel" style="font-size: 18px; font-weight: 400;">Are you sure you want to delete this permission?</h5>
                <button type="button" style="background-color:maroon; color:white;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-footer bg-light text-dark">
                <button type="submit" class="btn bg-danger " style=" color:white;" wire:click="deletePermissions()">Delete Permission</button>
            </div>
            </div>
        </div>
    </div>
    {{--end delete permissions modal --}}

    {{-- modal update for users --}}
    <div wire:ignore.self class="modal fade" id="update-modal-users" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #303235; color:white;">
                <h5 class="modal-title title2" id="exampleModalLabel">Updating users...</h5>
                <button type="button" style="background-color:maroon; color:white;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <form wire:submit.prevent="updateUsers">
                <div class="modal-body bg-secondary text-light">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="recipient-name" wire:model.defer="name" required="">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <label for="recipient-name" class="col-form-label">Email</label>
                        <input type="email" class="form-control" id="recipient-name" wire:model.defer="email" required="">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                       
                       <div class="d-flex justify-content-end">
                       
                        <select wire:model.defer="gender" class="mt-2 form-control" style="width: 150px;" id="" required="">
                            <option hidden="true">--Select Gender--</option>
                            <option selected disabled>Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        
                        @error('gender')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                       </div>
                        <select class="mt-2 form-control" style="width: 150px;" id="">
                            <option hidden="true">--Select Role--</option>
                            <option selected disabled>--Select Role--</option>
                            <option value="" >Admin</option>
                            <option value="" >Writer</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer bg-light text-dark">
                
                <button type="submit" class="btn" style="background-color: #303235;color:white;">Update User</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    {{--end modal update for users --}}

    {{-- delete users modal --}}
    <div wire:ignore.self class="modal fade" id="delete-modal-users" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
            <div class="modal-header bg-danger text-light">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: 400;">Are you sure you want to delete this user?</h5>
                <button type="button" style="background-color:maroon; color:white;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-footer bg-light text-dark">
               
                <button type="submit" class="btn btn-danger" wire:click="deleteUsers()"> Delete User</button>
            </div>
            </div>
        </div>
    </div>
    {{-- end delete users modal --}}

    {{-- modal for add users --}}
    <div wire:ignore.self class="modal fade" id="modal-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #303235; color:white;">
                <h5 class="modal-title title1" id="exampleModalLabel">Adding user...</h5>
                <button type="button" style="background-color:maroon; color:white;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <form wire:submit.prevent="addUser">
                <div class="modal-body bg-secondary text-light">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="recipient-name" wire:model.defer="name" placeholder="Enter name" required="">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <label for="recipient-name" class="col-form-label">Email Address</label>
                        <input type="email" class="form-control" id="recipient-name" wire:model.defer="email" placeholder="Enter email address" required="">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <label for="recipient-name" class="col-form-label">Password</label>
                        <input type="password" class="form-control" id="recipient-name" wire:model.defer="password" required="">
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <label for="recipient-name" class="col-form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="recipient-name" wire:model.defer="password_confirmation" required="">
                        @error('password_confirmation')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                       <div class="d-flex justify-content-end">
                        <select class="mt-2 form-control" style="width: 150px;" id="" wire:model.defer="gender">
                            <option hidden="true">--Select Gender--</option>
                            <option selected disabled>Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        @error('gender')
                            <p class="text-danger" id="messagee">{{ $message }}</p>
                        @enderror
                       </div>
                    </div>
                </div>
                <div class="modal-footer bg-light text-dark">
              
                <button type="submit" class="btn " style="background-color: #303235; color:white;">Add User</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end modal for add users --}}
</div>


<style>
    .modal-content {
        background-image: linear-gradient(to right, rgb(217, 217, 221), rgb(196, 196, 199), rgb(174, 175, 174));
    }
    #closee {
        border: 1px solid rgb(107, 107, 107);
        background-color: rgb(216, 214, 214);
    }
    #closee:hover {
        background-color: rgb(171, 166, 166);
    }
    @keyframes rotate {
        0% {transform: rotate(0deg);}
        100% {transform: rotate(360deg);}
    }
</style>
