<h1>Futbol Managers</h1>
<table class="table table-striped">
  <thead>
    <th>Manager's Name</th>
    <th>Country of Manager</th>
    <th>Manager's Age</th>
    <th>Manager's Club</th>
    <th>Manager's ID</th>
  </thead>
  <tbody>
<?php
  while($manager = $managers->fetch_assoc()) {
?>
    <tr>
      <td><?php echo $manager['manager_name']; ?></td>
      <td><?php echo $manager['manager_country']; ?></td>
      <td><?php echo $manager['manager_age']; ?></td>
      <td><?php echo $manager['manager_club']; ?></td>
      <td><?php echo $manager['manager_ID']; ?></td>
    </tr>
<?php
    }
?>
  </tbody>
</table>
