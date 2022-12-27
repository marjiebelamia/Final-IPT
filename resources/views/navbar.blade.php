<nav class="navbar navbar-expand-lg" style="background-color:#f00456;">

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        @role('admin')
                <a class="nav-link text-white mt-2 {{ 'dashboard' == request()->path() ? 'active' : '' }}" href="{{ '/dashboard' }}"><span class="fas fa-tachometer-alt"></span> Home</a>
         
    @endrole
      </li>
      <li class="nav-item">
        <a class="nav-link text-white mt-1 {{ 'recent-post' == request()->path() ? 'active' : '' }}" href="{{ '/recent-post' }}"><span class="fas fa-history"></span> Recent Posts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white mt-1 {{ 'my-post' == request()->path() ? 'active' : '' }}" href="{{ '/my-post'}}"><span class=" fas fa-notes"></span> My Posts</a>
      </li>
      <li class="nav-item">
        @role('admin')
      
        <a class="nav-link text-white mt-1 mb-1 {{ 'log' == request()->path() ? 'active' : '' }}" href="{{ '/log' }}"><span class="fas fa-list "></span> Activity Logs</a>
        @endrole
      </li>

      <li class="nav-item">
        @role('admin')
        <a class="nav-link text-white mt-1 {{ 'admin/users' == request()->path() ? 'active' : '' }}" href="{{ route('admin.users.index') }}"><span class="fas fa-users"></span> Users</a>
        @endrole
      </li>

      <li class="nav-item">
        @role('admin')
        <a class="nav-link text-white mt-1 {{ 'admin/roles' == request()->path() ? 'active' : '' }}" href="{{ route('admin.roles.index') }}"><span class="fas fa-notes"></span> Roles</a>
        @endrole
      </li>

      <li class="nav-item">
        <a class="nav-link text-white mt-1" href="{{ '/logout'}}"><span class=" fa-regular fa-right-from-bracket"></span> Logout</a>
        
      </li>
    </ul>
  </div>
</div>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
            <div class="dropdown dropstart text-light">
               {{Auth::user()->name}}
                <img style="width: 65px; height: 55px; border-radius: 50%; " src="
                {{(Auth::user()->gender === 'Male') ? asset('images/man.png') : ''}}
                {{(Auth::user()->gender === 'Female') ? asset('images/woman.png') : ''}}
                " title="profile" class="btn text-white"  aria-expanded="false" >
                
            </div>
        </ul>
    </div>
</nav>
  


<style>
    #profile-name {
        font-size: 18px;
        border-bottom: 1px solid white;
        padding-bottom: 10px;
    }
    #profile-image {
        margin-left: 15px;
    }
    #buttt {
        border: none;
        background-color: rgba(17, 162, 172, 0.37);
        width: 145px;
        color: rgb(255, 255, 255);
    }
    #buttt:hover {
        background-color: rgb(17, 162, 172);
    }
    #profile-name a {
        text-decoration: none;
        color: rgb(225, 222, 222);
    }
    #profile-name a:hover {
        background-color: rgba(255, 255, 255, 0);
        color: rgb(255, 255, 255);
    }
    .navbar-nav a{
        margin-left: 20px;
        margin-right: 20px;
        border-radius: 5px;
        width: 120px;
        margin: 5px;
        text-align: center;
    }
    .navbar-nav a:hover{
        background-color: rgb(17, 162, 172);
        border-radius: 5px;
    }
   
        #select {
        color: white;
    }
    #select2 {
        background-color: rgb(19, 131, 65);
        width: 300px;
    }
    #select3 {
        background-color: rgb(19, 131, 65);
    }
    #select2 li:hover {
        background-color: rgb(17, 162, 172);
    }


.sidebar {
  margin: 0;
  padding: 0;
  width: 250px;
  background-color: #292b2c;
  position: fixed;
  height: 100%;
 
}

.sidebar a {
  display: block;
  color:  white;
  padding: 16px;
  text-decoration: none;
}

.active{
     color:white;
     background-color: #050435;
}
.navbar a:hover{
        background-color: #050435;
        color: white;
    }


.sidebar a:hover{
        background-color: #050435;
        color: white;
    }
 

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}






</style>
