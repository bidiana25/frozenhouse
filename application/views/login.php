<?php
// Cek apakah terdapat session nama message
if ($this->session->flashdata('message')) { // Jika ada
    echo '<div class="alert alert-danger">' . $this->session->flashdata('message') . '</div>'; // Tampilkan pesannya
}
?>

<form method="post" action="<?php echo base_url('auth/login'); ?>">
    <div class="form-group first">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" id="username" required>

    </div>
    <div class="form-group last mb-4">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" required>

    </div>

    <input type="submit" value="Log In" class="btn text-white btn-block btn-info">

</form>