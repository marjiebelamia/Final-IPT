<div>
    <div class="col-md-12 mt-5" style="margin-left: 10px;">
        @include('livewire.modals.admin-modal')
        @if (session('message'))
            <div class="alert alert-success text-black text-center" id="messagee">{{ session('message') }}</div>
        @endif
        <div class='btn btn-sm float-end mb-2' style="background-color: #373b40; color:white;" data-toggle="modal" data-target="#modal-user"><span class="fas fa-plus-circle"></span> Add User</div>
        
        <div class="card-body">
            <table class="table table-striped table-bordered table-md table-hover text-center">
                <thead class=" text-white" style="background-color: #323435;">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="bg-light text-dark">
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>
                            <a href="" class="btn " id="ic" title="Edit" data-toggle="modal" data-target="#update-modal-users" wire:click="editUsers({{ $user->id }})"><i class=" fa fa-edit text-warning"></i></a>
                        
                            <a href="" class="btn " id="ic" title="Delete" data-toggle="modal" data-target="#delete-modal-users" wire:click="delete({{ $user->id }})"><i class=" fa fa-trash text-danger"></i></a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div>
            {{ $users->links() }}
        </div>
    </div>
</div>
<style>
    .close {
        border-radius: 50%;
        width: 25px;
        border: none;
    }
    .close span {
        color: black;
    }
    .close:hover {
        background-color: rgb(214, 211, 211);
    }
    .title3 {
        margin-left: 8%;
    }
    .title1 {
        margin-left: 38%;
    }
    .title2 {
        margin-left: 35%;
    }
</style>
