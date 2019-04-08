<div class="container">
    <div class="box">
            <form action="<?php echo base_url('Admin/login'); ?>" action="GET"  method="post">       
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="nim"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="pass"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Login"></td>
                    </tr>
                </table>
            </form>
    </div>
</div>