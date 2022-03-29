<br>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a href="#AccesControl" data-toggle="tab" aria-expanded="false" class="nav-link active">
      <span> > Acces Control</span>            
    </a>
  </li>
  <li class="nav-item">
    <a href="#Penjualan" data-toggle="tab" aria-expanded="false" class="nav-link">
      <span> > Master Penjualan</span> 
    </a>
  </li>
  <li class="nav-item">
    <a href="#Crud" data-toggle="tab" aria-expanded="false" class="nav-link">
      <span> > Crud</span> 
    </a>
  </li>
</ul>
<div class="tab-content col-sm-12">
  @include('master.users.group.master_data.ac')
  @include('master.users.group.master_data.penjualan')
  @include('master.users.group.master_data.crud')
</div>