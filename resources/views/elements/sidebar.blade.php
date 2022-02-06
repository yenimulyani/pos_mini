<div id="sidebar" class="active">
   
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><img src="#" alt="Logo" srcset="" width="200px" height=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li
                class="sidebar-item active ">
                <a href="{{ route('dashboard')}}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            
            
 


<li class="sidebar-title">
 <a href="{{route('product.index')}}">Produk</a>
</li>

<li class="sidebar-title">
 <a href="{{route('categoryproduct.index')}}">Kategori Produk</a></li>

<br>

<form method="POST" action="{{ route('logout')}}">
    @if (Auth::check()) 
    @csrf 
    <button type="submit" class="btn btn-default">Logout</button>
</form> 

    @endif 

<!-- <li
class="sidebar-item  has-sub">
<a href="#" class='sidebar-link'>
    <i class="bi bi-file-earmark-spreadsheet-fill"></i>
    <span>Datatables</span>
</a>
<ul class="submenu ">
    <li class="submenu-item">
        <a href="table-datatable.html">Datatable</a>
    </li>
    <li class="submenu-item">
        <a href="table-datatable-jquery.html">Datatable (jQuery)</a>
    </li>
</ul>
</li> -->

</ul>
</div>
<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
</div>

