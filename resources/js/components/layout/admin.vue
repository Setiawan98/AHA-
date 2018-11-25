<template>
    <div>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Selamat datang Admin AHA!</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#verif">Verifikasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#mapel">TambahJadwal</a>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link js-scroll-trigger" :to="{name: 'HomeLayout'}">Homepage</router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Verifikasi User -->
        <section class="bg-primary" id="verif">
            <div class="col-lg-8 mx-auto text-center">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <br>
                        <h2 class="section-heading text-white">Data Siswa Bimbel AHA! </h2>
                            <hr class="light my-4">
                    </div>
                </div>
            <table cellspacing='0'>
                         <thead>
                            <tr>
                            <th>Nama</th>
                            <th>No Hp</th>
                            <th>Asal Sekolah</th>
                            <th>Alamat</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th></th>
                            </tr>
                        </thead>
                        <tbody v-for="users in data" :key="users.username">
                            <tr>
                            <td>{{users.nama}}</td>
                            <td>{{users.no_hp}}</td>
                            <td>{{users.asal_sekolah}}</td>
                            <td>{{users.alamat}}</td>
                            <td>{{users.username}}</td>
                            <td>{{users.password}}</td>
                            <td><button type="button" class="btn btn-danger">Delete</button></td>
                            </tr>
                        </tbody>
                    </table>
            </div>
        </section>

        <!-- Tambah Mapel oleh Admin -->
        <section id="mapel">
            <div>
                <div class="col-lg-8 mx-auto text-center">
                    <form @submit.prevent="createJadwal();load = true">
                    <h2 class="section-heading">Tambahkan Mata Pelajaran</h2>
                    <img class="src-image" :src="'./images/mapel.png'" />
                    <hr class="my-4">
                    
                        <label for="mapel">Mata Pelajaran </label>
                        <input type="text" v-model=datas.nama_mapel class="form-input" name="nama_mapel"/><br><br>
                        <label for="mapel"> Hari Les</label>
                        <input type="text" v-model=datas.hari class="form-input" name="hari"/><br><br>
                        <label for="mapel">Waktu </label>
                        <input type="text" v-model=datas.jam class="form-input" name="jam"/>
                        <br><br>
                        <button type="submit" class="button is-link" :class="{'is-loading':load}">Simpan</button>
                    </form>
                </div>
            </div>
        </section>
      
    </div>
</template>
<script>
export default {
    data(){
        return{
            data:{
            },
            datas:{
                nama_mapel:'',
                hari:'',
                jam:''
            },
            users:[],
            load:false,
        }
    },
    created(){
        this.getUser();
    },
    methods:{
        getUser(){
            let url="/api/user";
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
        },
        createJadwal(){
            let url="/api/jadwal";
            axios.post(url,this.datas).then((response) => {
                this.load = false;
                this.$router.push({ name: 'Admin' })
                alert('Jadwal berhasil ditambahkan ! ');
                this.datas='';
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