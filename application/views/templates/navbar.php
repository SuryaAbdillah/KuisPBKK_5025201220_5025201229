    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg mb-4">
        <div class="container-fluid px-5 py-2">
            <!-- GAMBAR -->
            <img src="<?php echo base_url('external_file/images/logo.png');?>" alt="logo suroboyo bus" id="logo-suroboyo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- SUROBOYO BUS -->
                <ul class="navbar-nav ms-1 mb-auto my-auto">
                    <li class="nav-item" style="margin-left: 20px; margin-right: 50px;">
                        <table>
                            <tr><td><h3 aria-current="page" id="atas">SUROBOYO BUS</h3></td></tr>
                            <tr><td><h2 id="bawah">Since 2023</h2></td></tr>
                        </table>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto my-auto">
                    <li class="nav-item kanan">
                        <a class="nav-link" href="<?php echo base_url('home/jadwal')?>" style="color: white;">Pesan Tiket</a>
                    </li>
                    <li class="nav-item kanan">
                        <a class="nav-link" href="<?php echo base_url('home/halaman_tambah')?>" style="color: white;">Tambah Jadwal</a>
                    </li>
                    <li class="nav-item kanan">
                        <a class="nav-link" style="color: white;" href="<?php echo base_url('home/')?>">Login</a>
                    </li>
                    <li class="nav-item kanan">
                        <img src="<?php echo base_url('external_file/images/profil.jpg');?>" alt="foto profil" id="profil">
                    </li>
                </ul>
            </div>
        </div>
    </nav>