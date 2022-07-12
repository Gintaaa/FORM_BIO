<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Form.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Formulir Biodata</title>
   </head>
<body>
      <!-- link : http://gintakhai.great-site.net/Form/Form.php  -->
      
      <?php
      // data php untuk input-box 

    $N = "Nama" ;
    $T = "Nomor Telephone" ;
    $A = "Agama" ;
    $K = "Kewarganegaraan" ;
    $TEMPAT = "Tempat Lahir" ;
    $TANGGAL = "Tanggal Lahir" ;
    $JK = "Jenis Kelamin" ;
    $M = "Laki-Laki" ;
    $F = "Perempuan" ;
    $O = "Lainnya" ;

    ?>

    <!-- untuk wadah atau kotak formulir -->
  <div class="container">
    <!-- Untuk judul diatas -->
    <div class="title">Formulir Biodata</div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <!-- informasi yang diminta -->
            <span class="details"><?php echo $N ?></span>
            <!-- Untuk kotak pengisian -->
            <input type="text" placeholder="Masukan Nama" required>
          </div>
          <div class="input-box">
            <span class="details"><?php echo $T ?></span>
            <input type="text" placeholder="Masukan Nomer" required>
          </div>
          <div class="input-box">
            <span class="details"><?php echo $A ?></span>
            <input type="text" placeholder="Masukan Agama" required>
          </div>
          <div class="input-box">
            <span class="details"><?php echo $K ?></span>
            <input type="text" placeholder="WNI/WNA" required>
          </div>
          <div class="input-box">
            <span class="details"><?php echo $TEMPAT ?></span>
            <input type="text" placeholder="Masukan Kota" required>
          </div>
          <div class="input-box">
            <span class="details"><?php echo $TANGGAL ?></span>
            <!-- mengisi dengan pilihan tidak di ketik hanya di klik -->
            <select>
            <option>tanggal</option>
            <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>28</option><option>29</option><option>30</option><option>31</option>
          </select>
          <select>
            <option>Bulan</option>
            <option>Januari</option><option>Februari</option><option>Maret</option><option>April</option><option>Mei</option><option>Juni</option><option>Juli</option><option>Agustus</option><option>September</option><option>Oktober</option><option>Novemver</option><option>Desember</option>
          </select>
          <select>
            <option>Tahun</option>
            <option>1995</option><option>1996</option><option>1997</option><option>1998</option><option>1999</option><option>2000</option><option>2001</option><option>2002</option><option>2003</option><option>2004</option><option>2005</option>
          </select>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title"><?php echo $JK ?></span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender"><?php echo $M ?></span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender"><?php echo $F ?></span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender"><?php echo $O ?></span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Registrasi">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
