<?php
?>
<html>
<head>

    <style>
table table-striped{
    color: red;
    background-color: blue;
}
</style>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
</head>
<body>
</h1>Student Views</h1>
<table border="2" class="table table-striped">
    <thead>
        <tr>
            <th>SN</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Contact</th>

</tr>
</thead>
<tbody>
<tr>
        <td><?php echo $item['id']?></td>
        <td><?= $item['First Name']?></td>
        <td><?= $item['Last Name']?></td>
        <td><?= $item['Email Name']?></td>
        <td><?= $item['Address']?></td>
        <td><?= $item['Contact']?></td>
</tr>
<?php ?>

    <tr>
        <td>1</td>
        <td>Raj</td>
        <td>Yadav</td>
        <td>Raj@gmail.com</td>
        <td>BTm</td>
        <td>989898989</td>
</tr>
<tr>
        <td>2</td>
        <td>Ram</td>
        <td>singh</td>
        <td>Ram@gmail.com</td>
        <td>KTM</td>
        <td>989898989</td>
</tr>
<tr>
        <td>3</td>
        <td>Raj</td>
        <td>Yadav</td>
        <td>Raj@gmail.com</td>
        <td>BTm</td>
        <td>989898989</td>
</tr>
</tbody>
</table>
</body>
</html>