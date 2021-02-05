<?php $this->load->view('loader/header'); ?>
<div class="container">
    <h1>Member List</h1>

    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">City</th>
                <th scope="col">ZIP code</th>
                <th scope="col">Date</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($users)) { foreach($users as $member) { ?>
            <tr>
                <th scope="row"><?php echo $member['user_id']; ?></th>
                <td><?php echo $member['Firstname']; ?></td>
                <td><?php echo $member['Lastname']; ?></td>
                <td><?php echo $member['email']; ?></td>
                <td><?php echo $member['city']; ?></td>
                <td><?php echo $member['zip']; ?></td>
                <td><?php echo $member['created_at']; ?></td>
            </tr>
            <?php } } else {?>
                <tr>
                    <td>NOT FOUND Friends!</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php $this->load->view('loader/footer'); ?>