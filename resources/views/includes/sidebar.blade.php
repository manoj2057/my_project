
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset ('public/dashboard/images/img.jpg')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2> Manoj pokharel</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>General</h3>
    <ul class="nav side-menu">
      <li><a href="{{ route('category.index') }}"><i class="fa fa-table"></i> Category </a>
        
      </li>
      <li><a href="{{ route('author.index') }}"><i class="fa fa-user"></i> Author </a>
        
        </li>
      
        <li><a href="{{ route('post.index') }}"><i class="fa fa-edit"></i> Post </a>
        
        </li>
      
    </ul>
  </div>
  

</div>