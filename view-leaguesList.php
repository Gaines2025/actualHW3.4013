<select class="form-select" id="lid" name="lid">
<?php
while ($leagueStuff = $leagueNames->fetch_assoc()) {
?>
    <option value="<?php echo $leagueStuff['league_ID']; ?>"> <?php echo $leagueStuff['league_name']; ?> </option>
<?php
}
?>

</select>