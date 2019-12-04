<div class="container">
    <div class="row">
        <div class="col-2">
            <div class="bg-light" style="padding:20px; border-radius:20px; margin-top:20px;">
                <h6 style="text-align:center">HOT THREAD</h6>
                <ol>
                    <li><a href=""> list 1</a></li>
                    <li><a href=""> list 2</a></li>
                    <li><a href=""> list 3</a></li>
                    <li><a href=""> list 4</a></li>
                    <li><a href=""> list 5</a></li>
                    <li><a href=""> list 6</a></li>
                </ol>
            </div>
            <div class="bg-light" style="padding:20px; border-radius:20px; margin-top:20px;">
                <h6 style="text-align:center">TREND PEOPLE</h6>
                <ol>
                    <li><a href=""> list 1</a></li>
                    <li><a href=""> list 2</a></li>
                    <li><a href=""> list 3</a></li>
                    <li><a href=""> list 4</a></li>
                    <li><a href=""> list 5</a></li>
                    <li><a href=""> list 6</a></li>
                </ol>
            </div>
        </div>
        <div class="col-8">
            <div style="background-color:rgba(255, 255, 255, 0.5); margin-top:20px;">
                <img src="<?= base_url() ?>/images/profile.jpg" alt="" style="border-radius:100%; margin-left:10px;" width="40">
                <a href="" style="color:black"><?= $_SESSION['username']; ?></a>
                <form action="" method="post">
                    <textarea name="" id="" cols="100" rows="3" style="display: block; margin-left: auto; margin-right: auto;" placeholder="Ketik postingan anda disini"></textarea>
                    <input type="button" class="btn btn-primary" value="upload foto"><br>
                    <input type="submit" class="btn btn-secondary" value="Kirim" style="width:100%;">
                </form>
            </div>
            <div style="background-color:rgba(255, 255, 255, 0.5); margin-top:20px;">
                <div>
                    <img src="<?= base_url() ?>/images/profile.jpg" alt="" style="border-radius:100%; margin-left:10px;" width="35">
                    <a href="">Moh. Fathur Rohman</a> Pada (Date_time)
                    <br>
                </div>
                <h5>ini contohnya adalah judul yang lumayan panjang</h5>
                <img src="<?= base_url() ?>/images/thread/wp1828933-programmer-wallpapers.jpg" style="display: block; margin-left: auto; margin-right: auto;" alt="Ceritanya ini foto" width="500">
                <p style="padding: 20px 20px 0 20px;">penjelasan, misalnya mau diisi apa entahlah, atau lorem ipsum yang versi panjang maupun pendek yaa silahkan, nanti kalau textnya sudah lumayan panjang maka akan tampil ...</p>
                <hr>
                <div style="padding: 0 30px">
                    <img src="<?= base_url() ?>/images/profile.jpg" alt="" style="border-radius:100%; margin-left:10px;" width="30">
                    <a href="">Moh. Fathur Rohman</a> Ini contoh kalo misalnya ada yang comment
                    <br>
                    <a href="" style="padding-left:100px;">Suka</a> Pada (Date_time)
                </div>
                <table style="width:100%; text-align:center">
                    <tr>
                        <td><button style="background-color:blue; color:white; width:100%">Cendol Dawet</button></td>
                        <td><button style="background-color:red; color:white; width:100%">Bata Atos</button></td>
                    </tr>
                </table>
                <button style="width:100%">Lihat Selengkapnya</button>
            </div>

            <div style="background-color:rgba(255, 255, 255, 0.5); margin-top:20px;">
                <div>
                    <img src="<?= base_url() ?>/images/profile.jpg" alt="" style="border-radius:100%; margin-left:10px;" width="35">
                    <a href="">Moh. Fathur Rohman</a> Pada (Date_time)
                    <br>
                </div>
                <h5>ini contohnya adalah judul yang lumayan panjang</h5>
                <img src="<?= base_url() ?>/images/thread/wp1828933-programmer-wallpapers.jpg" style="display: block; margin-left: auto; margin-right: auto;" alt="Ceritanya ini foto" width="500">
                <p style="padding: 20px 20px 0 20px;">penjelasan, misalnya mau diisi apa entahlah, atau lorem ipsum yang versi panjang maupun pendek yaa silahkan, nanti kalau textnya sudah lumayan panjang maka akan tampil ...</p>
                <hr>
                <div style="padding: 0 30px">
                    <img src="<?= base_url() ?>/images/profile.jpg" alt="" style="border-radius:100%; margin-left:10px;" width="30">
                    <a href="">Moh. Fathur Rohman</a> Ini contoh kalo misalnya ada yang comment
                    <br>
                    <a href="" style="padding-left:100px;">Suka</a> Pada (Date_time)
                </div>
                <table style="width:100%; text-align:center">
                    <tr>
                        <td><button style="background-color:blue; color:white; width:100%">Cendol Dawet</button></td>
                        <td><button style="background-color:red; color:white; width:100%">Bata Atos</button></td>
                    </tr>
                </table>
                <button style="width:100%">Lihat Selengkapnya</button>
            </div>

            <div style="background-color:rgba(255, 255, 255, 0.5); margin-top:20px;">
                <button style="width:100%">Load Thread</button>
            </div>
        </div>
    </div>
</div>