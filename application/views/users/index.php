<ul class="nav justify-content-center bg-dark text-light">
  <li class="nav-item">
<center>        <a class="nav-link text-white h4" href="<?php echo base_url();?>user">Codeigniter Vue JS <img src="<?php echo base_url();?>assets/img/Vue-Logo-Full-White.png" width="10%" height="10%"></a>
</center> 
 </li>
   <marquee> <font color="magenta">Aplikasi Codeigniter Menggunakan Vue JS</font> </marquee>
</ul>

  <div id="app">

   <div class="container">

    <div class="my-10">
        <transition
                enter-active-class="animated fadeInLeft"
                     leave-active-class="animated fadeOutRight">
                     <div class="notification is-success text-center px-5 top-middle" v-if="successMSG" @click="successMSG = false">{{successMSG}}</div>
            </transition>
			<center>
        <div class="nav-item">
           <table class="table bg-dark my-3">
               <tr>
                   <td> <button class="btn btn-default btn-block" @click="addModal= true">Tambah</button></td>
                   <td><input placeholder="Cari"type="search" class="form-control" v-model="search.text" @keyup="searchUser" name="search"></td>
               </tr>
           </table>
                <center>karena tabel memiliki kolom yang panjang maka di buatkan slide methode/tabel responsive</center>
            <table class="table table is-bordered is-hoverable table-responsive">
               <thead class="text-white bg-dark" >

                <th><font size="2.5rem" color="#fefefefe">ID</font></th>
                <th><font size="2.5rem" color="#fefefefe">Nama Depan</font></th>
                <th><font size="2.5rem" color="#fefefefe">Nama Akhir</font></th>
                <th><font size="2.5rem" color="#fefefefe">Email</font></th>
                <th><font size="2.5rem" color="#fefefefe">No Ponsel</font></th>
                <th><font size="2.5rem" color="#fefefefe">Alamat</font></th>
                <th><font size="2.5rem" color="#fefefefe">Jenis Kelamin</font></th>
                <th colspan="2" class="text-center text-white"><font size="2rem" color="#fefefefe">Action</font></th>
                </thead>
                <tbody class="table-light-has-border">
                    <tr v-for="user in users" class="table table-striped">
                        <td class="text-content h10">{{user.id}}</td>
                        <td class="text-content h8">{{user.firstname}}</td>
                        <td class="text-content h8">{{user.lastname}}</td>
                        <td class="text-content h8">{{user.email}}</td>
                        <td class="text-content h8">{{user.contact}}</td>
                        <td class="text-content h8">{{user.address}}</td>
                        <td>
                        <img :src="imgGender(user.gender)"  width='45%' height="45%">
                        </td>
                        <td width="10%"><button class="btn btn-info fa fa-edit" @click="editModal = true; selectUser(user)"></button></td>
                        <td width="10%"><button class="btn btn-danger fa fa-trash" @click="deleteModal = true; selectUser(user)"></button></td>
                    </tr>
                    <tr v-if="emptyResult">
                      <td colspan="9" rowspan="4" class="text-center h1">No Record Found</td>
                  </tr>
                </tbody>
                
            </table>
            
        </div>
				</center>
    </div>
     <pagination
        :current_page="currentPage"
        :row_count_page="rowCountPage"
         @page-update="pageUpdate"
         :total_users="totalUsers"
         :page_range="pageRange"
         >
      </pagination>
</div>
<?php include 'modal.php';?>

</div>

