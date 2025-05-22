<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background: linear-gradient(135deg, #4e54c8 0%, #8f94fb 100%);">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin')}}" style="background: rgba(255,255,255,0.1); margin: 10px; border-radius: 10px;">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink" style="color: #f8f9fa;"></i>
      </div>
      <div class="sidebar-brand-text mx-3" style="font-weight: 600; font-size: 1.1rem; color: #fff;">Artisanat Shop Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0" style="border-top: 1px solid rgba(255,255,255,0.2);">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="{{route('admin')}}" style="color: #fff; border-left: 4px solid #fff;">
        <i class="fas fa-fw fa-tachometer-alt" style="color: #f8f9fa;"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider" style="border-top: 1px solid rgba(255,255,255,0.2);">

    <!-- Banner Section -->
    <div class="sidebar-heading" style="color: rgba(255,255,255,0.8); font-size: 0.8rem; text-transform: uppercase;">
        Banner Management
    </div>

    <!-- Media Manager -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('file-manager')}}" style="color: #fff;">
            <i class="fas fa-fw fa-chart-area" style="color: #6c63ff;"></i>
            <span>Media Manager</span></a>
    </li>

    <!-- Banners -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="color: #fff;">
        <i class="fas fa-image" style="color: #ff6584;"></i>
        <span>Banners</span>
        <i class="fas fa-angle-down float-right mt-1"></i>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded" style="background: rgba(255,255,255,0.9);">
          <h6 class="collapse-header" style="color: #4e54c8;">Banner Options:</h6>
          <a class="collapse-item" href="{{route('banner.index')}}" style="color: #495057;">View Banners</a>
          <a class="collapse-item" href="{{route('banner.create')}}" style="color: #495057;">Add Banner</a>
        </div>
      </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider" style="border-top: 1px solid rgba(255,255,255,0.2);">

    <!-- Shop Section -->
    <div class="sidebar-heading" style="color: rgba(255,255,255,0.8); font-size: 0.8rem; text-transform: uppercase;">
        Shop Management
    </div>

    <!-- Categories -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#categoryCollapse" aria-expanded="true" aria-controls="categoryCollapse" style="color: #fff;">
          <i class="fas fa-sitemap" style="color: #4caf50;"></i>
          <span>Categories</span>
          <i class="fas fa-angle-down float-right mt-1"></i>
        </a>
        <div id="categoryCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded" style="background: rgba(255,255,255,0.9);">
            <h6 class="collapse-header" style="color: #4e54c8;">Category Options:</h6>
            <a class="collapse-item" href="{{route('category.index')}}" style="color: #495057;">View Categories</a>
            <a class="collapse-item" href="{{route('category.create')}}" style="color: #495057;">Add Category</a>
          </div>
        </div>
    </li>

    <!-- Products -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#productCollapse" aria-expanded="true" aria-controls="productCollapse" style="color: #fff;">
          <i class="fas fa-cubes" style="color: #ff9800;"></i>
          <span>Products</span>
          <i class="fas fa-angle-down float-right mt-1"></i>
        </a>
        <div id="productCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded" style="background: rgba(255,255,255,0.9);">
            <h6 class="collapse-header" style="color: #4e54c8;">Product Options:</h6>
            <a class="collapse-item" href="{{route('product.index')}}" style="color: #495057;">View Products</a>
            <a class="collapse-item" href="{{route('product.create')}}" style="color: #495057;">Add Product</a>
          </div>
        </div>
    </li>

    <!-- Brands -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#brandCollapse" aria-expanded="true" aria-controls="brandCollapse" style="color: #fff;">
          <i class="fas fa-table" style="color: #9c27b0;"></i>
          <span>Brands</span>
          <i class="fas fa-angle-down float-right mt-1"></i>
        </a>
        <div id="brandCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded" style="background: rgba(255,255,255,0.9);">
            <h6 class="collapse-header" style="color: #4e54c8;">Brand Options:</h6>
            <a class="collapse-item" href="{{route('brand.index')}}" style="color: #495057;">View Brands</a>
            <a class="collapse-item" href="{{route('brand.create')}}" style="color: #495057;">Add Brand</a>
          </div>
        </div>
    </li>

    <!-- Shipping -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#shippingCollapse" aria-expanded="true" aria-controls="shippingCollapse" style="color: #fff;">
          <i class="fas fa-truck" style="color: #00bcd4;"></i>
          <span>Shipping</span>
          <i class="fas fa-angle-down float-right mt-1"></i>
        </a>
        <div id="shippingCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded" style="background: rgba(255,255,255,0.9);">
            <h6 class="collapse-header" style="color: #4e54c8;">Shipping Options:</h6>
            <a class="collapse-item" href="{{route('shipping.index')}}" style="color: #495057;">View Shipping</a>
            <a class="collapse-item" href="{{route('shipping.create')}}" style="color: #495057;">Add Shipping</a>
          </div>
        </div>
    </li>

    <!-- Orders -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('order.index')}}" style="color: #fff;">
            <i class="fas fa-hammer" style="color: #e91e63;"></i>
            <span>Orders</span>
        </a>
    </li>

    <!-- Reviews -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('review.index')}}" style="color: #fff;">
            <i class="fas fa-comments" style="color: #ffeb3b;"></i>
            <span>Reviews</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider" style="border-top: 1px solid rgba(255,255,255,0.2);">

    <!-- Posts Section -->
    <div class="sidebar-heading" style="color: rgba(255,255,255,0.8); font-size: 0.8rem; text-transform: uppercase;">
      Content Management
    </div>

    <!-- Posts -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#postCollapse" aria-expanded="true" aria-controls="postCollapse" style="color: #fff;">
        <i class="fas fa-fw fa-folder" style="color: #673ab7;"></i>
        <span>Posts</span>
        <i class="fas fa-angle-down float-right mt-1"></i>
      </a>
      <div id="postCollapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded" style="background: rgba(255,255,255,0.9);">
          <h6 class="collapse-header" style="color: #4e54c8;">Post Options:</h6>
          <a class="collapse-item" href="{{route('post.index')}}" style="color: #495057;">View Posts</a>
          <a class="collapse-item" href="{{route('post.create')}}" style="color: #495057;">Add Post</a>
        </div>
      </div>
    </li>

    <!-- Post Categories -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#postCategoryCollapse" aria-expanded="true" aria-controls="postCategoryCollapse" style="color: #fff;">
          <i class="fas fa-sitemap" style="color: #009688;"></i>
          <span>Post Categories</span>
          <i class="fas fa-angle-down float-right mt-1"></i>
        </a>
        <div id="postCategoryCollapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded" style="background: rgba(255,255,255,0.9);">
            <h6 class="collapse-header" style="color: #4e54c8;">Category Options:</h6>
            <a class="collapse-item" href="{{route('post-category.index')}}" style="color: #495057;">View Categories</a>
            <a class="collapse-item" href="{{route('post-category.create')}}" style="color: #495057;">Add Category</a>
          </div>
        </div>
    </li>

    <!-- Tags -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tagCollapse" aria-expanded="true" aria-controls="tagCollapse" style="color: #fff;">
            <i class="fas fa-tags" style="color: #3f51b5;"></i>
            <span>Tags</span>
            <i class="fas fa-angle-down float-right mt-1"></i>
        </a>
        <div id="tagCollapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded" style="background: rgba(255,255,255,0.9);">
            <h6 class="collapse-header" style="color: #4e54c8;">Tag Options:</h6>
            <a class="collapse-item" href="{{route('post-tag.index')}}" style="color: #495057;">View Tags</a>
            <a class="collapse-item" href="{{route('post-tag.create')}}" style="color: #495057;">Add Tag</a>
            </div>
        </div>
    </li>

    <!-- Comments -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('comment.index')}}" style="color: #fff;">
            <i class="fas fa-comments" style="color: #ff5722;"></i>
            <span>Comments</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block" style="border-top: 1px solid rgba(255,255,255,0.2);">

    <!-- Settings Section -->
    <div class="sidebar-heading" style="color: rgba(255,255,255,0.8); font-size: 0.8rem; text-transform: uppercase;">
        System Settings
    </div>

    <!-- Coupons -->
    <li class="nav-item">
      <a class="nav-link" href="{{route('coupon.index')}}" style="color: #fff;">
          <i class="fas fa-ticket-alt" style="color: #ff4081;"></i>
          <span>Coupons</span>
      </a>
    </li>

    <!-- Users -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('users.index')}}" style="color: #fff;">
            <i class="fas fa-users" style="color: #4caf50;"></i>
            <span>Users</span>
        </a>
    </li>

    <!-- Settings -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('settings')}}" style="color: #fff;">
            <i class="fas fa-cog" style="color: #607d8b;"></i>
            <span>Settings</span>
        </a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle" style="background: rgba(255,255,255,0.2); color: white;">
        <i class="fas fa-angle-left"></i>
      </button>
    </div>

    <!-- Sidebar bottom space -->
    <div style="height: 20px;"></div>

</ul>

<style>
    /* Hover effects */
    .nav-item:hover {
        background: rgba(255,255,255,0.1);
        border-radius: 5px;
    }

    .nav-link:hover {
        color: #fff !important;
    }

    .collapse-item:hover {
        background: rgba(78, 84, 200, 0.1) !important;
        color: #4e54c8 !important;
    }

    /* Active item highlighting */
    .nav-item.active {
        background: rgba(255,255,255,0.2);
        border-radius: 5px;
    }

    /* Smooth transitions */
    .nav-link, .collapse-item, .sidebar-brand {
        transition: all 0.3s ease;
    }

    /* Better dropdown arrows */
    .fa-angle-down {
        transition: transform 0.3s ease;
    }

    .nav-link.collapsed .fa-angle-down {
        transform: rotate(-90deg);
    }
</style>
