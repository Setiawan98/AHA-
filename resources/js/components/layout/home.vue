<template>
<div id='homeLayout'>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">AHA! Private Tutoring</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="#login">Login</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="#registrasi">Registrasi</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="#about">About</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="#team">Team</a>
                  </li>
                  <li class="nav-item">
                      <router-link class="nav-link js-scroll-trigger" :to="{name: 'Admin'}">Admin</router-link>
                  </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header Login -->
    <header class="masthead text-center text-white d-flex" id="login">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1 class="text-uppercase">
                      <strong>Selamat Datang di AHA! Private Tutoring</strong>
                    </h1><hr>
                </div>
                <div class="col-lg-8 mx-auto">
                    <p class="text-faded mb-5">Dengan AHA! Private Tutoring anda tidak perlu kesulitan mencari tempat les kesana kemari, hanya tinggal membuat akun dan temukan jadwal lesmu disini!</p>
                    <b data-toggle="modal" data-target="#mylogin"><a class="btn btn-primary btn-xl js-scroll-trigger">Sudah punya akun? Login disini!</a></b>
                </div>
            </div>
        </div>
    </header>

    <!-- Pop Up Login -->
    <div id="mylogin" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Silahkan Login</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <img class="tengah" :src="'./images/login.png'" width="200" height="200">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" class="form-control" name="username" v-model="input.username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" v-model="input.password" placeholder="Password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" v-on:click="login()"> Login </button>
                    <!-- <router-link v-if="authenticated" v-bind:to="{name: 'Admin'}"> </router-link> -->
                    <!-- <router-link type="button" class="btn btn-success" data-dismiss="modal" :to="{name: 'Profile'}">Login</router-link> -->
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Form Registrasi -->
    <section class="bg-primary" id="registrasi">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <form>
                        <h2 class="section-heading text-white">Registrasi Disini</h2>
                        <img :src="'./images/profil.png'" width="200" height="200"><br><br>  
                        <button type="button" class="btn btn-success">Add Image</button>
                        <div class="form-group">
                            <br><input type="text" class="form-input" name="name" id="name" placeholder="Nama Anda"/>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-input" name="name" id="no" placeholder="No Hp"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="alamat" placeholder="Alamat"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="sekolah" placeholder="Asal Sekolah"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Email"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="username" placeholder="Username"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                            <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                            <div class="form-group">
                            <input type="submit" name="submit" id="cancel" class="form-submit" value="Cancel"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Halaman About -->
    <section id="about">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading">Ada pertanyaan tentang kami?</h2>
                    <hr class="my-4">
                    <p class="mb-5">Kalian dapat bertanya lebih jelas tentang kami lewat telepon dan email di bawah ini</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 ml-auto text-center">
                    <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
                    <p>08-11-22-33-44-55</p>
                  </div>
                <div class="col-lg-4 mr-auto text-center">
                    <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
                    <p>
                      <a href="mailto:your-email@your-domain.com">AHAPrivateTutoring@gmail.com</a>
                    </p>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading"> Lokasi Les AHA! </h2>
                    <hr class="my-4">
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.1459073800743!2d110.41180101477805!3d-7.774348894397147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59f1e97f49a5%3A0xd85c448275e07a28!2sJl.+Babarsari+No.43%2C+Tambak+Bayan%2C+Caturtunggal%2C+Kec.+Depok%2C+Kabupaten+Sleman%2C+Daerah+Istimewa+Yogyakarta+55281!5e0!3m2!1sid!2sid!4v1542366045482" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </section>

    <!-- Team Kami -->
    <section class="bg-primary" id="team">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1><br>
                    <h2 class="section-heading text-white">Our Team in AHA! Private Tutoring</h2>
                    <hr class="light my-4"></h1>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                            <div class="avatar">
                                <img class="src-image" :src="'./images/sinta.png'" />
                            </div>
                            <div class="content">
                                <p>Sinta <br>
                                  Founder of AHA!</p>
                                <p><button type="button" class="btn btn-success">Contact</button></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                            <div class="avatar">
                                <img class="src-image" :src="'./images/seti.png'" />
                            </div>
                            <div class="content">
                                <p>Setiawan <br>
                                  Founder of AHA!</p>
                                <p><button type="button" class="btn btn-success">Contact</button></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                            <div class="avatar">
                                <img class="src-image" :src="'./images/tian.png'" />
                            </div>
                            <div class="content">
                                <p>Christian <br>
                                  Founder of AHA!!</p>
                                <p><button type="button" class="btn btn-success">Contact</button></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                            <div class="avatar">
                                <img class="src-image" :src="'./images/rio.png'" />
                            </div>
                            <div class="content">
                                <p>Rio <br>
                                  Founder of AHA!!</p>
                                <p><button type="button" class="btn btn-success">Contact</button></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</template>

<script>
export default {
    name: 'HomeLayout',
    data(){
        return{
            input: {
                username: "",
                password: "",
            }
        }
    },
    methods: {
            login() {
                if(this.input.username != "" && this.input.password != "") {
                    if(this.input.username == 'admin'  && this.input.password == 'admin' ) {
                    //    this.$emit("authenticated",true);
                    //    this.$router.replace({ name: "Admin" });
                        alert('Hi admin!');
                    } else {
                        alert('The username and / or password is incorrect');
                    }
                } else {
                    alert('Field kosong');
                }
            }
        }
    }
</script>


<style>

</style>
