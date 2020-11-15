<?php

$id_user = $this->session->userdata('id_user');
$role = $this->session->userdata('role');

?>


<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/dashboard'); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3">ADMIN | MT</div>
    </a>

    <!-- Nav Item - Charts -->
    <li class="nav-item <?php if ($this->uri->segment(2) == "dashboard") {
                            echo "active";
                        }
                        ?>">
        <a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Dashboard</span></a>

    <li class="nav-item <?php if ($this->uri->segment(2) == "mobil") {
                            echo "active";
                        }
                        ?>">
        <a class="nav-link" href="<?php echo base_url('admin/mobil') ?>">
            <i class="fas fa-fw fa-car"></i>
            <span>Mobil</span></a>

    <li class="nav-item <?php if ($this->uri->segment(2) == "layanan") {
                            echo "active";
                        }
                        ?>">
        <a class="nav-link" href="<?php echo base_url('admin/layanan') ?>">
            <i class="fas fa-fw fa-file"></i>
            <span>Layanan</span></a>

        <!-- Nav Item - Charts -->
    <li class="nav-item <?php if ($this->uri->segment(2) == "konfigurasi") {
                            echo "active";
                        }
                        ?>">
        <a class="nav-link" href="<?php echo base_url('admin/konfigurasi') ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Profil</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item <?php if ($this->uri->segment(2) == "user") {
                            echo "active";
                        } ?>">
        <a class="nav-link" href="<?= base_url('admin/user') ?>">
            <i class="fas fa-user"></i>
            <span>User</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <li class="nav-item">
        <a class="nav-link" target="_blank" href="<?= base_url() ?>">
            <i class="fas fa-globe"></i>
            <span>Go to home</span></a>

    <li class="nav-item">
        <a class="nav-link tombol-logout" href="<?= base_url('admin/auth/logout') ?>">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>


<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">