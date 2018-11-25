<template>
    <div>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Selamat datang AHA! Student</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#profil">InfoProfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#jadwal">InfoLes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#les">JadwalAnda</a>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link js-scroll-trigger" :to="{name: 'HomeLayout'}">Logout</router-link>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Header Profile -->
        <header class="mastheadd text-center text-white d-flex" id="login">
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <h1 class="text-uppercase">
                        <strong>Halo AHA! Student</strong>
                        </h1><hr>
                    </div>
                    <div class="col-lg-8 mx-auto">
                        <p class="text-faded mb-5">Halo AHA! Student. Disini kalian dapat melihat profile, melihat les yang tersedia, serta mengatur jadwal les kalian sendiri. Semangat !</p>
                    </div>
                </div>
            </div>
        </header>

        <!-- Info Profile -->
        <section id="profil">
            <div class="container my-auto">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading">Data Profile</h2>
                    <img :src="'./images/profil.png'" width="200" height="200"><br><br>  
                    <br>
                    <table cellspacing='0'>
                    <thead>
                    <tr>
                        <th>Jenis</th>
                        <th></th>
                        <th>Data Diri</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td> ID Siswa </td>
                        <td> : </td>
                        <td> 1</td>
                    </tr>
                    <tr>
                        <td> Nama </td>
                        <td> : </td>
                        <td> Setiawan</td>
                    </tr>
                    <tr>
                        <td> No HP </td>
                        <td> : </td>
                        <td> 08123456789</td>
                    </tr>
                    <tr>
                        <td> Alamat </td>
                        <td> : </td>
                        <td> Jalan Babarsari 43</td>
                    </tr>
                    <tr>
                        <td> Asal Sekolah </td>
                        <td> : </td>
                        <td> SMA Bopkri 1</td>
                    </tr>
                    <tr>
                        <td> Email </td>
                        <td> : </td>
                        <td> setiawan98@gmail.com</td>
                    </tr>
                    </tbody>
                    </table>
                    <br>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#editProfile">Edit Profil disini!</a>
                </div>
            </div>
            </div>
        </section>

        <!-- Form Edit Profile -->
        <section class="bg-primary" id="editProfile">
        <div class="container my-auto">
            <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <form>
                    <h2 class="section-heading text-white">Edit Profile</h2>
                    <img :src="'./images/profil.png'" width="200" height="200"><br><br>  
                    <button type="button" class="btn btn-success">Edit Image</button>
                    <div class="form-group">
                        <br><input type="text" class="form-input" name="name" id="name" placeholder="Setiawan"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="name" id="no" placeholder="08123456789"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="name" id="alamat" placeholder="Jl. Tambak Bayan 5"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="name" id="sekolah" placeholder="SMA Bopkri 1"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-input" name="password" id="password" placeholder="Your password"/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Enter your new password"/>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" id="cancel" class="form-submit" value="Save"/>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </section>

        <!-- Halaman tampil Jadwal yang tersedia-->
        <section id="jadwal">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                    <br>
                    <h2 class="section-heading">Jadwal Les yang tersedia  </h2>
                    <hr class="my-4">
                    <div>
                    <table cellspacing='0'>
                        <thead>
                            <tr>
                            <th>Mata Pelajaran</th>
                            <th>Hari</th>
                            <th>Jam</th>
                            </tr>
                        </thead>
                        <tbody v-for="data in data" :key="data.nama_mapel">
                            <tr>
                            <td>{{data.nama_mapel}}</td>
                            <td>{{data.hari}}</td>
                            <td>{{data.jam}}</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <br><br> 

        <!-- Info les yang sudah diambil -->
        <section class="bg-primary" id="les">
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                    <br>
                    <h2 class="section-heading text-white">Jadwal Les yang Diambil</h2>
                        <hr class="light my-4">
                    </div>
                    <table cellspacing='0'>
                        <thead>
                            <tr>
                            <th>Mata Pelajaran</th>
                            <th>Hari</th>
                            <th>Jam</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>Matematika</td>
                            <td>Senin</td>
                            <td>13.00</td>
                            <td><button type="button" class="btn btn-danger">Delete</button></td>
                            </tr>
                            <tr>
                            <td>Bahasa Indonesia</td>
                            <td>Selasa</td>
                            <td>12.00</td>
                            <td><button type="button" class="btn btn-danger">Delete</button></td>
                            </tr>
                            <tr>
                            <td>Bahasa Inggris</td>
                            <td>Rabu</td>
                            <td>12.00</td>
                            <td><button type="button" class="btn btn-danger">Delete</button></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="col-lg-8 mx-auto text-center">
                        <br><h2 class="section-heading text-white">Total Biaya : Rp 300000</h2>
                        <p data-toggle="modal" data-target="#tambahJadwal"><button type="button" class="btn btn-success">Tambah Jadwal</button></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pop Up Tambah jadwal les -->
        <div id="tambahJadwal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">  Tambah Jadwal Les  </h4>
                    </div>
                    <div class="modal-body">
                    <form>
                        <div class="form-group">
                        <label for="sel1">Pilih Mata Pelajaran</label>
                        <select class="form-control" id="sel1">
                            <option v-for="data in data" :key="data.nama_mapel">{{data.nama_mapel}}</option>
                        </select>
                        </div>
                    </form>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Tambah Jadwal</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</template>
<script>
export default {
    data(){
        return{
            data:[]
        }
    },
    created(){
        this.getData();
    },
    methods:{
        getData(){
            let url="/api/jadwal";
            axios.get(url).then((response) => {
                console.log(response);
                this.data = response.data;
            }).catch(error => {
                this.$toast.open({
                    duration: 2000,
                    message: error,
                    position: 'is-bottom',
                    type: 'is-danger',
                    queue: false,
                })
            });
        }
    }
}
</script>
